@extends('layout.app')

@section('title', 'Privacy Policy | AvianEdu')
@section('description', 'How AvianEdu collects, uses, stores and protects your personal information — including the extra care we take with student data.')

@section('content')

<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">Privacy Policy</span>
        </nav>
        <span class="eyebrow"><i data-lucide="lock-keyhole"></i> Legal</span>
        <h1>Privacy Policy</h1>
        <p>What we collect, why we collect it, and what we will never do with it.</p>
    </div>
</section>

<section class="section">
    <div class="container legal-wrap">
        <aside class="toc-card reveal" aria-label="On this page">
            <h4>On this page</h4>
            <ol>
                <li><a href="#p1">Information we collect</a></li>
                <li><a href="#p2">How we use it</a></li>
                <li><a href="#p3">Cookies</a></li>
                <li><a href="#p4">Sharing &amp; disclosure</a></li>
                <li><a href="#p5">Retention</a></li>
                <li><a href="#p6">Security</a></li>
                <li><a href="#p7">Your rights</a></li>
                <li><a href="#p8">Children's privacy</a></li>
                <li><a href="#p9">Changes</a></li>
                <li><a href="#p10">Contact</a></li>
            </ol>
        </aside>

        <div class="prose reveal" data-delay="1">
            <span class="legal-updated"><i data-lucide="calendar-days"></i> Last updated: 1 October 2026</span>

            <p>
                AvianEdu ("we", "us") is a venture of Aviansys Technologies Private Limited. This policy explains
                how we handle personal information when you visit <strong>avianedu.in</strong>, submit an enquiry,
                request samples or purchase content and accessories from us. We follow the principles of India's
                Digital Personal Data Protection (DPDP) Act, 2023 and, where applicable, comparable global norms.
            </p>

            <h2 id="p1">1. Information we collect</h2>
            <ul>
                <li><strong>Contact details</strong> — name, email, phone, organisation and role, when you submit
                    our contact form or write to us;</li>
                <li><strong>Order details</strong> — billing and shipping address, purchase history and
                    correspondence related to your orders;</li>
                <li><strong>Technical data</strong> — IP address, browser type, device information and pages viewed,
                    collected automatically through server logs and analytics;</li>
                <li><strong>Job applications</strong> — CV, portfolio links and anything else you choose to send
                    to our careers address.</li>
            </ul>
            <p>
                We do <strong>not</strong> deliberately collect sensitive personal data through this website.
                Where a partner institution shares student information with us for content personalisation, it
                stays under a separate data-processing agreement.
            </p>

            <h2 id="p2">2. How we use it</h2>
            <ul>
                <li>To respond to enquiries, samples and quote requests;</li>
                <li>To fulfil orders, deliver digital content and handle returns or refunds;</li>
                <li>To improve our website, content ranges and customer experience;</li>
                <li>To send occasional updates about new sample packs — only if you opted in, and
                    one click always unsubscribes you;</li>
                <li>To meet legal obligations and prevent fraud or misuse.</li>
            </ul>
            <p>We do not sell personal data. Ever.</p>

            <h2 id="p3">3. Cookies</h2>
            <p>
                This site uses a small number of cookies and localStorage entries: an essential one to remember
                your chosen colour theme and keep sessions secure, and analytics cookies to understand which pages
                are useful. You can clear or block cookies in your browser without losing core functionality.
            </p>

            <h2 id="p4">4. Sharing &amp; disclosure</h2>
            <p>We share information only with:</p>
            <ul>
                <li>Service providers who help us run the site, process payments or ship orders — bound by
                    confidentiality obligations;</li>
                <li>Legal authorities, when disclosure is required by law or valid process;</li>
                <li>A successor entity, in the (hypothetical) event of a merger or acquisition — with notice to you.</li>
            </ul>

            <h2 id="p5">5. Retention</h2>
            <p>
                Enquiry records are kept for 24 months so we can follow up on past conversations. Order and
                invoice records are retained for the periods required under Indian tax law. When retention ends,
                data is deleted or irreversibly anonymised.
            </p>

            <h2 id="p6">6. Security</h2>
            <p>
                Data travels over HTTPS. Access inside our systems is limited to people who need it, protected
                by multi-factor authentication, and reviewed periodically. No system is perfectly secure — if we
                ever detect a breach affecting your data, we will notify you and the relevant authority as
                required by law.
            </p>

            <h2 id="p7">7. Your rights</h2>
            <p>Subject to applicable law, you may:</p>
            <ol>
                <li>Request access to the personal data we hold about you;</li>
                <li>Request correction of inaccurate or incomplete data;</li>
                <li>Request deletion of your data where we no longer need it;</li>
                <li>Withdraw consent for marketing communications at any time;</li>
                <li>Raise a complaint with the Data Protection Board of India.</li>
            </ol>
            <p>
                To exercise any of these, email <a href="mailto:privacy@avianedu.in">privacy@avianedu.in</a> —
                we respond within 30 days.
            </p>

            <h2 id="p8">8. Children's privacy</h2>
            <p>
                Education is our business, so this section matters. This website is aimed at institutions,
                educators and adults — not at children directly. We do not knowingly collect personal data from
                children under 18 through this site. Where a partner institution shares student data for content
                personalisation, it does so with parental or institutional consent under a data-processing
                agreement, and we use that data only for the contracted purpose.
            </p>

            <h2 id="p9">9. Changes to this policy</h2>
            <p>
                If our practices change materially, we will update this page and revise the date at the top.
                Major changes will also be announced by email to anyone on our update list.
            </p>

            <h2 id="p10">10. Contact</h2>
            <p>
                <strong>AvianEdu</strong> — a venture of Aviansys Technologies Private Limited<br>
                Privacy queries: <a href="mailto:privacy@avianedu.in">privacy@avianedu.in</a><br>
                General queries: <a href="mailto:hello@avianedu.in">hello@avianedu.in</a> ·
                <a href="tel:+919876543210">+91 98765 43210</a>
            </p>
        </div>
    </div>
</section>

