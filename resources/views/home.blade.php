@extends('layout.app')

@section('title', 'AvianEdu — Research-led study material, mock papers & assessments')
@section('description', 'AvianEdu crafts curriculum-aligned study material, mock papers, test series and student accessories for schools, online educators and competition organisers. A venture of Aviansys Technologies.')

@section('content')

{{-- ============ HERO ============ --}}
<section class="hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>

    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow"><i data-lucide="sparkles"></i> From aerospace labs to exam halls</span>

            <h1>Study material that teaches.<br>Mock papers that <span class="accent">predict</span>.</h1>

            <p class="hero-sub">
                AvianEdu is the education venture of Aviansys Technologies. We research syllabi, write
                original content from scratch, and supply it to schools, online educators and competition
                organisers — with the same rigour we once reserved for flight systems.
            </p>

            <div class="hero-ctas">
                <a href="{{ route('services') }}" class="btn btn-primary btn-lg">
                    Explore our services <i data-lucide="arrow-right" class="arr"></i>
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline btn-lg">
                    <i data-lucide="message-circle"></i> Talk to our team
                </a>
            </div>

            <div class="hero-note">
                <span class="dot-avatars">
                    <span style="background:var(--primary)">PS</span>
                    <span style="background:var(--accent)">RV</span>
                    <span style="background:var(--primary-dark)">AM</span>
                </span>
                Trusted by 30+ schools, creators &amp; contest platforms
            </div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <b data-count-to="500" data-count-suffix="+">500+</b>
                    <span>mock papers authored</span>
                </div>
                <div class="hero-stat">
                    <b data-count-to="50000" data-count-suffix="+">50,000+</b>
                    <span>questions in our bank</span>
                </div>
                <div class="hero-stat">
                    <b data-count-to="30" data-count-suffix="+">30+</b>
                    <span>institutional partners</span>
                </div>
                <div class="hero-stat">
                    <b data-count-to="8" data-count-suffix="">8</b>
                    <span>boards &amp; curricula</span>
                </div>
            </div>
        </div>

        <div class="hero-visual">
            <img class="main-img"
                 src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=1100&q=80"
                 alt="Students collaborating over study material with laptops and notebooks">

            <div class="float-card fc-1">
                <span class="tick"><i data-lucide="badge-check"></i></span>
                3-tier quality check
            </div>
            <div class="float-card fc-2">
                <span class="tick"><i data-lucide="file-check-2"></i></span>
                CBSE 2025-26 aligned
            </div>
            <div class="float-card fc-3">
                <span class="tick"><i data-lucide="timer"></i></span>
                Sample chapter in 48 hrs
            </div>
        </div>
    </div>
</section>

{{-- ============ SUBJECT TICKER ============ --}}
<div class="marquee" aria-hidden="true">
    <div class="marquee-track">
        <div class="marquee-group">
            <span class="marquee-item"><span class="dot"></span>Physics</span>
            <span class="marquee-item"><span class="dot"></span>Chemistry</span>
            <span class="marquee-item"><span class="dot"></span>Mathematics</span>
            <span class="marquee-item"><span class="dot"></span>Biology</span>
            <span class="marquee-item"><span class="dot"></span>Reasoning</span>
            <span class="marquee-item"><span class="dot"></span>General Science</span>
            <span class="marquee-item"><span class="dot"></span>English</span>
            <span class="marquee-item"><span class="dot"></span>Computer Science</span>
            <span class="marquee-item"><span class="dot"></span>General Knowledge</span>
            <span class="marquee-item"><span class="dot"></span>Aptitude</span>
        </div>
        <div class="marquee-group">
            <span class="marquee-item"><span class="dot"></span>Physics</span>
            <span class="marquee-item"><span class="dot"></span>Chemistry</span>
            <span class="marquee-item"><span class="dot"></span>Mathematics</span>
            <span class="marquee-item"><span class="dot"></span>Biology</span>
            <span class="marquee-item"><span class="dot"></span>Reasoning</span>
            <span class="marquee-item"><span class="dot"></span>General Science</span>
            <span class="marquee-item"><span class="dot"></span>English</span>
            <span class="marquee-item"><span class="dot"></span>Computer Science</span>
            <span class="marquee-item"><span class="dot"></span>General Knowledge</span>
            <span class="marquee-item"><span class="dot"></span>Aptitude</span>
        </div>
    </div>
