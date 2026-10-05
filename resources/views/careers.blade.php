@extends('layout.app')

@section('title', 'Careers at AvianEdu — write, review and build the future of assessment')
@section('description', 'Join AvianEdu as a content author, QC reviewer, assessment designer or engineer. Remote-friendly roles for people who care about words, numbers and students.')

@section('content')

{{-- ============ PAGE HERO ============ --}}
<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">Careers</span>
        </nav>
        <span class="eyebrow"><i data-lucide="briefcase"></i> Careers</span>
        <h1>Work that students will <span class="text-gradient">actually hold</span>.</h1>
        <p>
            Half our team writes, the other half checks what the writers wrote. If you are obsessive
            about a correct answer key or a clean layout, you'll fit right in.
        </p>
    </div>
</section>

{{-- ============ CULTURE ============ --}}
<section class="section">
    <div class="container split">
        <div class="split-media reveal">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1000&q=80"
                 alt="A young team collaborating around laptops at a shared desk">
            <div class="stamp"><b>Remote</b><span>friendly studio</span></div>
        </div>
        <div class="split-body reveal" data-delay="1">
            <span class="eyebrow"><i data-lucide="heart-handshake"></i> How we work</span>
            <h2>Small team, high standards, zero hero culture.</h2>
            <p class="lead" style="margin-top:14px">
                We plan in sprints, review in pairs and ship on dates we agreed — the same way our
                aerospace cousins do, minus the clean-room suits. Writers own their chapters end-to-end;
                reviewers are the last line of defence before anything reaches a student.
            </p>
            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> Four working days of focused content, Fridays for learning</li>
                <li><span class="check"><i data-lucide="check"></i></span> Annual conference budget to attend ed-tech events</li>
                <li><span class="check"><i data-lucide="check"></i></span> Every team member ships something visible in month one</li>
            </ul>
        </div>
    </div>
</section>

{{-- ============ BENEFITS ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="gift"></i> Benefits</span>
            <h2>What you get, besides good colleagues</h2>
        </div>
        <div class="grid-3">
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="laptop"></i></div>
                <h3>Flexi-location</h3>
                <p>Work from the studio or your kitchen table. We judge pages written, not hours logged.</p>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="book-marked"></i></div>
                <h3>Learning wallet</h3>
                <p>₹40,000 a year for courses, books or conferences — approved with one form, no committees.</p>
            </div>
            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="stethoscope"></i></div>
                <h3>Health cover</h3>
                <p>Group medical insurance for you and dependants, from day 30 of joining.</p>
            </div>
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="calendar-check-2"></i></div>
                <h3>Real time off</h3>
                <p>24 paid leaves plus festival holidays. Leaves are approved unless a ship date is at risk — and we plan so it isn't.</p>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="rocket"></i></div>
                <h3>Fast growth</h3>
                <p>Author → senior → lead → subject head. Our first four leads were all promoted from within.</p>
            </div>
            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="coffee"></i></div>
                <h3>Creator support</h3>
                <p>Publish your own notes or courses on the side — we actively encourage it and help with review.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ OPENINGS ============ --}}
<section class="section section--tint">
    <div class="container" style="max-width:920px">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="list-checks"></i> Open positions</span>
            <h2>Roles open right now</h2>
            <p>Don't see your role? Write to us anyway — good people change the org chart.</p>
        </div>

        <div class="reveal">
            <div class="job-card">
                <div>
                    <h3>Content Author — Physics</h3>
                    <div class="job-meta">
                        <span class="tag">Freelance</span>
                        <span class="tag tag--ghost">Remote</span>
                        <span class="tag tag--ghost">Classes 11–12</span>
                    </div>
                </div>
                <a href="mailto:careers@avianedu.in?subject=Application%20-%20Content%20Author%20Physics" class="btn btn-outline">Apply <i data-lucide="arrow-up-right"></i></a>
            </div>

            <div class="job-card">
                <div>
                    <h3>Senior Mock Paper Designer — Mathematics</h3>
                    <div class="job-meta">
                        <span class="tag">Full-time</span>
                        <span class="tag tag--ghost">Hybrid · Bengaluru</span>
                        <span class="tag tag--ghost">3+ yrs</span>
                    </div>
                </div>
                <a href="mailto:careers@avianedu.in?subject=Application%20-%20Senior%20Mock%20Paper%20Designer" class="btn btn-outline">Apply <i data-lucide="arrow-up-right"></i></a>
            </div>

            <div class="job-card">
                <div>
                    <h3>Academic QC Reviewer — Biology</h3>
                    <div class="job-meta">
                        <span class="tag">Part-time</span>
                        <span class="tag tag--ghost">Remote</span>
                        <span class="tag tag--ghost">NEET pattern</span>
                    </div>
                </div>
                <a href="mailto:careers@avianedu.in?subject=Application%20-%20Academic%20QC%20Reviewer" class="btn btn-outline">Apply <i data-lucide="arrow-up-right"></i></a>
            </div>

            <div class="job-card">
                <div>
                    <h3>Institutional Partnerships Manager</h3>
                    <div class="job-meta">
                        <span class="tag">Full-time</span>
                        <span class="tag tag--ghost">Field + remote</span>
                        <span class="tag tag--ghost">Travel 20%</span>
                    </div>
                </div>
                <a href="mailto:careers@avianedu.in?subject=Application%20-%20Partnerships%20Manager" class="btn btn-outline">Apply <i data-lucide="arrow-up-right"></i></a>
            </div>

            <div class="job-card">
                <div>
                    <h3>Laravel / Front-end Developer</h3>
                    <div class="job-meta">
                        <span class="tag">Full-time</span>
                        <span class="tag tag--ghost">Remote</span>
                        <span class="tag tag--ghost">Blade · Vue</span>
                    </div>
                </div>
                <a href="mailto:careers@avianedu.in?subject=Application%20-%20Developer" class="btn btn-outline">Apply <i data-lucide="arrow-up-right"></i></a>
            </div>
        </div>

        <div class="card reveal" style="margin-top:34px;text-align:center;background:var(--surface-2)">
            <h3>How to apply</h3>
            <p>
                Mail <strong>careers@avianedu.in</strong> with the role in the subject line, your CV and —
                for writers — two samples you're proud of. We reply to every application within
                three working days, even the nos.
            </p>
            <a href="mailto:careers@avianedu.in" class="btn btn-primary" style="margin-top:18px">
                careers@avianedu.in <i data-lucide="mail" class="arr"></i>
            </a>
        </div>
    </div>
</section>

{{-- ============ CTA ============ --}}
<section class="section">
    <div class="container">
        <div class="cta-band reveal">
            <div class="cta-copy">
                <h2>Not a job, but a collaboration?</h2>
                <p>Freelance illustrators, reviewers and subject consultants — we keep a bench of good people.</p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-white btn-lg">Say hello <i data-lucide="arrow-right" class="arr"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
