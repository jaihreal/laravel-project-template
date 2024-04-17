<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('theme/volt.css') }}" rel="stylesheet">

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

    <!-- Core -->
		<script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Volt JS -->
    <script src="{{ asset('theme/volt.js') }}"></script>

    <!-- Per Page JS -->
    @stack('scripts')
  </body>
</html>