</div>

{{-- ============ WEEKLY MATHS TEST — 7-DAY CYCLE ============ --}}
<section class="section section--tint" id="weekly-test">
    <div class="maths-drift" aria-hidden="true">
        <div class="drift-row row-a">
            <div class="drift-track">
                <div class="drift-set">
                    <span class="m-glyph">&pi;</span><i data-lucide="sigma"></i><span class="m-glyph">&sum;</span><i data-lucide="calculator"></i><span class="m-glyph">&radic;</span><i data-lucide="divide"></i><span class="m-glyph">&infin;</span><i data-lucide="triangle"></i><span class="m-glyph">&Delta;</span><i data-lucide="ruler"></i><span class="m-glyph">&alpha;</span><span class="m-glyph">&beta;</span><i data-lucide="compass"></i><span class="m-glyph">&lambda;</span><i data-lucide="infinity"></i><span class="m-glyph">&frac12;</span><i data-lucide="pi"></i><span class="m-glyph">%</span><span class="m-glyph">&theta;</span>
                </div>
                <div class="drift-set">
                    <span class="m-glyph">&pi;</span><i data-lucide="sigma"></i><span class="m-glyph">&sum;</span><i data-lucide="calculator"></i><span class="m-glyph">&radic;</span><i data-lucide="divide"></i><span class="m-glyph">&infin;</span><i data-lucide="triangle"></i><span class="m-glyph">&Delta;</span><i data-lucide="ruler"></i><span class="m-glyph">&alpha;</span><span class="m-glyph">&beta;</span><i data-lucide="compass"></i><span class="m-glyph">&lambda;</span><i data-lucide="infinity"></i><span class="m-glyph">&frac12;</span><i data-lucide="pi"></i><span class="m-glyph">%</span><span class="m-glyph">&theta;</span>
                </div>
            </div>
        </div>
        <div class="drift-row row-b">
            <div class="drift-track slow">
                <div class="drift-set">
                    <span class="m-glyph">+</span><span class="m-glyph">&minus;</span><i data-lucide="plus"></i><span class="m-glyph">&times;</span><i data-lucide="minus"></i><span class="m-glyph">&divide;</span><span class="m-glyph">=</span><i data-lucide="x"></i><span class="m-glyph">&ne;</span><span class="m-glyph">&asymp;</span><i data-lucide="percent"></i><span class="m-glyph">&plusmn;</span><span class="m-glyph">?</span><i data-lucide="sigma"></i><span class="m-glyph">&pi;</span><span class="m-glyph">&sum;</span>
                </div>
                <div class="drift-set">
                    <span class="m-glyph">+</span><span class="m-glyph">&minus;</span><i data-lucide="plus"></i><span class="m-glyph">&times;</span><i data-lucide="minus"></i><span class="m-glyph">&divide;</span><span class="m-glyph">=</span><i data-lucide="x"></i><span class="m-glyph">&ne;</span><span class="m-glyph">&asymp;</span><i data-lucide="percent"></i><span class="m-glyph">&plusmn;</span><span class="m-glyph">?</span><i data-lucide="sigma"></i><span class="m-glyph">&pi;</span><span class="m-glyph">&sum;</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="calendar-check-2"></i> Weekly test program</span>
            <h2>Six days to learn. One day to <span class="text-gradient">prove it</span>.</h2>
            <p>
                Our flagship 7-day Maths track for CBSE students (classes 1–9) — daily material,
                solved examples and realtime tutors for six days, then a live global online exam
                on the seventh.
            </p>
        </div>

        <div class="train-stage reveal">
        <div class="train-scenery" aria-hidden="true">
            <div class="scenery-row sky-a">
                <div class="drift-track rev med">
                    <div class="drift-set scatter">
                        <span class="m-glyph">&pi;</span><i data-lucide="sigma"></i><span class="m-glyph">&sum;</span><i data-lucide="divide"></i><span class="m-glyph">&alpha;</span><span class="m-glyph">&beta;</span><i data-lucide="calculator"></i><span class="m-glyph">&infin;</span>
                    </div>
                    <div class="drift-set scatter">
                        <span class="m-glyph">&pi;</span><i data-lucide="sigma"></i><span class="m-glyph">&sum;</span><i data-lucide="divide"></i><span class="m-glyph">&alpha;</span><span class="m-glyph">&beta;</span><i data-lucide="calculator"></i><span class="m-glyph">&infin;</span>
                    </div>
                </div>
            </div>
            <div class="scenery-row sky-b">
                <div class="drift-track rev mid-fast">
                    <div class="drift-set scatter">
                        <span class="m-glyph">&Delta;</span><i data-lucide="pi"></i><span class="m-glyph">&radic;</span><i data-lucide="infinity"></i><span class="m-glyph">&theta;</span><span class="m-glyph">&lambda;</span><i data-lucide="sigma"></i><span class="m-glyph">%</span>
                    </div>
                    <div class="drift-set scatter">
                        <span class="m-glyph">&Delta;</span><i data-lucide="pi"></i><span class="m-glyph">&radic;</span><i data-lucide="infinity"></i><span class="m-glyph">&theta;</span><span class="m-glyph">&lambda;</span><i data-lucide="sigma"></i><span class="m-glyph">%</span>
                    </div>
                </div>
            </div>
            <div class="scenery-row tree-line">
                <div class="drift-track rev line-fast">
                    <div class="drift-set trees-mixed">
                        <i data-lucide="tree-pine"></i><i data-lucide="tree-deciduous"></i><i data-lucide="trees"></i><i data-lucide="tree-pine"></i><i data-lucide="trees"></i><i data-lucide="tree-deciduous"></i><i data-lucide="tree-pine"></i><i data-lucide="trees"></i>
                    </div>
                    <div class="drift-set trees-mixed">
                        <i data-lucide="tree-pine"></i><i data-lucide="tree-deciduous"></i><i data-lucide="trees"></i><i data-lucide="tree-pine"></i><i data-lucide="trees"></i><i data-lucide="tree-deciduous"></i><i data-lucide="tree-pine"></i><i data-lucide="trees"></i>
                    </div>
                </div>
            </div>
            <div class="scenery-row sky-c">
                <div class="drift-track rev slow">
                    <div class="drift-set scatter faint">
                        <span class="m-glyph">&pi;</span><span class="m-glyph">&sum;</span><i data-lucide="plus"></i><span class="m-glyph">&times;</span><span class="m-glyph">=</span><i data-lucide="percent"></i><span class="m-glyph">&ne;</span><i data-lucide="sigma"></i><span class="m-glyph">?</span><i data-lucide="minus"></i>
                    </div>
                    <div class="drift-set scatter faint">
                        <span class="m-glyph">&pi;</span><span class="m-glyph">&sum;</span><i data-lucide="plus"></i><span class="m-glyph">&times;</span><span class="m-glyph">=</span><i data-lucide="percent"></i><span class="m-glyph">&ne;</span><i data-lucide="sigma"></i><span class="m-glyph">?</span><i data-lucide="minus"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="week-strip">
            <div class="day-card">
                <span class="day-no">Day 1</span>
                <div class="day-icon"><i data-lucide="book-open-text"></i></div>
                <h4>Concept practice</h4>
                <p>New topic, CBSE-aligned material</p>
                <span class="card-glyph" aria-hidden="true">&pi;</span>
                <span class="bogies" aria-hidden="true"><i></i><i></i></span>
            </div>
            <div class="day-card">
                <span class="day-no">Day 2</span>
                <div class="day-icon"><i data-lucide="lightbulb"></i></div>
                <h4>Solved examples</h4>
                <p>Step-by-step walkthroughs</p>
                <span class="card-glyph" aria-hidden="true">&sum;</span>
                <span class="bogies" aria-hidden="true"><i></i><i></i></span>
            </div>
            <div class="day-card">
                <span class="day-no">Day 3</span>
                <div class="day-icon"><i data-lucide="pencil-line"></i></div>
                <h4>Worksheet drill</h4>
                <p>Targeted practice sets</p>
                <span class="card-glyph" aria-hidden="true">&radic;</span>
                <span class="bogies" aria-hidden="true"><i></i><i></i></span>
            </div>
            <div class="day-card">
                <span class="day-no">Day 4</span>
                <div class="day-icon"><i data-lucide="messages-square"></i></div>
                <h4>Tutor clinic</h4>
                <p>Realtime tutors clear every doubt</p>
                <span class="card-glyph" aria-hidden="true">&alpha;</span>
                <span class="bogies" aria-hidden="true"><i></i><i></i></span>
            </div>
            <div class="day-card">
                <span class="day-no">Day 5</span>
                <div class="day-icon"><i data-lucide="timer"></i></div>
                <h4>Speed round</h4>
                <p>Accuracy &amp; speed challenges</p>
                <span class="card-glyph" aria-hidden="true">&beta;</span>
                <span class="bogies" aria-hidden="true"><i></i><i></i></span>
            </div>
            <div class="day-card">
                <span class="day-no">Day 6</span>
                <div class="day-icon"><i data-lucide="party-popper"></i></div>
                <h4>Revise &amp; play</h4>
                <p>Revision with fun activities</p>
                <span class="card-glyph" aria-hidden="true">&Delta;</span>
                <span class="bogies" aria-hidden="true"><i></i><i></i></span>
            </div>
            <div class="day-card exam">
                <span class="chimney" aria-hidden="true"><i></i><i></i><i></i></span>
                <span class="day-no">Day 7</span>
                <div class="day-icon"><i data-lucide="globe-2"></i></div>
                <h4>Live global exam</h4>
                <p>Quiz + written questions, online</p>
                <span class="live-badge"><span class="live-dot"></span> LIVE WORLDWIDE</span>
                <span class="card-glyph" aria-hidden="true">&infin;</span>
                <span class="bogies" aria-hidden="true"><i></i><i></i></span>
            </div>
        </div>
        <div class="train-track" aria-hidden="true"></div>
        </div>

        <div class="grid-4 reveal" data-delay="1">
            <div class="card" style="padding:22px">
                <div class="icon-badge"><i data-lucide="clipboard-check"></i></div>
                <h3 style="font-size:1.02rem">Marks &amp; grade review</h3>
                <p>Every exam reviewed and explained — marks, grades and percentile, no guessing.</p>
            </div>
            <div class="card" style="padding:22px">
                <div class="icon-badge"><i data-lucide="scan-search"></i></div>
                <h3 style="font-size:1.02rem">Weakness report</h3>
                <p>Topic-level gaps spotted early, so practice lands exactly where it hurts.</p>
            </div>
            <div class="card" style="padding:22px">
                <div class="icon-badge"><i data-lucide="trending-up"></i></div>
                <h3 style="font-size:1.02rem">Growth engine</h3>
                <p>Week-over-week progress carried forward — growth you can actually see.</p>
            </div>
            <div class="card" style="padding:22px">
                <div class="icon-badge"><i data-lucide="award"></i></div>
                <h3 style="font-size:1.02rem">Certificate + fun</h3>
                <p>An achievement certificate for every cycle — earned through enjoyable activities.</p>
            </div>
        </div>

        <div class="parent-callout reveal" data-delay="2">
            <div class="icon-badge"><i data-lucide="heart-handshake"></i></div>
            <div class="pc-copy">
                <h3>Parents' guide — help your ward grow</h3>
                <p>
                    Every cycle ends with a plain-English parent report: scores, weak topics, what to
                    practise next and one small thing you can do at home. No pressure — just a map
                    showing how your child is growing, week after week.
                </p>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-primary">Get the parent pack <i data-lucide="arrow-right" class="arr"></i></a>
        </div>

        <div class="weekly-ctas reveal" data-delay="3">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                Join this week's cycle <i data-lucide="arrow-right" class="arr"></i>
            </a>
            <a href="{{ route('domains') }}" class="btn btn-outline btn-lg">
                <i data-lucide="layers-3"></i> Explore other domains
            </a>
        </div>

    </div>
