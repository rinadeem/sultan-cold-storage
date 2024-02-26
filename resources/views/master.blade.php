<!doctype html>
<!--
* Sultan Cold Storage System - Software.
* @version 1.0.0-beta24
* @link https://pharmasolutions.com.bd
* Copyright 2024 The Pharmasolutions IT
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - SCSS</title>
    <!-- CSS files -->
    <link href="{{asset('assets/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link href="index.css" rel="stylesheet"/>
    <!-- <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style> -->
  </head>
  <body >
    
    <div class="page">
      <!-- Navbar -->
        @include('partials.aheader')
      <!-- menu start -->
      @include('partials.navbar')
      <!-- menu end -->
      <div class="page-wrapper">
        <!-- Page header -->

        <!-- Page body -->
        @yield('main_content')
        {{--footer start  --}}
        @include('partials.footer')
        {{-- footer end --}}
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{asset('assets/js/demo-theme.min.js')}}"></script>

    <!-- Tabler Core -->
    <script src="{{asset('assets/js/tabler.min.js')}}" defer></script>
    <script src="{{asset('assets/js/demo.min.js')}}" defer></script>

  </body>
</html>