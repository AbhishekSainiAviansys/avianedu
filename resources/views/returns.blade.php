@extends('layout.app')

@section('title', 'Return & Refund Policy | AvianEdu')
@section('description', 'Return, replacement and refund rules for AvianEdu digital content and physical student accessories — clear timelines, no small print tricks.')

@section('content')

<section class="page-hero">
    <span class="blob b1"></span>
    <span class="blob b2"></span>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i data-lucide="chevron-right"></i>
            <span class="current">Return Policy</span>
        </nav>
        <span class="eyebrow"><i data-lucide="rotate-ccw"></i> Legal</span>
        <h1>Return &amp; Refund Policy</h1>
        <p>Fair rules for both sides: what can be returned, what can't, and exactly how long refunds take.</p>
    </div>
</section>

<section class="section">
    <div class="container legal-wrap">
        <aside class="toc-card reveal" aria-label="On this page">
            <h4>On this page</h4>
            <ol>
                <li><a href="#r1">At a glance</a></li>
                <li><a href="#r2">Digital content</a></li>
                <li><a href="#r3">Physical accessories</a></li>
                <li><a href="#r4">Eligibility window</a></li>
                <li><a href="#r5">How to raise a request</a></li>
                <li><a href="#r6">Refund timelines</a></li>
                <li><a href="#r7">Non-returnable items</a></li>
                <li><a href="#r8">Contact</a></li>
            </ol>
        </aside>

        <div class="prose reveal" data-delay="1">
            <span class="legal-updated"><i data-lucide="calendar-days"></i> Last updated: 1 October 2026</span>

            <h2 id="r1">1. At a glance</h2>
            <ul>
                <li><strong>Digital content</strong> (PDFs, papers, licences): cannot be returned once downloaded
                    or accessed — but defects are fixed free or refunded in full.</li>
                <li><strong>Physical accessories</strong>: returnable within 7 days of delivery if unused and
                    in original packaging.</li>
                <li><strong>Damaged or wrong deliveries</strong>: replaced immediately, return shipping on us.</li>
                <li><strong>Refunds</strong> are processed to the original payment method within
                    5–7 working days of approval.</li>
            </ul>

            <h2 id="r2">2. Digital content</h2>
            <p>
                Because digital material loses its value the moment it is opened, downloads and licensed content
                are <strong>not eligible for change-of-mind returns</strong>. That said, you are fully protected if:
            </p>
            <ol>
                <li>The file is corrupt, incomplete or different from what you ordered — we fix or refund it;</li>
                <li>The content materially deviates from the agreed blueprint — we revise it, and if we still miss,
                    we refund the affected module;</li>
                <li>Access was never delivered (link expired, payment captured but no delivery) — automatic full
                    refund.</li>
            </ol>
            <p>
                Sample chapters are free precisely so this scenario stays rare — please evaluate samples before
                placing large orders.
            </p>

            <h2 id="r3">3. Physical accessories</h2>
            <p>
                Exam kits, geometry sets, stationery packs, clipboards and branded merchandise may be returned
                within <strong>7 days of delivery</strong> provided:
            </p>
            <ul>
                <li>the item is unused and in its original packaging;</li>
                <li>tags, seals and included inserts are intact;</li>
                <li>you share the order number and a photo of the item when raising the request.</li>
            </ul>
            <p>
                Custom-branded or made-to-order items (printed with your institution's identity) cannot be
                returned unless they are defective or differ from the approved proof.
            </p>

            <h2 id="r4">4. Eligibility window</h2>
            <ol>
                <li>Digital defects: report within <strong>7 days</strong> of delivery link issue;</li>
                <li>Physical returns: request within <strong>7 days</strong> of delivery;</li>
                <li>Hidden manufacturing defects: report within <strong>15 days</strong> of delivery.</li>
            </ol>
            <p>Requests outside these windows are reviewed case-by-case, generously but not automatically.</p>

            <h2 id="r5">5. How to raise a request</h2>
            <ol>
                <li>Email <a href="mailto:care@avianedu.in">care@avianedu.in</a> with your order number;</li>
                <li>Mention whether it's a return, replacement or refund — and what went wrong;</li>
                <li>Attach photos for physical items or screenshots for digital issues;</li>
                <li>Our team acknowledges within <strong>1 working day</strong> and shares next steps.</li>
            </ol>
            <p>
                For approved physical returns, we arrange a reverse pickup where pin codes allow; otherwise
                approved shipping costs are reimbursed.
            </p>

            <h2 id="r6">6. Refund timelines</h2>
            <ul>
                <li>Approved refunds are initiated within <strong>2 working days</strong>;</li>
                <li>Crediting to your original payment method takes <strong>5–7 working days</strong>
                    depending on your bank or wallet;</li>
                <li>Refunds are made to the original payment source only — no cash refunds;</li>
                <li>If a replacement is faster than a refund (damaged accessory, wrong file), we'll offer it first.</li>
            </ul>

            <h2 id="r7">7. Non-returnable items</h2>
            <ul>
                <li>Downloaded or accessed digital content, once delivered in working order;</li>
                <li>Licencies already activated and consumed;</li>
                <li>Custom-branded goods produced to your proof (unless defective);</li>
                <li>Free samples and promotional giveaways;</li>
                <li>Items damaged after delivery through misuse.</li>
            </ul>

            <h2 id="r8">8. Contact</h2>
            <p>
                Returns desk: <a href="mailto:care@avianedu.in">care@avianedu.in</a> ·
                <a href="tel:+919876543210">+91 98765 43210</a><br>
                Aviansys Technologies Private Limited, Bengaluru, India<br>
                Mon – Sat, 9:30 am – 6:30 pm IST
            </p>
        </div>
    </div>
</section>