</section>

{{-- ============ WHO WE ARE ============ --}}
<section class="section">
    <div class="container split flip">
        <div class="split-media reveal">
            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=1000&q=80"
                 alt="Students taking notes in a lecture hall">
            <div class="stamp"><b>3&times;</b><span>reviewed before release</span></div>
        </div>

        <div class="split-body reveal" data-delay="1">
            <span class="eyebrow"><i data-lucide="fingerprint"></i> Who we are</span>
            <h2>A research studio that speaks <span class="text-gradient">fluent syllabus</span>.</h2>
            <p class="lead" style="margin-top:14px">
                AvianEdu began inside Aviansys Technologies — an aerospace and embedded engineering
                company that builds avionics boxes and, unexpectedly, one of the better exam platforms
                you haven't heard of yet.
            </p>
            <p style="margin-top:12px">
                Our writers are subject teachers and postgraduates. Our reviewers are people who have
                set papers for boards and Olympiads. And our process borrows from engineering:
                requirements first (your syllabus), prototypes (sample chapter), then sign-off.
            </p>

            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> Every question traced to a syllabus outcome</li>
                <li><span class="check"><i data-lucide="check"></i></span> Zero tolerance for out-of-syllabus surprises</li>
                <li><span class="check"><i data-lucide="check"></i></span> Version-controlled drafts you can comment on</li>
            </ul>

            <a href="{{ route('about') }}" class="link-arrow">More about our story <i data-lucide="arrow-right"></i></a>
        </div>
    </div>
