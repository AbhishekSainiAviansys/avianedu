@extends('layout.app')

@section('title', 'Contact AvianEdu — request samples, quotes or partnerships')
@section('description', 'Talk to the AvianEdu team about study material, mock papers, content licensing or student accessories. We reply within one working day.')

@section('content')

{{-- ============ PAGE HERO ============ --}}
<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">Contact</span>
        </nav>
        <span class="eyebrow"><i data-lucide="send"></i> Contact us</span>
        <h1>Tell us the board, the grade and the <span class="text-gradient">deadline</span>.</h1>
        <p>
            Samples are free. Quotes are free. Opinions on your current question bank are also free —
            and occasionally blunt.
        </p>
    </div>
</section>

{{-- ============ FORM + INFO ============ --}}
<section class="section">
    <div class="container contact-grid">
        <div class="card reveal" style="padding:clamp(24px,3vw,38px)">
            @if (session('success'))
                <div class="alert alert-success">
                    <i data-lucide="circle-check-big"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <i data-lucide="circle-alert"></i>
                    <span>Please fix the highlighted fields and try again.</span>
                </div>
            @endif

            <h2 style="font-size:1.55rem">Send an enquiry</h2>
            <p class="muted" style="margin-top:8px;margin-bottom:24px">
                Fields marked <span class="text-primary">*</span> are required.
            </p>

            <form action="{{ route('contact.send') }}" method="POST" novalidate>
                @csrf
                <div class="form-grid">
                    <div class="field">
                        <label for="name">Your name <span class="req">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                               placeholder="e.g. Priya Sharma" required>
                        @error('name')<span class="err">{{ $message }}</span>@enderror
                    </div>

                    <div class="field">
                        <label for="email">Email <span class="req">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               placeholder="you@school.edu" required>
                        @error('email')<span class="err">{{ $message }}</span>@enderror
                    </div>

                    <div class="field">
                        <label for="org">Organisation</label>
                        <input type="text" id="org" name="org" value="{{ old('org') }}"
                               placeholder="School / channel / agency">
                        @error('org')<span class="err">{{ $message }}</span>@enderror
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                               placeholder="+91 …">
                        @error('phone')<span class="err">{{ $message }}</span>@enderror
                    </div>

                    <div class="field full">
                        <label for="interest">I am a… <span class="req">*</span></label>
                        <select id="interest" name="interest" required>
                            <option value="">Choose one</option>
                            <option value="institution" @selected(old('interest') == 'institution')>School / educational institution</option>
                            <option value="educator" @selected(old('interest') == 'educator')>Online educator / content creator</option>
                            <option value="competition" @selected(old('interest') == 'competition')>Competition / Olympiad organiser</option>
                            <option value="publisher" @selected(old('interest') == 'publisher')>Publisher / ed-tech platform</option>
                            <option value="other" @selected(old('interest') == 'other')>Something else</option>
                        </select>
                        @error('interest')<span class="err">{{ $message }}</span>@enderror
                    </div>

                    <div class="field full">
                        <label for="message">What do you need? <span class="req">*</span></label>
                        <textarea id="message" name="message" placeholder="Boards, grades, quantity, deadline — the more specific, the faster we reply." required>{{ old('message') }}</textarea>
                        @error('message')<span class="err">{{ $message }}</span>@enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg" style="margin-top:22px">
                    Send message <i data-lucide="send" class="arr"></i>
                </button>
                <p class="form-note">By submitting, you agree to our <a href="{{ route('privacy') }}" class="text-primary">Privacy Policy</a>. We never share your details.</p>
            </form>
        </div>

        <div>
            <div class="contact-info-card reveal">
                <span class="icon-badge"><i data-lucide="mail"></i></span>
                <div>
                    <h4>Email</h4>
                    <a href="mailto:hello@avianedu.in">hello@avianedu.in</a>
                    <p class="muted" style="font-size:.85rem">Samples, quotes &amp; partnerships</p>
                </div>
            </div>

            <div class="contact-info-card reveal" data-delay="1">
                <span class="icon-badge"><i data-lucide="phone"></i></span>
                <div>
                    <h4>Phone</h4>
                    <a href="tel:+919876543210">+91 98765 43210</a>
                    <p class="muted" style="font-size:.85rem">Mon – Sat · 9:30 am – 6:30 pm IST</p>
                </div>
            </div>

            <div class="contact-info-card reveal" data-delay="2">
                <span class="icon-badge"><i data-lucide="map-pin"></i></span>
                <div>
                    <h4>Studio</h4>
                    <p>Aviansys Technologies Private Limited<br>Bengaluru, Karnataka, India</p>
                </div>
            </div>

            <div class="contact-info-card reveal" data-delay="3">
                <span class="icon-badge"><i data-lucide="messages-square"></i></span>
                <div>
                    <h4>Careers</h4>
                    <a href="mailto:careers@avianedu.in">careers@avianedu.in</a>
                    <p class="muted" style="font-size:.85rem">Writers, reviewers &amp; developers</p>
                </div>
            </div>

            <div class="card reveal" style="margin-top:20px;background:var(--surface-2);text-align:center">
                <div class="icon-badge" style="margin-inline:auto"><i data-lucide="package-search"></i></div>
                <h3 style="font-size:1.05rem">Need it fast?</h3>
                <p>Include your board, grade and quantity in the first message — we'll quote in 24 hours.</p>
            </div>
        </div>

    </div>
</section>
@endsection
