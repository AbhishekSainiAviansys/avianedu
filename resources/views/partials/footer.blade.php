<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <a class="brand" href="{{ route('home') }}" aria-label="AvianEdu home">
                    @include('partials.logo')
                </a>
                <p>Research-led study material, mock papers, test series and student accessories — crafted by educators and engineers, supplied to institutions, online educators and competition organisers.</p>
                <span class="footer-badge"><i data-lucide="shield-check"></i> A venture of Aviansys Technologies</span>

                <div class="socials">
                    <a href="#" aria-label="LinkedIn"><i data-lucide="linkedin"></i></a>
                    <a href="#" aria-label="YouTube"><i data-lucide="youtube"></i></a>
                    <a href="#" aria-label="Facebook"><i data-lucide="facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i data-lucide="instagram"></i></a>
                </div>
            </div>

            <div>
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('creators') }}">Creators &amp; Guides</a></li>
                    <li><a href="{{ route('domains') }}">Domains</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('careers') }}">Careers</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4>What we make</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('services') }}#study-material">Study material &amp; workbooks</a></li>
                    <li><a href="{{ route('services') }}#mock-papers">Mock papers &amp; test series</a></li>
                    <li><a href="{{ route('services') }}#accessories">Student accessories</a></li>
                    <li><a href="{{ route('services') }}#licensing">Content licensing</a></li>
                    <li><a href="{{ route('services') }}#consulting">Assessment consulting</a></li>
                </ul>
            </div>

            <div>
                <h4>Connect with us</h4>
                <ul class="footer-contact">
                    <li>
                        <span class="ib"><i data-lucide="mail"></i></span>
                        <span><b>Email</b><a href="mailto:hello@avianedu.in">hello@avianedu.in</a></span>
                    </li>
                    <li>
                        <span class="ib"><i data-lucide="phone"></i></span>
                        <span><b>Phone</b><a href="tel:+919876543210">+91 98765 43210</a></span>
                    </li>
                    <li>
                        <span class="ib"><i data-lucide="map-pin"></i></span>
                        <span><b>Studio</b>Aviansys Technologies, India</span>
                    </li>
                    <li>
                        <span class="ib"><i data-lucide="clock-3"></i></span>
                        <span><b>Hours</b>Mon – Sat · 9:30 am – 6:30 pm IST</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} AvianEdu &middot; Aviansys Technologies Private Limited. All rights reserved.</span>
            <div class="legal-links">
                <a href="{{ route('terms') }}">Terms &amp; Conditions</a>
                <a href="{{ route('privacy') }}">Privacy Policy</a>
                <a href="{{ route('returns') }}">Return Policy</a>
            </div>
        </div>
    </div>
</footer>
