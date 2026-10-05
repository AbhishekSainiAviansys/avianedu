@extends('layout.app')

@section('title', 'Domains we serve — K-12, competitive exams, Olympiads & more | AvianEdu')
@section('description', 'AvianEdu creates and supplies content across K-12 school boards, competitive exams, Olympiads, government recruitment, skill training and international curricula.')

@section('content')

{{-- ============ PAGE HERO ============ --}}
<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">Domains</span>
        </nav>
        <span class="eyebrow"><i data-lucide="layers-3"></i> Domains we cover</span>
        <h1>Every board. Every contest. <span class="text-gradient">One content partner.</span></h1>
        <p>
            We don't claim to "do everything". These six domains are where our researchers live —
            and where our content has already shipped.
        </p>
    </div>
</section>

{{-- ============ DOMAIN CARDS ============ --}}
<section class="section">
    <div class="container">
        <div class="grid-3">
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="school"></i></div>
                <h3>K-12 School Boards</h3>
                <p>
                    CBSE, ICSE and major state boards. Chapter-wise worksheets, revision modules,
                    lab manuals, answer keys with marking schemes, and full-syllabus pre-boards
                    for classes 1 to 12.
                </p>
                <span class="tag" style="margin-top:14px">Classes 1–12</span>
            </div>

            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="graduation-cap"></i></div>
                <h3>Competitive Exams</h3>
                <p>
                    Engineering and medical entrances, banking, SSC, railways and CUET. Pattern-matched
                    mock tests with difficulty ladders, distractor analysis and detailed solutions
                    written by subject specialists.
                </p>
                <span class="tag" style="margin-top:14px">JEE · NEET · SSC · CUET</span>
            </div>

            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="trophy"></i></div>
                <h3>Olympiads &amp; Quizzes</h3>
                <p>
                    End-to-end paper setting for national and school-level Olympiads — warm-up rounds,
                    regional rounds and grand finals, with tie-breaker sets and proctor-ready question banks.
                </p>
                <span class="tag" style="margin-top:14px">For contest organisers</span>
            </div>

            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="landmark"></i></div>
                <h3>Government Recruitment</h3>
                <p>
                    Mock series and practice sets for PSU, defence, teaching-eligibility and civil-service
                    prelims — mapped to previous-year patterns and the latest syllabus notifications.
                </p>
                <span class="tag" style="margin-top:14px">PYQ-mapped sets</span>
            </div>

            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="briefcase-business"></i></div>
                <h3>Corporate &amp; Skill Training</h3>
                <p>
                    Pre-employment assessments, aptitude screens, campus-hiring tests and NSQF-aligned
                    skill modules — the same engine that powers our parent company's Grademaker platform.
                </p>
                <span class="tag" style="margin-top:14px">HR &amp; L&amp;D teams</span>
            </div>

            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="globe-2"></i></div>
                <h3>International Curricula</h3>
                <p>
                    Support material for IGCSE and IB Diploma strands, including internal-assessment
                    scaffolds, past-paper-style practice and examiner-tone question writing.
                </p>
                <span class="tag" style="margin-top:14px">IGCSE · IB</span>
            </div>
        </div>
    </div>
</section>

{{-- ============ HOW WE TAILOR ============ --}}
<section class="section section--tint">
    <div class="container split">
        <div class="split-body reveal">
            <span class="eyebrow"><i data-lucide="sliders-horizontal"></i> Tailored, not templated</span>
            <h2>The same team, six different playbooks.</h2>
            <p class="lead" style="margin-top:14px">
                A paper for a class-5 school quiz and a paper for a national Olympiad final are not
                written the same way — different tone, different difficulty curve, different traps.
                We keep a playbook per domain and revise it after every delivery cycle.
            </p>
            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> Blueprint &amp; weightage mapped before writing starts</li>
                <li><span class="check"><i data-lucide="check"></i></span> Previous-year trend analysis for competitive sets</li>
                <li><span class="check"><i data-lucide="check"></i></span> Pilot testing with real students for Olympiad packs</li>
                <li><span class="check"><i data-lucide="check"></i></span> Post-delivery item analysis on request</li>
            </ul>
        </div>
        <div class="split-media reveal" data-delay="1">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1000&q=80"
                 alt="Mathematics work being solved on paper with a pencil">
            <div class="stamp"><b>6</b><span>domain playbooks</span></div>
        </div>
    </div>
</section>

{{-- ============ CTA ============ --}}
<section class="section">
    <div class="container">
        <div class="cta-band reveal">
            <div class="cta-copy">
                <h2>Which domain is yours?</h2>
                <p>Tell us the exam, the board or the contest — we'll share a sample written for exactly that.</p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-white btn-lg">Get a free sample <i data-lucide="arrow-right" class="arr"></i></a>
                <a href="{{ route('services') }}" class="btn btn-outline-white btn-lg">See services</a>
            </div>
        </div>
    </div>
</section>

@endsection
