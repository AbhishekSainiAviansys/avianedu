@extends('layout.app')

@section('title', 'Terms & Conditions | AvianEdu')
@section('description', 'Terms and conditions governing the use of the AvianEdu website and the purchase or licensing of our educational content and accessories.')

@section('content')

<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">Terms &amp; Conditions</span>
        </nav>
        <span class="eyebrow"><i data-lucide="scroll-text"></i> Legal</span>
        <h1>Terms &amp; Conditions</h1>
        <p>The plain-English agreement between you and AvianEdu when you use this website or buy from us.</p>
    </div>
</section>

<section class="section">
    <div class="container legal-wrap">
        <aside class="toc-card reveal" aria-label="On this page">
            <h4>On this page</h4>
            <ol>
                <li><a href="#t1">Acceptance</a></li>
                <li><a href="#t2">Our services</a></li>
                <li><a href="#t3">Orders &amp; payment</a></li>
                <li><a href="#t4">Content licences</a></li>
                <li><a href="#t5">Acceptable use</a></li>
                <li><a href="#t6">Intellectual property</a></li>
                <li><a href="#t7">Disclaimers</a></li>
                <li><a href="#t8">Liability</a></li>
                <li><a href="#t9">Governing law</a></li>
                <li><a href="#t10">Contact</a></li>
            </ol>
        </aside>

        <div class="prose reveal" data-delay="1">
            <span class="legal-updated"><i data-lucide="calendar-days"></i> Last updated: 1 October 2026</span>

            <h2 id="t1">1. Acceptance of these terms</h2>
            <p>
                This website is operated by <strong>AvianEdu</strong>, a venture of Aviansys Technologies
                Private Limited ("AvianEdu", "we", "us"). By browsing this site, requesting a sample,
                placing an order or licensing content from us, you agree to these Terms &amp; Conditions.
                If you do not agree, please discontinue use of the site.
            </p>

            <h2 id="t2">2. Our services</h2>
            <p>AvianEdu researches, authors and supplies educational content and related products, including:</p>
            <ul>
                <li>Study material, workbooks, worksheets and lab manuals;</li>
                <li>Mock papers, test series, question banks and answer keys;</li>
                <li>Assessment consulting and curriculum-mapping services;</li>
                <li>Licensing of content to institutions, educators and platforms;</li>
                <li>Student accessories, exam kits and branded stationery.</li>
            </ul>
            <p>
                Specific deliverables, timelines, formats and pricing for a project are governed by the
                quotation or statement of work (SOW) shared with you, which forms part of these terms.
            </p>

            <h2 id="t3">3. Orders, payment &amp; delivery</h2>
            <ol>
                <li>A contract is formed only when we issue a written order confirmation or invoice.</li>
                <li>Unless stated otherwise, payments are due in advance for digital content and before dispatch for physical goods.</li>
                <li>Digital deliverables are shared via secure download links or the agreed LMS; delivery timelines start from receipt of full payment.</li>
                <li>Physical items are shipped to the address provided by you; you are responsible for accurate shipping details.</li>
                <li>Prices are quoted in Indian Rupees and are exclusive of GST or other applicable taxes unless explicitly mentioned.</li>
            </ol>

            <h2 id="t4">4. Content licences</h2>
            <p>
                Unless explicitly agreed otherwise, AvianEdu retains ownership of the content it creates.
                Depending on your engagement, you receive one of the following:
            </p>
            <ul>
                <li><strong>Commissioned work</strong> — usage rights or full transfer of rights as stated in your quotation;</li>
                <li><strong>Licensed content</strong> — a non-exclusive, non-transferable licence to use the material
                    for the purpose, territory and term mentioned in the licence schedule;</li>
                <li><strong>Sample material</strong> — a limited licence to evaluate internally; republication or
                    commercial use of samples is not permitted.</li>
            </ul>
            <p>
                You may not resell, republish, upload to public repositories, or use licensed content to train
                machine-learning models without our written consent.
            </p>

            <h2 id="t5">5. Acceptable use</h2>
            <p>You agree not to:</p>
            <ol>
                <li>Use the website for any unlawful, misleading or fraudulent purpose;</li>
                <li>Attempt to breach, probe or disrupt the site or its connected systems;</li>
                <li>Reproduce substantial portions of the site or content without permission;</li>
                <li>Misrepresent your identity or organisation while submitting enquiries;</li>
                <li>Upload material through any form you submit that infringes third-party rights.</li>
            </ol>

            <h2 id="t6">6. Intellectual property</h2>
            <p>
                The AvianEdu name, logo, website design, illustrations and sample content are the property of
                Aviansys Technologies Private Limited. Third-party marks (such as board names or exam names)
                belong to their respective owners and are used descriptively to indicate the syllabus or
                pattern our material is aligned to. No affiliation or endorsement is implied.
            </p>

            <h2 id="t7">7. Disclaimers</h2>
            <p>
                Our material is prepared with reasonable care and current syllabus information. However:
            </p>
            <ul>
                <li>Content is for educational preparation only and is <strong>not a guarantee of any exam result</strong>,
                    rank, admission or employment;</li>
                <li>Board patterns, exam notifications and syllabi may change; we update content periodically but
                    cannot guarantee same-day alignment with third-party announcements;</li>
                <li>The website is provided "as is" without warranties of any kind, express or implied.</li>
            </ul>

            <h2 id="t8">8. Limitation of liability</h2>
            <p>
                To the maximum extent permitted by law, AvianEdu shall not be liable for any indirect, incidental,
                special or consequential loss arising from use of this site or reliance on its content. Our total
                liability for any claim shall not exceed the amount you paid to us for the specific order giving
                rise to the claim.
            </p>

            <h2 id="t9">9. Governing law &amp; disputes</h2>
            <p>
                These terms are governed by the laws of India. Courts at Bengaluru, Karnataka shall have exclusive
                jurisdiction over any dispute arising out of these terms or our services. We genuinely prefer
                resolving things over a phone call first — please write to us before escalating.
            </p>

            <h2 id="t10">10. Changes &amp; contact</h2>
            <p>
                We may update these terms from time to time; the "last updated" date at the top reflects the
                latest revision. Continued use of the site after changes constitutes acceptance of them.
                Questions? Write to <a href="mailto:hello@avianedu.in">hello@avianedu.in</a>.
            </p>

        </div>
    </div>
</section>
@endsection
