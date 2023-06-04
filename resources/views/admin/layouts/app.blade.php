<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('page-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="This is where the magic happens" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('website/image/png/favicon.png') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Plugins css-->
        <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />

	    <!-- App css -->
	    <link href="{{ asset('admin/css/config/default/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	    <link href="{{ asset('admin/css/config/default/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

	    <link href="{{ asset('admin/css/config/default/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
	    <link href="{{ asset('admin/css/config/default/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

	    <!-- icons -->
	    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        @yield('styles')
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-52NRTK9');</script>
            <!-- End Google Tag Manager -->
    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52NRTK9"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('admin.layouts.partials._topmenu')
            <!-- end Topbar -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page" style="margin-left: 0 !important;">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')


                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- App js -->
        <script src="{{ asset('admin/js/vendor.min.js') }}"></script>
        @yield('scripts')
        <!-- App js -->
        <script src="{{ asset('admin/js/app.min.js') }}"></script>

    </body>
</html>
