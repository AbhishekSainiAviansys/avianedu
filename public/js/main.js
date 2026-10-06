/* ============================================================
   AVIANEDU — site interactions
   theme switch · sticky header · mobile nav · scroll reveal
   counters · testimonial slider · accordions · back-to-top
   ============================================================ */
(function () {
    'use strict';

    var doc = document.documentElement;
    var THEME_KEY = 'avianedu-theme';
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------- theme ---------- */
    function syncDots() {
        var current = doc.getAttribute('data-theme') || 'blue';
        document.querySelectorAll('[data-theme-set]').forEach(function (b) {
            b.setAttribute('aria-pressed', b.dataset.themeSet === current ? 'true' : 'false');
        });
    }
    document.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-theme-set]');
        if (!btn) return;
        var theme = btn.dataset.themeSet;
        doc.setAttribute('data-theme', theme);
        try { localStorage.setItem(THEME_KEY, theme); } catch (err) { /* private mode */ }
        syncDots();
    });
    syncDots();

    /* ---------- sticky header ---------- */
    var header = document.getElementById('siteHeader');
    function onScroll() {
        if (header) header.classList.toggle('scrolled', window.scrollY > 16);
    }
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    /* ---------- mobile menu ---------- */
    var toggle = document.querySelector('.nav-toggle');
    var menu = document.getElementById('mobileMenu');
    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            var open = menu.classList.toggle('open');
            toggle.classList.toggle('open', open);
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menu.classList.remove('open');
                toggle.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    /* ---------- reveal on scroll ---------- */
    if ('IntersectionObserver' in window) {
        var revealIO = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    revealIO.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        document.querySelectorAll('.reveal').forEach(function (el) { revealIO.observe(el); });

        /* ---------- animated counters ---------- */
        function formatNum(n) { return n.toLocaleString('en-IN'); }
        var counterIO = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                counterIO.unobserve(el);
                var target = parseFloat(el.dataset.countTo) || 0;
                var suffix = el.dataset.countSuffix || '';
                if (reduce) { el.textContent = formatNum(target) + suffix; return; }
                var duration = 1500;
                var start = performance.now();
                (function tick(now) {
                    var p = Math.min((now - start) / duration, 1);
                    var eased = 1 - Math.pow(1 - p, 3);
                    var value = Math.floor(target * eased);
                    el.textContent = formatNum(value) + suffix;
                    if (p < 1) { requestAnimationFrame(tick); }
                    else { el.textContent = formatNum(target) + suffix; }
                })(start);
            });
        }, { threshold: 0.5 });
        document.querySelectorAll('[data-count-to]').forEach(function (el) { counterIO.observe(el); });
    } else {
        document.querySelectorAll('.reveal').forEach(function (el) { el.classList.add('in'); });
    }

    /* ---------- testimonial slider ---------- */
    var track = document.querySelector('.testi-track');
    if (track) {
        var slides = track.children.length;
        var index = 0;
        var timer = null;
        var dots = document.querySelectorAll('.testi-dots .dot');

        function goTo(i) {
            index = (i + slides) % slides;
            track.style.transform = 'translateX(-' + (index * 100) + '%)';
            dots.forEach(function (d, j) { d.classList.toggle('on', j === index); });
        }
        function restart() {
            if (timer) clearInterval(timer);
            if (!reduce) timer = setInterval(function () { goTo(index + 1); }, 6500);
        }
        var prev = document.querySelector('[data-testi="prev"]');
        var next = document.querySelector('[data-testi="next"]');
        if (prev) prev.addEventListener('click', function () { goTo(index - 1); restart(); });
        if (next) next.addEventListener('click', function () { goTo(index + 1); restart(); });
        dots.forEach(function (d, j) {
            d.addEventListener('click', function () { goTo(j); restart(); });
        });
        goTo(0);
        restart();
    }

    /* ---------- accordions ---------- */
    document.querySelectorAll('.accordion').forEach(function (acc) {
        var head = acc.querySelector('.acc-head');
        var body = acc.querySelector('.acc-body');
        if (!head || !body) return;
        head.addEventListener('click', function () {
            var willOpen = !acc.classList.contains('open');
            var group = acc.closest('[data-acc-group]');
            if (group && willOpen) {
                group.querySelectorAll('.accordion.open').forEach(function (other) {
                    other.classList.remove('open');
                    var ob = other.querySelector('.acc-body');
                    if (ob) ob.style.maxHeight = null;
                });
            }
            acc.classList.toggle('open', willOpen);
            body.style.maxHeight = willOpen ? body.scrollHeight + 'px' : null;
            head.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
        });
    });

    /* ---------- back to top ---------- */
    var topBtn = document.querySelector('.back-to-top');
    if (topBtn) {
        window.addEventListener('scroll', function () {
            topBtn.classList.toggle('show', window.scrollY > 600);
        }, { passive: true });
        topBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' });
        });
    }

    /* ---------- hero video: pause when hero scrolls off-screen ----------
       Sound strategy: try unmuted first (works where autoplay policy allows);
       fall back to muted so the video always plays; unlock sound on the
       first user gesture (click / key / touch) — no visible buttons.       */
    var heroVideo = document.querySelector('.hero-visual video');
    var heroSection = document.querySelector('.hero');
    var heroVisible = true;
    var heroSoundUnlocked = false;
    var heroTryPlay = function () {
        if (!heroVideo || !heroVisible || document.hidden) return;
        if (heroSoundUnlocked && heroVideo.muted) { heroVideo.muted = false; }
        var p = heroVideo.play();
        if (p && p.catch) {
            p.catch(function () {
                /* autoplay with sound blocked — fall back to muted playback */
                heroVideo.muted = true;
                var pm = heroVideo.play();
                if (pm && pm.catch) { pm.catch(function () {}); }
            });
        }
    };
    var unlockHeroSound = function () {
        if (!heroVideo) return;
        heroSoundUnlocked = true;
        if (heroVisible && !document.hidden && heroVideo.muted) {
            heroVideo.muted = false; /* gesture grants permission — sound on */
        }
        document.removeEventListener('pointerdown', unlockHeroSound);
        document.removeEventListener('keydown', unlockHeroSound);
        document.removeEventListener('touchend', unlockHeroSound);
    };
    document.addEventListener('pointerdown', unlockHeroSound);
    document.addEventListener('keydown', unlockHeroSound);
    document.addEventListener('touchend', unlockHeroSound);
    if (heroVideo && heroSection && 'IntersectionObserver' in window) {
        var heroIO = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                heroVisible = entry.isIntersecting;
                if (heroVisible && !document.hidden) {
                    heroTryPlay();
                } else {
                    heroVideo.pause();
                }
            });
        }, { threshold: 0 });
        heroIO.observe(heroSection);

        document.addEventListener('visibilitychange', function () {
            if (document.hidden) {
                heroVideo.pause();
            } else if (heroVisible) {
                heroTryPlay();
            }
        });
    }

    /* ---------- train sound: loop while #weekly-test is on-screen ---------- */
    var trainSound = document.getElementById('trainSound');
    var trainSection = document.getElementById('weekly-test');
    var trainVisible = false;
    var trainRetryTimer = null;
    var trainPlay = function () {
        if (!trainSound || !trainVisible || document.hidden) return;
        var p = trainSound.play();
        if (p && p.catch) { p.catch(function () {}); } /* blocked until first user gesture */
    };
    var trainIsPlaying = function () {
        return trainSound && !trainSound.paused && !trainSound.ended;
    };
    var trainStopRetries = function () {
        if (trainRetryTimer) { clearInterval(trainRetryTimer); trainRetryTimer = null; }
    };
    /* aggressive retry: keep trying ~1x/sec while the section is on-screen
       until playback succeeds — catches browsers that remember a granted
       autoplay permission for this site (scroll alone then works) */
    var trainStartRetries = function () {
        if (trainRetryTimer || !trainVisible || document.hidden) return;
        trainRetryTimer = setInterval(function () {
            if (trainIsPlaying() || !trainVisible || document.hidden) {
                trainStopRetries();
                return;
            }
            trainPlay();
        }, 1000);
    };
    if (trainSound && trainSection && 'IntersectionObserver' in window) {
        trainSound.volume = 0.4;

        var trainIO = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                trainVisible = entry.isIntersecting;
                if (trainVisible) {
                    trainPlay();
                    trainStartRetries();
                } else {
                    trainSound.pause();
                    trainStopRetries();
                }
            });
        }, { threshold: 0 });
        trainIO.observe(trainSection);

        /* scroll-driven retries (throttled): scrolling into the section
           fires fresh play() attempts while it is visible */
        var trainScrollBusy = false;
        var trainOnScroll = function () {
            if (!trainVisible || trainIsPlaying() || trainScrollBusy) return;
            trainScrollBusy = true;
            trainPlay();
            setTimeout(function () { trainScrollBusy = false; }, 500);
        };
        window.addEventListener('scroll', trainOnScroll, { passive: true });
        window.addEventListener('wheel', trainOnScroll, { passive: true });
        window.addEventListener('touchmove', trainOnScroll, { passive: true });

        document.addEventListener('visibilitychange', function () {
            if (document.hidden) {
                trainSound.pause();
                trainStopRetries();
            } else {
                trainPlay();
                if (trainVisible) { trainStartRetries(); }
            }
        });

        /* last resort: browsers that hard-block audible autoplay until the
           first click / keypress anywhere on the page */
        var unlockTrain = function () {
            trainPlay();
            document.removeEventListener('pointerdown', unlockTrain);
            document.removeEventListener('keydown', unlockTrain);
            document.removeEventListener('touchend', unlockTrain);
        };
        document.addEventListener('pointerdown', unlockTrain);
        document.addEventListener('keydown', unlockTrain);
        document.addEventListener('touchend', unlockTrain);
    }

    /* ---------- icons ---------- */
    if (window.lucide && typeof window.lucide.createIcons === 'function') {
        window.lucide.createIcons({ attrs: { 'stroke-width': 1.8 } });
    }
})();

