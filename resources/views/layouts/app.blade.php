<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('page-title')</title>
  <link rel="shortcut icon" href="{{ asset('website/image/png/favicon.png') }}" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="{{ asset('website/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('website/fonts/icon-font/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('website/fonts/typography-font/typo.css') }}">
  <link rel="stylesheet" href="{{ asset('website/fonts/fontawesome-5/css/all.css') }}">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="{{ asset('website/plugins/aos/aos.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website/plugins/fancybox/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website/plugins/nice-select/nice-select.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website/plugins/slick/slick.min.css') }}">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="{{ asset('website/plugins/theme-mode-switcher/switcher-panel.css') }}">
  <link rel="stylesheet" href="{{ asset('website/css/main.css') }}">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="{{ asset('website/css/custom-styles.css') }}">
  @yield('styles')
  <!-- Google tag (gtag.js) -->
  {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-NPL1VP4F1Y"></script> --}}
  <script>
    // window.dataLayer = window.dataLayer || [];
    // function gtag(){dataLayer.push(arguments);}
    // gtag('js', new Date());
  
    // gtag('config', 'G-NPL1VP4F1Y');
  </script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-52NRTK9');</script>
    <!-- End Google Tag Manager -->
</head>

<body data-theme-mode-panel-active data-theme="light">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52NRTK9"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="site-wrapper overflow-hidden ">
    <div id="loading">
      <img src="{{ asset('website/image/preloader.gif') }}" alt="">
    </div>
    <!-- Clean The Code And Hop in -->
    <!-- Header Area -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="{{ asset('website/image/preloader-3.gif') }}" alt="preloader">
   </div>
   </div>   -->

    @yield('header')

    @yield('content')

    @yield('footer')


    <script src="{{ asset('website/plugins/type-js/typed.min.js') }}"></script>
    <script>
      var typed = new Typed('.highlight-text', {
        strings: ["newborn.", "toddlers.", "preschoolers.", "twins.", "teenagers.", "children of determination."],
        typeSpeed: 80,
        backSpeed: 80,
        cursorChar: '',
        shuffle: true,
        smartBackspace: false,
        loop: true
      });
    </script>
  </div>
  <!-- Plugin's Scripts -->
  <script src="{{ asset('website/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('website/plugins/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('website/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('website/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('website/plugins/nice-select/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('website/plugins/aos/aos.min.js') }}"></script>
  <script src="{{ asset('website/plugins/counter-up/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('website/plugins/counter-up/waypoints.min.js') }}"></script>
  <script src="{{ asset('website/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('website/plugins/skill-bar/skill.bars.jquery.js') }}"></script>
  <script src="{{ asset('website/plugins/isotope/isotope.pkgd.min.js') }}"></script>
  <!--<script src="{{ asset('website/plugins/theme-mode-switcher/gr-theme-mode-switcher.js') }}"></script>-->
  <!-- Activation Script -->
  <script src="{{ asset('website/js/menu.js') }}"></script>
  <script src="{{ asset('website/js/custom.js') }}"></script>
  @yield('scripts')
</body>

</html>
