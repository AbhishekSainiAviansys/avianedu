@extends('layout.app')

@section('title', 'Services — content research, mock papers, licensing & assessment consulting | AvianEdu')
@section('description', 'From curriculum research and original study material to white-label test series, assessment consulting and student accessory kits — see what AvianEdu does for partners.')

@section('content')

{{-- ============ PAGE HERO ============ --}}
<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">Services</span>
        </nav>
        <span class="eyebrow"><i data-lucide="settings-2"></i> What we do</span>
        <h1>Content services, from <span class="text-gradient">blueprint to bookshelf</span>.</h1>
        <p>
            Whether you need one chapter or an entire year's test series, the workflow is the same:
            research first, write second, review three times, deliver on the date we promised.
        </p>
    </div>
</section>

{{-- ============ SERVICES ============ --}}
<section class="section" id="study-material">
    <div class="container split">
        <div class="split-body reveal">
            <span class="eyebrow"><i data-lucide="book-open-text"></i> 01 · Study material</span>
            <h2>Original study material &amp; workbooks</h2>
            <p class="lead" style="margin-top:14px">
                Full courses or single chapters: study modules, practice workbooks, revision notes,
                lab manuals and answer keys — written to your syllabus, your tone and your shelf size.
            </p>
            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> Syllabus-mapped to CBSE / ICSE / state / IGCSE frames</li>
                <li><span class="check"><i data-lucide="check"></i></span> Bloom's-taxonomy graded question sets</li>
                <li><span class="check"><i data-lucide="check"></i></span> Print-ready InDesign &amp; editable Word handover</li>
                <li><span class="check"><i data-lucide="check"></i></span> Illustrations, diagrams and tables included</li>
            </ul>
            <a href="{{ route('contact') }}" class="link-arrow">Request a sample chapter <i data-lucide="arrow-right"></i></a>
        </div>
        <div class="split-media reveal" data-delay="1">
            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=1000&q=80"
                 alt="Stack of study books and notes on a desk">
        </div>
    </div>
</section>

<section class="section section--tint" id="mock-papers">
    <div class="container split flip">
        <div class="split-media reveal">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=1000&q=80"
                 alt="Student writing an examination on paper">
        </div>
        <div class="split-body reveal" data-delay="1">
            <span class="eyebrow"><i data-lucide="file-check-2"></i> 02 · Assessment</span>
            <h2>Mock papers &amp; test series</h2>
            <p class="lead" style="margin-top:14px">
                Chapter tests, half-yearly, pre-boards, full-length mocks and weekly series for apps and
                YouTube channels — delivered as print PDFs, LMS-ready SCORM packages or CSV question banks.
            </p>
            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> Difficulty distribution matched to the real exam</li>
                <li><span class="check"><i data-lucide="check"></i></span> Solutions with marks, hints and common mistakes</li>
                <li><span class="check"><i data-lucide="check"></i></span> OMR, CBT and hybrid formats</li>
                <li><span class="check"><i data-lucide="check"></i></span> Rapid 72-hour turnaround option</li>
            </ul>
            <a href="{{ route('contact') }}" class="link-arrow">Plan a test series <i data-lucide="arrow-right"></i></a>
        </div>
    </div>
</section>

<section class="section" id="accessories">
    <div class="container split">
        <div class="split-body reveal">
            <span class="eyebrow"><i data-lucide="pencil-ruler"></i> 03 · Accessories</span>
            <h2>Student accessories &amp; exam kits</h2>
            <p class="lead" style="margin-top:14px">
                The physical side of assessment: branded exam kits, geometry and stationery sets,
                OMR-friendly clipboards, school ID accessories and event kits for Olympiad days —
                supplied with your institution's identity on them.
            </p>
            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> Low MOQs designed for schools, not factories</li>
                <li><span class="check"><i data-lucide="check"></i></span> Custom branding and combo packaging</li>
                <li><span class="check"><i data-lucide="check"></i></span> 7-day replacement on defective items</li>
            </ul>
            <a href="{{ route('returns') }}" class="link-arrow">Read the return policy <i data-lucide="arrow-right"></i></a>
        </div>
        <div class="split-media reveal" data-delay="1">
            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=1000&q=80"
                 alt="Young students in a classroom with raised hands">
        </div>
    </div>
</section>

<section class="section section--tint" id="licensing">
    <div class="container split flip">
        <div class="split-media reveal">
            <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=1000&q=80"
                 alt="Library shelves filled with books and study resources">
        </div>
        <div class="split-body reveal" data-delay="1">
            <span class="eyebrow"><i data-lucide="badge-percent"></i> 04 · Licensing</span>
            <h2>White-label content licensing</h2>
            <p class="lead" style="margin-top:14px">
                Running an app, a YouTube channel or a paper-supply business? License our verified
                question banks under your own brand — refreshed each session, priced per subject or per user.
            </p>
            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> Non-exclusive or exclusive territory licences</li>
                <li><span class="check"><i data-lucide="check"></i></span> CSV / JSON / SCORM / API delivery</li>
                <li><span class="check"><i data-lucide="check"></i></span> Session-once refreshes with change logs</li>
                <li><span class="check"><i data-lucide="check"></i></span> Royalty models available for large platforms</li>
            </ul>
            <a href="{{ route('contact') }}" class="link-arrow">Discuss licensing <i data-lucide="arrow-right"></i></a>
        </div>
    </div>
</section>

