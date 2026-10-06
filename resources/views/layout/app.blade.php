<!DOCTYPE html>
<html lang="en" data-theme="blue">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AvianEdu — Research-led study material, mock papers & assessments')</title>
    <meta name="description" content="@yield('description', 'AvianEdu researches, writes and supplies curriculum-aligned study material, mock papers, test series and student accessories to schools, online educators and competition organisers.')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Open Graph / Twitter --}}
    <meta property="og:site_name" content="AvianEdu">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="@yield('title', 'AvianEdu — Research-led study material, mock papers & assessments')">
    <meta property="og:description" content="@yield('description', 'AvianEdu researches, writes and supplies curriculum-aligned study material, mock papers, test series and student accessories to schools, online educators and competition organisers.')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:image" content="@yield('og-image', asset('img/favicon.svg'))">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'AvianEdu — Research-led study material, mock papers & assessments')">
    <meta name="twitter:description" content="@yield('description', 'AvianEdu researches, writes and supplies curriculum-aligned study material, mock papers, test series and student accessories to schools, online educators and competition organisers.')">
    <meta name="twitter:image" content="@yield('og-image', asset('img/favicon.svg'))">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Structured data: Organization + WebSite --}}
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Organization',
                '@id' => config('app.url').'/#organization',
                'name' => 'AvianEdu',
                'url' => config('app.url'),
                'logo' => asset('img/favicon.svg'),
                'email' => 'hello@avianedu.in',
                'description' => 'Educational content development, question banks, assessments and academic consulting for schools, publishers, coaching institutes and EdTech platforms across India.',
                'parentOrganization' => [
                    '@type' => 'Organization',
                    'name' => 'Aviansys Technologies Private Limited',
                    'url' => 'https://www.aviansys-tech.com/',
                ],
            ],
            [
                '@type' => 'WebSite',
                '@id' => config('app.url').'/#website',
                'url' => config('app.url'),
                'name' => 'AvianEdu',
                'inLanguage' => 'en-IN',
                'publisher' => ['@id' => config('app.url').'/#organization'],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

    <link rel="icon" type="image/svg+xml" href="/img/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- ⭐ theme.css holds every colour of the site (blue · pink · dark · light) --}}
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/style.css">

    <script>
        (function () {
            try {
                var t = localStorage.getItem('avianedu-theme');
                if (t) { document.documentElement.setAttribute('data-theme', t); }
            } catch (e) {}
        })();
    </script>
    @stack('head')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <button class="back-to-top" aria-label="Back to top" type="button">
        <i data-lucide="arrow-up"></i>
    </button>

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script src="/js/main.js"></script>
    @stack('scripts')
</body>
</html>
