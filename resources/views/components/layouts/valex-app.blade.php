<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="samer website with livewire">


    @include('pack::layouts.valex.head')

    @stack('css')

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<style>
    #global-loader {
        position: fixed;
        z-index: 50000;
        background: #fff;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }

    .loader-img {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 43%;
        left: 0;
        margin: 0 auto;
        text-align: center;
    }
</style>

<body>
    <!-- Loader -->

    <div id="global-loader" wire:loading>
     
        <img src="{{ asset('template-assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>

    @include('pack::layouts.valex.main-sidebar')
    {{ $slot ?? '' }}


	@include('pack::layouts.valex.main-header')			

	@yield('page-header')
	@yield('content')
    @include('pack::layouts.valex.sidebar')
    @include('pack::layouts.valex.models')
    @include('pack::layouts.valex.footer')
    @include('pack::layouts.valex.footer-scripts')

</body>

</html>