</section>

{{-- ============ WHAT WE CREATE ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="package-open"></i> What we create</span>
            <h2>Three product families, one quality bar</h2>
            <p>Digital or printed, branded as yours or ours — the editorial process behind each is identical.</p>
        </div>

        <div class="grid-3">
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="book-open-text"></i></div>
                <h3>Study material</h3>
                <p>
                    Modules, worksheets, revision notes, lab manuals and answer keys for classes 1–12
                    and entrance aspirants — mapped chapter-by-chapter to your board.
                </p>
                <span class="tag">Print + digital</span>
            </div>

            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="file-check-2"></i></div>
                <h3>Mock papers &amp; test series</h3>
                <p>
                    Chapter tests, pre-boards, weekly series and full-length mocks with solutions,
                    delivered as PDF, CSV or SCORM — ready for print or your platform.
                </p>
                <span class="tag">72-hr express option</span>
            </div>

            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="pencil-ruler"></i></div>
                <h3>Student accessories</h3>
                <p>
                    Exam kits, geometry sets, branded stationery, OMR clipboards and event kits for
                    Olympiad day — small batches, your identity on the box.
                </p>
                <span class="tag">Low MOQs</span>
            </div>
        </div>
    </div>
</section>

{{-- ============ STAT BAND ============ --}}
<section class="section">
    <div class="container">
        <div class="stat-band reveal">
            <div class="stat-item">
                <div class="num" data-count-to="150" data-count-suffix="+">150+</div>
                <p>subject experts on the panel</p>
            </div>
            <div class="stat-item">
                <div class="num" data-count-to="12">12</div>
                <p>boards &amp; exam patterns mapped</p>
            </div>
            <div class="stat-item">
                <div class="num">4.8<span style="font-size:.55em">/5</span></div>
                <p>average partner rating</p>
            </div>
            <div class="stat-item">
                <div class="num" data-count-to="72" data-count-suffix="h">72h</div>
                <p>express delivery option</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ WHO WE SERVE ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="handshake"></i> Who we serve</span>
            <h2>Built for the people behind the paper</h2>
            <p>Three kinds of partners, three very different conversations — all welcome here.</p>
        </div>

        <div class="grid-3">
            <div class="card media-card reveal">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80"
                         alt="A bright classroom with desks ready for students">
                    <span class="tag">Schools &amp; institutions</span>
                </div>
                <div class="card-body">
                    <h3>Educational institutions</h3>
                    <p>
                        Schools, coaching institutes and college departments use us for pre-boards,
                        worksheets, lab manuals and revision modules — printed with their branding,
                        delivered before term starts.
                    </p>
                    <a href="{{ route('contact') }}" class="link-arrow" style="margin-top:16px">Plan your session <i data-lucide="arrow-right"></i></a>
                </div>
            </div>

            <div class="card media-card reveal" data-delay="1">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=800&q=80"
                         alt="An online educator working on a laptop with study notes">
                    <span class="tag">Creators &amp; coaches</span>
                </div>
                <div class="card-body">
                    <h3>Online educators</h3>
                    <p>
                        You teach brilliantly; writing 2,000 fresh questions a month is a terrible use of
                        your nights. We supply white-label question banks, PDF worksheets and quiz scripts
                        in your voice.
                    </p>
                    <a href="{{ route('contact') }}" class="link-arrow" style="margin-top:16px">Fuel your channel <i data-lucide="arrow-right"></i></a>
                </div>
            </div>

            <div class="card media-card reveal" data-delay="2">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80"
                         alt="A candidate writing a competitive examination">
                    <span class="tag">Contest organisers</span>
                </div>
                <div class="card-body">
                    <h3>Competition agencies</h3>
                    <p>
                        Olympiads, scholarship tests and online contests run on our paper-setting,
                        moderation and evaluation support — including tie-breaker rounds when 40,000
                        students are tied on marks.
                    </p>
                    <a href="{{ route('contact') }}" class="link-arrow" style="margin-top:16px">Design your contest <i data-lucide="arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ DOMAINS STRIP ============ --}}
<section class="section">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="layers-3"></i> Domains</span>
            <h2>Six arenas, one editorial standard</h2>
            <p>Each domain has its own playbook, sample set and pricing.</p>
        </div>

        <div class="grid-3">
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="school"></i></div>
                <h3>K-12 school boards</h3>
                <p>CBSE, ICSE and state boards — worksheets to pre-boards.</p>
                <a href="{{ route('domains') }}" class="link-arrow" style="margin-top:14px">Explore <i data-lucide="arrow-right"></i></a>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="graduation-cap"></i></div>
                <h3>Competitive exams</h3>
                <p>JEE, NEET, SSC, banking and CUET pattern mocks.</p>
                <a href="{{ route('domains') }}" class="link-arrow" style="margin-top:14px">Explore <i data-lucide="arrow-right"></i></a>
            </div>
            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="trophy"></i></div>
                <h3>Olympiads &amp; quizzes</h3>
                <p>Round-wise papers, tie-breakers and moderation.</p>
                <a href="{{ route('domains') }}" class="link-arrow" style="margin-top:14px">Explore <i data-lucide="arrow-right"></i></a>
            </div>
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="landmark"></i></div>
                <h3>Government recruitment</h3>
                <p>PYQ-mapped practice sets for PSU and civil prelims.</p>
                <a href="{{ route('domains') }}" class="link-arrow" style="margin-top:14px">Explore <i data-lucide="arrow-right"></i></a>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="briefcase-business"></i></div>
                <h3>Corporate &amp; skill</h3>
                <p>Hiring assessments and NSQF-aligned skill modules.</p>
                <a href="{{ route('domains') }}" class="link-arrow" style="margin-top:14px">Explore <i data-lucide="arrow-right"></i></a>
            </div>
            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="globe-2"></i></div>
                <h3>International</h3>
                <p>IGCSE &amp; IB practice with examiner-tone writing.</p>
                <a href="{{ route('domains') }}" class="link-arrow" style="margin-top:14px">Explore <i data-lucide="arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

{{-- ============ PROCESS ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="workflow"></i> How it works</span>
            <h2>Four steps, no surprises</h2>
        </div>
        <div class="steps">
            <div class="step reveal">
                <div class="step-num">01</div>
                <h3>Blueprint</h3>
                <p>We map your syllabus, pattern and weightage into a written plan you approve.</p>
            </div>
            <div class="step reveal" data-delay="1">
                <div class="step-num">02</div>
                <h3>Sample</h3>
                <p>A real chapter or paper is written for you — free — so you can judge the voice.</p>
            </div>
            <div class="step reveal" data-delay="2">
                <div class="step-num">03</div>
                <h3>Produce</h3>
                <p>Writers execute in sprints; you get drafts you can comment on.</p>
            </div>
            <div class="step reveal" data-delay="3">
                <div class="step-num">04</div>
                <h3>Review &amp; deliver</h3>
                <p>Three-tier QC, then print- or platform-ready files land on the agreed date.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ MENTAL ABILITY ============ --}}
<section class="section">
    <div class="container split">
        <div class="split-media reveal">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1000&q=80"
                 alt="A young student learning with colourful classroom materials">
            <div class="stamp"><b>Daily</b><span>practice builds ability</span></div>
        </div>
        <div class="split-body reveal" data-delay="1">
            <span class="eyebrow"><i data-lucide="brain"></i> Learning science</span>
            <h2>Mental ability is a muscle — <span class="text-gradient">continuous learning</span> builds it.</h2>
            <p class="lead" style="margin-top:14px">
                Focus, reasoning, memory and confidence grow the same way stamina does:
                a little effort, every day, at the right difficulty.
            </p>
            <p style="margin-top:12px">
                That is why our content is written <strong>grade-wise, around the mental state of the child</strong> —
                short playful steps for little thinkers, logic ladders for growing reasoners,
                and exam-grade application for senior students.
            </p>
        </div>
    </div>
    <div class="container" style="margin-top:36px">
        <div class="grid-3">
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="sprout"></i></div>
                <h3>Grades 1–5 · Little thinkers</h3>
                <p>Picture-rich pages, play-based tasks and tiny wins — built for short attention windows and big curiosity.</p>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="puzzle"></i></div>
                <h3>Grades 6–8 · Growing reasoners</h3>
                <p>Logic, patterns and step-wise problem solving — the bridge from "I remember" to "I can figure it out".</p>
            </div>
            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="target"></i></div>
                <h3>Grades 9–12 · Abstract operators</h3>
                <p>Application-heavy sets with speed and accuracy drills — tuned for exam pressure, not just syllabus coverage.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ CREATORS PREVIEW ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="pen-line"></i> The people behind the papers</span>
            <h2>Meet a few of our creators &amp; guides</h2>
            <p>Teachers, paper-setters and reviewers — each with a message for every learner.</p>
        </div>
        <div class="grid-4">
            <div class="card creator-card reveal">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Meera Krishnan</h3>
                    <p class="cc-role">Lead Maths Author</p>
                    <blockquote>"Practise a little every day — Maths fear fades."</blockquote>
                </div>
            </div>
            <div class="card creator-card reveal" data-delay="1">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Arjun Rathore</h3>
                    <p class="cc-role">Science &amp; Reasoning</p>
                    <blockquote>"Good questions keep curiosity awake."</blockquote>
                </div>
            </div>
            <div class="card creator-card reveal" data-delay="2">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Sana Sheikh</h3>
                    <p class="cc-role">English · Primary Years</p>
                    <blockquote>"Pictures first, words next — then stories."</blockquote>
                </div>
            </div>
            <div class="card creator-card reveal" data-delay="3">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Kabir Anand</h3>
                    <p class="cc-role">Assessment Designer</p>
                    <blockquote>"Mocks should feel real — only kinder."</blockquote>
                </div>
            </div>
        </div>
        <div class="center reveal" style="margin-top:30px">
            <a href="{{ route('creators') }}" class="btn btn-primary">Meet the full team <i data-lucide="arrow-right" class="arr"></i></a>
        </div>
    </div>
</section>

{{-- ============ WHY US ============ --}}
<section class="section">
    <div class="container split flip">
        <div class="split-media reveal">
            <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=1000&q=80"
                 alt="A student writing carefully in a notebook at a desk">
            <div class="stamp"><b>98%</b><span>on-time delivery</span></div>
        </div>
        <div class="split-body reveal" data-delay="1">
            <span class="eyebrow"><i data-lucide="shield-check"></i> Why AvianEdu</span>
            <h2>Why partners stay after the first order</h2>
            <p class="lead" style="margin-top:14px">
                Anyone can send a Word file. The reasons people come back are quieter:
            </p>
            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> <strong>Originality guarantee</strong> — every question written in-house, plagiarism-checked</li>
                <li><span class="check"><i data-lucide="check"></i></span> <strong>Pattern accuracy</strong> — blueprint signed off before writing starts</li>
                <li><span class="check"><i data-lucide="check"></i></span> <strong>Two revision rounds</strong> included as standard, not as a favour</li>
                <li><span class="check"><i data-lucide="check"></i></span> <strong>White-label friendly</strong> — your brand, your format, our byline nowhere</li>
                <li><span class="check"><i data-lucide="check"></i></span> <strong>Content + platform</strong> — papers that drop straight into Aviansys LMS</li>
            </ul>
            <a href="{{ route('services') }}" class="btn btn-primary" style="margin-top:24px">
                See how we work <i data-lucide="arrow-right" class="arr"></i>
            </a>
        </div>
    </div>
</section>

{{-- ============ PRODUCT STACK ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="blocks"></i> Product stack</span>
            <h2>Content lands better on proven platforms</h2>
            <p>Two in-house products from Aviansys carry our content into real classrooms every day.</p>
        </div>

        <div class="grid-2">
            <div class="product-card reveal">
                <div class="icon-badge lg"><i data-lucide="graduation-cap"></i></div>
                <div>
                    <h3>Aviansys LMS</h3>
                    <p>
                        “Empower Learning, Elevate Results.” A learning management system for examinations,
                        progress tracking and certificate distribution — used by institutions to run the
                        material we write.
                    </p>
                    <span class="tag">Learning platform</span>
                </div>
            </div>

            <div class="product-card reveal" data-delay="1">
                <div class="icon-badge lg"><i data-lucide="clipboard-check"></i></div>
                <div>
                    <h3>Grademaker</h3>
                    <p>
                        An assessment engine for pre-employment tests, certifications, quizzes and online
                        testing — perfect for schools, universities and businesses that need engagement
                        and lead generation.
                    </p>
                    <span class="tag">Assessment engine</span>
                </div>
            </div>
        </div>

        <p class="muted reveal" style="text-align:center;margin-top:26px;font-size:.93rem">
            Curious? Explore the full product family at
            <a href="https://www.aviansys-tech.com/" target="_blank" rel="noopener" class="text-primary" style="font-weight:600">aviansys-tech.com</a>.
        </p>
    </div>
</section>

{{-- ============ TESTIMONIALS ============ --}}
<section class="section">
    <div class="container" style="max-width:900px">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="message-square-quote"></i> Testimonials</span>
            <h2>Words from the people who marked us</h2>
        </div>

        <div class="reveal">
            <div class="testi-viewport">
                <div class="testi-track">
                    <div class="testi-slide">
                        <figure class="testi-card">
                            <div class="stars" aria-label="5 out of 5">
                                <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
                            </div>
                            <blockquote class="testi-text">
                                We ordered pre-board papers for three grades and got them two days early —
                                with marking schemes that saved our teachers a fortnight. The slight twist:
                                our own set papers now look like warm-ups next to theirs.
                            </blockquote>
                            <figcaption class="testi-person">
                                <span class="avatar-initials">PS</span>
                                <span>
                                    <b>Priti Sharma</b>
                                    <span>Principal · Sunrise Public School, Bengaluru</span>
                                </span>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="testi-slide">
                        <figure class="testi-card">
                            <div class="stars" aria-label="5 out of 5">
                                <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
                            </div>
                            <blockquote class="testi-text">
                                I used to spend every Sunday writing question sets for my channel. Now I spend
                                an hour reviewing what AvianEdu sends — and the comments section says the
                                practice papers got harder. In a good way. Subscriptions went up 18%.
                            </blockquote>
                            <figcaption class="testi-person">
                                <span class="avatar-initials">RV</span>
                                <span>
                                    <b>Rahul Verma</b>
                                    <span>Physics educator · 1.2M subscribers</span>
                                </span>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="testi-slide">
                        <figure class="testi-card">
                            <div class="stars" aria-label="5 out of 5">
                                <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
                            </div>
                            <blockquote class="testi-text">
                                42,000 students, four rounds, zero leaks. Their moderation and tie-breaker
                                set were the reason our grand final finished on time for the first time in
                                six years. We've already booked them for next season.
                            </blockquote>
                            <figcaption class="testi-person">
                                <span class="avatar-initials">AM</span>
                                <span>
                                    <b>Ananya Menon</b>
                                    <span>Director · MindSpark Olympiad</span>
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="testi-nav">
                <button type="button" class="testi-btn" data-testi="prev" aria-label="Previous testimonial">
                    <i data-lucide="arrow-left"></i>
                </button>
                <div class="testi-dots">
                    <button type="button" class="dot on" aria-label="Go to testimonial 1"></button>
                    <button type="button" class="dot" aria-label="Go to testimonial 2"></button>
                    <button type="button" class="dot" aria-label="Go to testimonial 3"></button>
                </div>
                <button type="button" class="testi-btn" data-testi="next" aria-label="Next testimonial">
                    <i data-lucide="arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- ============ CTA ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="cta-band reveal">
            <div class="cta-copy">
                <h2>Need content built for your syllabus?</h2>
                <p>Tell us the board, the grade and the deadline — we'll come back with a sample chapter within 48 hours. Free, obviously.</p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-white btn-lg">Start a conversation <i data-lucide="arrow-right" class="arr"></i></a>
                <a href="{{ route('services') }}" class="btn btn-outline-white btn-lg">Browse services</a>
            </div>
        </div>
    </div>
</section>





@endsection
