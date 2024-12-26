<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="samer website with livewire">


    @include('partials.valex.head')

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
	
	
	
	
	    <div class="main-content app-content">
        @include('layouts.main-header')

        <div class="container-fluid">

            {{ $crumb ?? '' }}

            <div class="card">
                <div
                    class="mb-2 py-2 card-header d-flex justify-content-between align-items-center   tx-medium bd-0 tx-white bg-gray-800 ">

                    <div class=" w-50"> {{ $pageTitle ?? '' }}</div>

                    <div class="w-50" style="text-align: left">
                        <button class="btn reload"><i class="ti-reload text-warning"></i></button>
                    </div>
                  
                </div>

                {{-- <p class="tx-12 tx-gray-500 m-3 ">{{ $pagedesc ?? '' }} <a
                    href="{{ $pageUrl ?? '#' }}">{{ $pageHelp ?? '' }}</a> --}}


                <div class="card-body pt-0">


                    {{ $slot ?? '' }}


                </div>
            </div>



        </div>
    </div>
	
	

    @include('partials.valex.main-sidebar')
 


	 

	@yield('page-header')
	@yield('content')
    @include('partials.valex.sidebar')
    @include('partials.valex.models')
    @include('partials.valex.footer')
    @include('partials.valex.footer-scripts')

</body>

</html>