<section class="section" id="consulting">
    <div class="container split">
        <div class="split-body reveal">
            <span class="eyebrow"><i data-lucide="clipboard-list"></i> 05 · Consulting</span>
            <h2>Assessment &amp; curriculum consulting</h2>
            <p class="lead" style="margin-top:14px">
                Bring us a messy question bank or a new syllabus and we'll turn it into a system:
                blueprints, difficulty ladders, tagging schemas and reviewer checklists your team can run
                without us.
            </p>
            <ul class="check-list">
                <li><span class="check"><i data-lucide="check"></i></span> Assessment blueprint &amp; weightage design</li>
                <li><span class="check"><i data-lucide="check"></i></span> Item analysis and question-bank auditing</li>
                <li><span class="check"><i data-lucide="check"></i></span> Taxonomy-based tagging and metadata schemes</li>
                <li><span class="check"><i data-lucide="check"></i></span> Editorial style guides for in-house writers</li>
            </ul>
            <a href="{{ route('contact') }}" class="link-arrow">Book a discovery call <i data-lucide="arrow-right"></i></a>
        </div>
        <div class="split-media reveal" data-delay="1">
            <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=1000&q=80"
                 alt="Person reviewing study material on a laptop with notes beside">
        </div>
    </div>
</section>

{{-- ============ ENGAGEMENT MODELS ============ --}}
<section class="section section--tint" id="engagement">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="handshake"></i> How we engage</span>
            <h2>Three ways to work with us</h2>
        </div>
        <div class="grid-3">
            <div class="card reveal">
                <div class="icon-badge"><i data-lucide="package"></i></div>
                <h3>Per-project</h3>
                <p>A defined deliverable — say, 10 chapters or a 12-paper mock series — with fixed scope, price and date.</p>
                <span class="tag">Best for one-off needs</span>
            </div>
            <div class="card reveal" data-delay="1">
                <div class="icon-badge"><i data-lucide="repeat-2"></i></div>
                <h3>Monthly retainer</h3>
                <p>A reserved block of pages or papers each month. Predictable output, priority scheduling, better rates.</p>
                <span class="tag">Best for platforms &amp; chains</span>
            </div>
            <div class="card reveal" data-delay="2">
                <div class="icon-badge"><i data-lucide="coins"></i></div>
                <h3>Royalty / revenue share</h3>
                <p>We invest the writing; you bring the audience. Per-sale or per-user royalties instead of upfront fees.</p>
                <span class="tag">Best for large launches</span>
            </div>
        </div>
    </div>
</section>

{{-- ============ FAQ ============ --}}
<section class="section">
    <div class="container" style="max-width:860px">
        <div class="section-head center reveal">
            <span class="eyebrow"><i data-lucide="circle-help"></i> FAQ</span>
            <h2>Questions we get before every first order</h2>
        </div>

        <div data-acc-group class="reveal">
            <div class="accordion">
                <button type="button" class="acc-head" aria-expanded="false">
                    How fast can you send a sample chapter?
                    <i data-lucide="chevron-down" class="chev"></i>
                </button>
                <div class="acc-body">
                    <div class="acc-body-inner">
                        Forty-eight hours for standard subjects and boards. If your syllabus is unusual
                        (a new state board or a niche olympiad), give us four working days — we'd rather
                        be accurate than fast.
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button type="button" class="acc-head" aria-expanded="false">
                    What if the paper doesn't match our pattern?
                    <i data-lucide="chevron-down" class="chev"></i>
                </button>
                <div class="acc-body">
                    <div class="acc-body-inner">
                        Every project includes two rounds of revision against the blueprint you approved.
                        In practice, most revisions happen on the sample stage — before a full order is
                        even placed.
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button type="button" class="acc-head" aria-expanded="false">
                    Who owns the content after delivery?
                    <i data-lucide="chevron-down" class="chev"></i>
                </button>
                <div class="acc-body">
                    <div class="acc-body-inner">
                        For commissioned projects, you receive the agreed usage or full ownership as
                        written in the quotation. For licensed banks, we retain copyright and you get
                        the licence rights described in the agreement. Either way, it's decided in
                        writing before work starts.
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button type="button" class="acc-head" aria-expanded="false">
                    Can you write in Hindi or regional languages?
                    <i data-lucide="chevron-down" class="chev"></i>
                </button>
                <div class="acc-body">
                    <div class="acc-body-inner">
                        Yes — English and Hindi are native workflows for us, and we handle other
                        languages through reviewed translation partners with subject-matter sign-off.
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button type="button" class="acc-head" aria-expanded="false">
                    Do you conduct the exams too, or only write them?
                    <i data-lucide="chevron-down" class="chev"></i>
                </button>
                <div class="acc-body">
                    <div class="acc-body-inner">
                        Both, if you want. Our parent company's Aviansys LMS and Grademaker handle
                        online delivery, proctoring-ready exports and certificates. Ask us for a demo —
                        content plus platform is our favourite combination.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ CTA ============ --}}
<section class="section section--tint">
    <div class="container">
        <div class="cta-band reveal">
            <div class="cta-copy">
                <h2>Ready when you are.</h2>
                <p>Send the syllabus, get a quote in 24 hours, receive a sample in 48. That's the whole pitch.</p>
            </div>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-white btn-lg">Request a quote <i data-lucide="arrow-right" class="arr"></i></a>
                <a href="{{ route('domains') }}" class="btn btn-outline-white btn-lg">Browse domains</a>
            </div>
        </div>
    </div>
</section>


@endsection
