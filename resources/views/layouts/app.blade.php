<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="page-top" class="" data-offset="90" data-target=".navigation" data-spy="scroll">
<div class="wrapper hide-main-content">
    <section class="page shop one-page">
        <!--Menu Mobile-->
        <div class="menu-wrap">
            <div class="main-menu">
                <h4 class="title-menu">Main menu</h4>
                <button class="close-button" id="close-button"><i class="fa fa-times"></i></button>
            </div>
            <ul class="nav-menu">
                <li><a href="contact-us.html">Contact us</a></li>
            </ul>
        </div>
        <!--Menu Mobile-->
        <div class="content-wrapper">
            @include('parts.header')
            @yield('content')
        </div>
    </section>
    @include('parts.footer')
    <!--To Top-->
    <div id="copyright">
        <div class="container">
            <div class="back-to-top"><a title="BACK_TO_TOP" href="#top"><i class="fa fa-chevron-up"></i></a></div>
            <div class="clrDiv"></div>
        </div>
    </div>
    <!--End To Top-->
    <script src="/js/app.js"></script>
    @yield('scripts')
</div>
</html>
