{{--
    AVIANEDU logo — inline SVG so it follows the active colour theme.
    Usage: @include('partials.logo', ['class' => 'logo-mark'])
--}}
<svg class="{{ $class ?? 'logo-mark' }}" viewBox="0 0 348 88" role="img" aria-label="AvianEdu"
     xmlns="http://www.w3.org/2000/svg">
    {{-- ring + graduation cap --}}
    <circle cx="44" cy="44" r="40" fill="var(--primary)"/>
    <circle cx="44" cy="44" r="32" fill="#ffffff"/>
    <g fill="var(--primary)">
        <polygon points="44,27 66,37.5 44,48 22,37.5"/>
        <path d="M34.5,42.5 V52 c0,4.6 19,4.6 19,0 V42.5 L44,46.8 Z"/>
        <path d="M64.5,38.6 v10.2" stroke="var(--primary)" stroke-width="2.6" fill="none" stroke-linecap="round"/>
        <circle cx="64.5" cy="51.4" r="3.1"/>
    </g>
    {{-- wordmark --}}
    <text x="97" y="60" font-family="Outfit, 'Segoe UI', Arial, sans-serif"
          font-size="46" font-weight="800" letter-spacing="1">
        <tspan fill="var(--primary)">AVIAN</tspan><tspan class="lg-ink" fill="var(--heading)">EDU</tspan>
    </text>
    <text x="330" y="30" font-family="Arial, sans-serif" font-size="15" class="lg-ink"
          fill="var(--heading)">&#174;</text>
</svg>
