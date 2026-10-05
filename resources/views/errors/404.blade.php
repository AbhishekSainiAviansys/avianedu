@extends('layout.app')

@section('title', 'Page not found | AvianEdu')
@section('description', 'The page you were looking for does not exist on the AvianEdu website.')

@section('content')
<section class="not-found">
    <div class="container">
        <div class="big">404</div>
        <h1>This page left the syllabus.</h1>
        <p>The address you followed doesn't exist — maybe it was renamed, maybe it was never in the blueprint. The rest of the site works perfectly fine.</p>
        <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                <i data-lucide="home"></i> Back to home
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline btn-lg">
                <i data-lucide="message-circle"></i> Tell us what broke
            </a>
        </div>
    </div>
</section>
@endsection
