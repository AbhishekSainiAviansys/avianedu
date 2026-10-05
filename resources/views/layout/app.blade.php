<!DOCTYPE html>
<html lang="en" data-theme="blue">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'AvianEdu — Research-led study material, mock papers & assessments')</title>
    <meta name="description" content="@yield('description', 'AvianEdu researches, writes and supplies curriculum-aligned study material, mock papers, test series and student accessories to schools, online educators and competition organisers.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
