<header class="site-header" id="siteHeader">
    <div class="container header-inner">
        <a class="brand" href="{{ route('home') }}" aria-label="AvianEdu home">
            @include('partials.logo')
        </a>

        <nav class="main-nav" aria-label="Primary">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('domains') }}" class="{{ request()->routeIs('domains') ? 'active' : '' }}">Domains</a>
            <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('careers') }}" class="{{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>

        <div class="header-actions">
            <div class="theme-switch" role="group" aria-label="Colour theme">
                <button type="button" class="theme-dot" data-swatch="blue"  data-theme-set="blue"  aria-pressed="true"  aria-label="Blue theme"  title="Blue"></button>
                <button type="button" class="theme-dot" data-swatch="pink"  data-theme-set="pink"  aria-pressed="false" aria-label="Pink theme"  title="Pink"></button>
                <button type="button" class="theme-dot" data-swatch="dark"  data-theme-set="dark"  aria-pressed="false" aria-label="Dark theme"  title="Dark"></button>
                <button type="button" class="theme-dot" data-swatch="light" data-theme-set="light" aria-pressed="false" aria-label="Light theme" title="Light"></button>
            </div>

            <a href="{{ route('contact') }}" class="btn btn-primary">
                Request a Quote <i data-lucide="arrow-right" class="arr"></i>
            </a>

            <button type="button" class="nav-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobileMenu">
                <span class="bars"><span></span><span></span><span></span></span>
            </button>
        </div>
    </div>

    <div class="mobile-menu" id="mobileMenu">
        <div class="container mobile-menu-inner">
            <a href="{{ route('home') }}" class="m-link {{ request()->routeIs('home') ? 'active' : '' }}">Home <i data-lucide="chevron-right"></i></a>
            <a href="{{ route('about') }}" class="m-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us <i data-lucide="chevron-right"></i></a>
            <a href="{{ route('domains') }}" class="m-link {{ request()->routeIs('domains') ? 'active' : '' }}">Domains <i data-lucide="chevron-right"></i></a>
            <a href="{{ route('services') }}" class="m-link {{ request()->routeIs('services') ? 'active' : '' }}">Services <i data-lucide="chevron-right"></i></a>
            <a href="{{ route('careers') }}" class="m-link {{ request()->routeIs('careers') ? 'active' : '' }}">Careers <i data-lucide="chevron-right"></i></a>
            <a href="{{ route('contact') }}" class="m-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact <i data-lucide="chevron-right"></i></a>

            <div class="m-actions">
                <div class="theme-switch" role="group" aria-label="Colour theme">
                    <button type="button" class="theme-dot" data-swatch="blue"  data-theme-set="blue"  aria-pressed="true"  aria-label="Blue theme"></button>
                    <button type="button" class="theme-dot" data-swatch="pink"  data-theme-set="pink"  aria-pressed="false" aria-label="Pink theme"></button>
                    <button type="button" class="theme-dot" data-swatch="dark"  data-theme-set="dark"  aria-pressed="false" aria-label="Dark theme"></button>
                    <button type="button" class="theme-dot" data-swatch="light" data-theme-set="light" aria-pressed="false" aria-label="Light theme"></button>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary">Request a Quote <i data-lucide="arrow-right" class="arr"></i></a>
            </div>
        </div>
    </div>
</header>
