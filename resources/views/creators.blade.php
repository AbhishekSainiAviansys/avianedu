@extends('layout.app')

@section('title', 'Creators & Guides — The educators behind AvianEdu content')
@section('description', 'Meet the subject experts, authors and reviewers behind AvianEdu study material and mock papers.')

@section('content')

<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">Creators &amp; Guides</span>
        </nav>
        <span class="eyebrow"><i data-lucide="pen-line"></i> Creators &amp; guides</span>
        <h1>The teachers behind <span class="text-gradient">the papers</span>.</h1>
        <p>Subject experts, paper-setters and reviewers — the people who turn a syllabus into material a child can grow with.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="creator-note reveal">
            <i data-lucide="image-plus"></i>
            <span><strong>A quick note:</strong> photos are placeholders. Our guides will add real pictures soon.</span>
        </div>
        <div class="grid-3">
            <div class="card creator-card reveal">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Meera Krishnan</h3>
                    <p class="cc-role">Lead Maths Author · Classes 6–10</p>
                    <blockquote>"A child who practises a little every day stops fearing Maths."</blockquote>
                    <div class="job-meta"><span class="tag">Maths</span> <span class="tag">CBSE</span></div>
                </div>
            </div>
            <div class="card creator-card reveal" data-delay="1">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Arjun Rathore</h3>
                    <p class="cc-role">Physics &amp; Reasoning · Olympiads</p>
                    <blockquote>"Good questions exercise curiosity; dull ones let it sleep."</blockquote>
                    <div class="job-meta"><span class="tag">Science</span> <span class="tag">Reasoning</span></div>
                </div>
            </div>
            <div class="card creator-card reveal" data-delay="2">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Sana Sheikh</h3>
                    <p class="cc-role">English &amp; Primary Years</p>
                    <blockquote>"Little learners read pictures before words — our pages speak both."</blockquote>
                    <div class="job-meta"><span class="tag">English</span> <span class="tag">Grades 1–5</span></div>
                </div>
            </div>
            <div class="card creator-card reveal">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Kabir Anand</h3>
                    <p class="cc-role">Assessment Designer · Test Series</p>
                    <blockquote>"A mock paper should feel like the real exam — only kinder the first time."</blockquote>
                    <div class="job-meta"><span class="tag">Mock papers</span> <span class="tag">Weekly tests</span></div>
                </div>
            </div>
            <div class="card creator-card reveal" data-delay="1">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Divya Nair</h3>
                    <p class="cc-role">Biology &amp; Senior Grades</p>
                    <blockquote>"Teenagers learn fastest when content respects their intelligence."</blockquote>
                    <div class="job-meta"><span class="tag">Biology</span> <span class="tag">Grades 9–12</span></div>
                </div>
            </div>
            <div class="card creator-card reveal" data-delay="2">
                <div class="creator-photo" aria-hidden="true"><i data-lucide="user-round"></i><span class="photo-soon">photo coming soon</span></div>
                <div class="cc-body">
                    <h3>Rohit Verma</h3>
                    <p class="cc-role">QC Lead · Three-tier review</p>
                    <blockquote>"Every question passes three pairs of eyes before a student sees it."</blockquote>
                    <div class="job-meta"><span class="tag">Quality</span> <span class="tag">Review</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ CTA ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="cta-band reveal">
            <div>
                <h2>Write with us — or get content written for you.</h2>
                <p>Educators join the creator panel; institutions order custom material. Both start with one conversation.</p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('careers') }}" class="btn btn-light">Join as creator</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-light">Request content</a>
            </div>
        </div>
    </div>
</section>

@endsection
