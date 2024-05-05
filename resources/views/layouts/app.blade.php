<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Project Template') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('theme/volt.css') }}" rel="stylesheet">

    {{-- datatable --}}
	  <link type="text/css" rel="stylesheet" href="{{ asset('vendor/bootstrap-datatables/bootstrap-datatable.min.css') }}">

    <!-- Per Page CSS -->
    @stack('styles')

    <style>
      footer { 
        position: fixed;
        bottom: 0;
        width: 80vw;
      }
    </style>
  </head>
  <body>

    @include('layouts.sidebar')
  
    <main class="content">

      @include('layouts.navbar')

      {{-- page content --}}
      {{ $slot }}

      {{-- footer --}}

      @include('layouts.footer')

    </main>
    
    @vite('resources/js/app.js')
    {{-- popper for dropdowns --}}
    <script src="{{ asset('vendor/@popperjs/popper.min.js') }}"></script>

    {{-- jquery --}}
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    
    {{-- jquery ui --}}
    <script type="text/javascript" src="{{ asset('vendor/jquery-ui/jquery-ui.js') }}"></script>

    <!-- Core -->
		{{-- <script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script> --}}
		<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    {{-- datatables --}}
    <script type="text/javascript" src="{{ asset('vendor/bootstrap-datatables/jquery.datatables.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendor/bootstrap-datatables/bootstrap-datatables.min.js') }}" ></script>

    {{-- Smooth scroll --}}
    <script src="{{ asset('vendor/smooth-scroll/smooth-scroll.min.js') }}"></script>

    {{-- sweetalert --}}
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @include('sweetalert::alert')

    <!-- Volt JS -->
    <script src="{{ asset('theme/volt.js') }}"></script>

    {{-- page specific js files --}}
    @stack('scripts')

  </body>
</html>
