@extends('layout.app')

@section('title', 'About AvianEdu — Educators and engineers building better assessment content')
@section('description', 'The story behind AvianEdu: how an aerospace engineering company turned its culture of precision into research-led study material and mock papers.')

@section('content')

{{-- ============ PAGE HERO ============ --}}
<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">About Us</span>
        </nav>
        <span class="eyebrow"><i data-lucide="users"></i> About AvianEdu</span>
        <h1>Engineers who fell in love with <span class="text-gradient">classrooms</span>.</h1>
        <p>
            We are researchers, authors, reviewers and software people. What connects us is a stubborn
            belief: assessment content deserves the same discipline as aerospace hardware.
        </p>
    </div>
</section>

{{-- ============ STORY ============ --}}
<section class="section">
    <div class="container split">
        <div class="split-media reveal">
            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=1000&q=80"
                 alt="A focused student taking notes during a lecture">
            <div class="stamp"><b>2016</b><span>Aviansys founded</span></div>
        </div>

        <div class="split-body reveal" data-delay="1">
            <span class="eyebrow"><i data-lucide="book-open"></i> Our story</span>
            <h2>It started with a simple complaint from a teacher.</h2>
            <p class="lead" style="margin-top:14px">
                Aviansys Technologies spent years building avionics, embedded and mechanical systems —
                domains where a loose tolerance is not an option. Along the way we built our own internal
                exam platform, <strong>Aviansys LMS</strong>, and a paper-generation tool called
                <strong>Grademaker</strong>, mostly for ourselves.
            </p>
            <p style="margin-top:12px">
                Then schools and educators started asking for the one thing the software couldn't give them:
                <em>good content</em>. Carefully researched, syllabus-mapped, genuinely original questions.
                AvianEdu was born to write it — and we've been quietly building the largest question bank
                in our rooms ever since.
            </p>

            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> In-house subject experts for every paper we ship</li>
                <li><span class="check"><i data-lucide="check"></i></span> Plagiarism-free writing — every question is original</li>
                <li><span class="check"><i data-lucide="check"></i></span> The QA mindset of avionics applied to every page</li>
            </ul>

            <a href="{{ route('services') }}" class="link-arrow">See what we produce <i data-lucide="arrow-right"></i></a>
        </div>
    </div>
</section>

{{-- ============ MISSION / VISION ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="target"></i> Mission &amp; vision</span>
            <h2>Why we exist, and where we're headed</h2>
        </div>

        <div class="grid-2">
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="compass"></i></div>
                <h3>Our mission</h3>
                <p>
                    To give every institution and educator access to assessment material that is researched,
                    accurate and affordable — so teachers can teach instead of hunting for questions, and
                    students can practise without wasting a single attempt.
                </p>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="telescope"></i></div>
                <h3>Our vision</h3>
                <p>
                    To become the most trusted content partner behind India's classrooms, creator economy and
                    competition ecosystem — the quiet name printed in the footer of every excellent paper a
                    student ever attempts.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============ VALUES ============ --}}
<section class="section">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="gem"></i> Values</span>
            <h2>Six rules we don't bend</h2>
            <p>They came from the shop floor of an engineering company, and they fit classrooms surprisingly well.</p>
        </div>

        <div class="grid-3">
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="search-check"></i></div>
                <h3>Research first</h3>
                <p>No question is written before its syllabus outcome and previous-year pattern are understood.</p>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="scan-search"></i></div>
                <h3>Check, then check</h3>
                <p>Subject expert, editor, then a fresh-eyes reviewer. Three signatures or it doesn't ship.</p>
            </div>
            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="badge-check"></i></div>
                <h3>Original or nothing</h3>
                <p>Every question is written by us. We run plagiarism and AI-text checks before handover.</p>
            </div>
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="handshake"></i></div>
                <h3>Say the hard thing</h3>
                <p>If your deadline is unrealistic for the quality you asked for, we tell you on day one.</p>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="clock-4"></i></div>
                <h3>Dates are dates</h3>
                <p>98% of our deliveries land on or before the committed date. The other 2% hear from us first.</p>
            </div>
            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="accessibility"></i></div>
                <h3>Every learner counts</h3>
                <p>Language is graded, diagrams are legible, and we write for the student who struggles — not just the topper.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ MILESTONES ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="milestone"></i> Milestones</span>
            <h2>From flight manuals to question papers</h2>
        </div>

        <div class="steps">
            <div class="step reveal">
                <div class="step-num">01</div>
                <h3>The beginning</h3>
                <p>Aviansys Technologies starts as an aerospace &amp; embedded engineering services company.</p>
            </div>
            <div class="step reveal" data-delay="1">
                <div class="step-num">02</div>
                <h3>The tools</h3>
                <p>Aviansys LMS and Grademaker are built in-house for assessments and certifications.</p>
            </div>
            <div class="step reveal" data-delay="2">
                <div class="step-num">03</div>
                <h3>The nudge</h3>
                <p>Schools and creators start asking less for software and more for good content.</p>
            </div>
            <div class="step reveal" data-delay="3">
                <div class="step-num">04</div>
                <h3>AvianEdu</h3>
                <p>Today we ship hundreds of papers a year to institutions, educators and contest platforms.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ CTA ============ --}}
<section class="section">
    <div class="container">
        <div class="cta-band reveal">
            <div class="cta-copy">
                <h2>Want the long version of our story?</h2>
                <p>Drop us a line — or better, ask for a sample chapter and judge us by the writing.</p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-white btn-lg">Request a sample <i data-lucide="arrow-right" class="arr"></i></a>
                <a href="{{ route('services') }}" class="btn btn-outline-white btn-lg">Browse services</a>
            </div>
        </div>
    </div>
</section>

@endsection
