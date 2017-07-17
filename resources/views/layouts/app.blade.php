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
            <!--Header-->
            <header id="header" class="header header-container reveal alt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-xs-3 logo">
                            <a href="index.html">
                                trenazherka.kz
                            </a>
                        </div>
                        <div class="col-md-9 nav-container">
                            <nav class="megamenu collapse navbar-collapse bs-navbar-collapse navbar-right mainnav col-md-10"
                                 role="navigation">
                                <ul class="nav-menu">
                                    <li><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <button class="menu-button" id="open-button"></button>
                    </div>
                </div>
            </header>
            <!--End Header-->
            <!--Banner-->
            <div class="slick-slider main-slider">
                @foreach($slider->images as $slide)
                    <div class="slide">
                        <div class="content">
                            <div class="small">{{ $slide->node->title }}</div>
                            <div class="large">{{ $slide->node->url }}</div>
                        </div>
                        <img src="{{ $slide->path }}" alt="">
                    </div>
                @endforeach
            </div>
            <!--End Banner-->
            <div class="contents-main" id="contents-main" style="margin-top: 195px;">
                <!--Price Table-->
                <section class="price-table">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="col-md-12 price-table-content">
                                        <div class="price-table-text">
                                            <h3>New Products</h3>
                                            <h2>Sport Collection</h2>
                                            <div class="border-bottom"></div>
                                            <p>Phasellus molestie magna non est bibendum non venenatis nisl tempor lorem
                                                ipsum dolor.</p>
                                            <a href="#"><span>Shop Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="col-md-12 price-table-content">
                                        <div class="price-table-text">
                                            <h3>Popular Products</h3>
                                            <h2>Step Machines</h2>
                                            <div class="border-bottom"></div>
                                            <p>Phasellus molestie magna non est bibendum non venenatis nisl tempor lorem
                                                ipsum dolor.</p>
                                            <a href="#"><span>Shop Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="col-md-12 price-table-content">
                                        <div class="price-table-text">
                                            <h3>Sale Products</h3>
                                            <h2>Home gyms</h2>
                                            <div class="border-bottom"></div>
                                            <p>Phasellus molestie magna non est bibendum non venenatis nisl tempor lorem
                                                ipsum dolor.</p>
                                            <a href="#"><span>Shop Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Price Table-->
                <!--New Products-->
                <section class="new-product scroll-to">
                    <div class="container">
                        <div class="row">
                            <div class="title-name">
                                <h4>New Product</h4>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt=""
                                                             src="/data:image/webp;base64,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"
                                                             data-pagespeed-url-hash="3358841118"
                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="#">Octane Deluxe Console</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="arrows" href="#"><i class="fa fa-arrows"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt=""
                                                             src="/images/newproducts/xproduct-2.jpg.pagespeed.ic.vbjOR4RjNd.webp"
                                                             data-pagespeed-url-hash="3653341039"
                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="#">Octane Deluxe Console</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="arrows" href="#"><i class="fa fa-arrows"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt=""
                                                             src="/images/newproducts/xproduct-3.jpg.pagespeed.ic.us6aFbS9Eo.webp"
                                                             data-pagespeed-url-hash="3947840960"
                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="#">Octane Deluxe Console</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="arrows" href="#"><i class="fa fa-arrows"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt=""
                                                             src="/data:image/webp;base64,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"
                                                             data-pagespeed-url-hash="4242340881"
                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="#">Octane Deluxe Console</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="arrows" href="#"><i class="fa fa-arrows"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt=""
                                                             src="/images/newproducts/xproduct-5.jpg.pagespeed.ic.HNiWVOS8tz.webp"
                                                             data-pagespeed-url-hash="241873506"
                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="#">Octane Deluxe Console</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="arrows" href="#"><i class="fa fa-arrows"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt=""
                                                             src="/images/newproducts/xproduct-6.jpg.pagespeed.ic.4g9T2RCh7j.webp"
                                                             data-pagespeed-url-hash="536373427"
                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="#">Octane Deluxe Console</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="arrows" href="#"><i class="fa fa-arrows"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt=""
                                                             src="/images/newproducts/xproduct-7.jpg.pagespeed.ic.CekV22Xhzh.webp"
                                                             data-pagespeed-url-hash="830873348"
                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="#">Octane Deluxe Console</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="arrows" href="#"><i class="fa fa-arrows"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt=""
                                                             src="/images/newproducts/xproduct-8.jpg.pagespeed.ic.dDIjocGmlc.webp"
                                                             data-pagespeed-url-hash="1125373269"
                                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="#">Octane Deluxe Console</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">$200.60</span>
                                                <span class="old-price">$227.96</span>
                                            </div>
                                            <div class="actions">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-info"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="arrows" href="#"><i class="fa fa-arrows"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End New Products-->
                <!--Discover-->
                <section class="training modern">
                    <div class="wpb-wrapper">
                        <!-- PARALLAX WINDOWS -->
                        <div class="parallax-block-wrap-module auto-width">
                            <div class="parallax-block bt-advance-parallax" id="parallax-block-modern">
                                <!-- PARALLAX CONTENT -->
                                <div class="control-button">
                                    <div class="nav-wrap hidden">
                                        <div class="nav-wrap-in next has-scroll">
                                            <span class="nav-next"></span>
                                        </div>
                                        <div class="nav-wrap-in prev">
                                            <span class="nav-prev"></span>
                                        </div>
                                    </div>
                                    <div class="button-wrap">
                                        <span class="button close-btn has-scroll"></span>
                                    </div>
                                </div>
                                <div class="parallax-background" style="top: -197px;">
                                    <!--Textured and color-->
                                    <div class="parallax-background-overlay"></div>
                                    <img alt="" src="/images/xbg-discover.png.pagespeed.ic.9bB0MSxgRb.webp"
                                         data-pagespeed-url-hash="812702687"
                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="parallax-block-content default-pos"
                                     style="width: 1351px; margin-left: 0px;">
                                    <div class="container">
                                        <div class="parallax-text parallax-shop parallax-gallery">
                                            <h1>Christmas &amp; New Years Discount</h1>
                                            <p>Click here to discover our Christmas and New Years promotion</p>
                                            <span class="button open-btn"><span>Discover Now</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-loading"><span class="loading"><img
                                                src="/images/loading-black.gif.pagespeed.ce.EDYUOe5ne-.gif" alt=""
                                                data-pagespeed-url-hash="1475943663"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></span>
                                </div>
                                <!-- GALLERY CONTENT -->
                                <div class="parallax-content-wrap parallax-shopping">
                                    <div class="parallax-content hidden">
                                        <div class="parallax-content-in" style="margin-top: 20px;">
                                            <div class="defxault">
                                                <div class="parallax-col">
                                                    <div class="parallax-row in-pos box1">
                                                        <div class="parallax-row-w1">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/data:image/webp;base64,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"
                                                                         alt="" data-pagespeed-url-hash="3358841118"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-2.jpg.pagespeed.ic.vbjOR4RjNd.webp"
                                                                         alt="" data-pagespeed-url-hash="3653341039"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w3 mr-top" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-9.1.jpg.pagespeed.ic.xb0sr8byoC.webp"
                                                                         alt="" data-pagespeed-url-hash="1339409321"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w3" onclick="showproduct()">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="parallax-row in-pos box2">
                                                        <div class="parallax-row-w1">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2" onclick="showproduct()">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w3">
                                                                    <img src="/images/newproducts/xproduct-7.1.jpg.pagespeed.ic.pArNSHfm0t.webp"
                                                                         alt="" data-pagespeed-url-hash="3866135543"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="parallax-col">
                                                    <div class="parallax-row in-pos box1">
                                                        <div class="parallax-row-w1">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/data:image/webp;base64,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"
                                                                         alt="" data-pagespeed-url-hash="3358841118"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-2.jpg.pagespeed.ic.vbjOR4RjNd.webp"
                                                                         alt="" data-pagespeed-url-hash="3653341039"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w3 mr-top" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-9.1.jpg.pagespeed.ic.xb0sr8byoC.webp"
                                                                         alt="" data-pagespeed-url-hash="1339409321"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w3">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="parallax-row in-pos box2">
                                                        <div class="parallax-row-w1">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w3" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-7.1.jpg.pagespeed.ic.pArNSHfm0t.webp"
                                                                         alt="" data-pagespeed-url-hash="3866135543"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="parallax-col">
                                                    <div class="parallax-row in-pos box1">
                                                        <div class="parallax-row-w1">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/data:image/webp;base64,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"
                                                                         alt="" data-pagespeed-url-hash="3358841118"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-2.jpg.pagespeed.ic.vbjOR4RjNd.webp"
                                                                         alt="" data-pagespeed-url-hash="3653341039"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2" onclick="showproduct()">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w3 mr-top">
                                                                    <img src="/images/newproducts/xproduct-9.1.jpg.pagespeed.ic.xb0sr8byoC.webp"
                                                                         alt="" data-pagespeed-url-hash="1339409321"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w3" onclick="showproduct()">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="parallax-row in-pos box2" onclick="showproduct()">
                                                        <div class="parallax-row-w1">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w2">
                                                                    <img src="/images/newproducts/xproduct-8.1.jpg.pagespeed.ic.VeI1D7jfn4.webp"
                                                                         alt="" data-pagespeed-url-hash="2602772432"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2" onclick="showproduct()">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                            <div class="parallax-box-image">
                                                                <div class="thumb" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-3.1.jpg.pagespeed.ic.lVLb8TQfKC.webp"
                                                                         alt="" data-pagespeed-url-hash="329653395"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="parallax-row-w2">
                                                            <div class="parallax-box-image">
                                                                <div class="thumb w3" onclick="showproduct()">
                                                                    <img src="/images/newproducts/xproduct-7.1.jpg.pagespeed.ic.pArNSHfm0t.webp"
                                                                         alt="" data-pagespeed-url-hash="3866135543"
                                                                         onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-show-large hidden">
                                            <div class="item-contain"></div>
                                            <div class="loading"><img
                                                        src="/images/loading-black.gif.pagespeed.ce.EDYUOe5ne-.gif"
                                                        alt="" data-pagespeed-url-hash="1475943663"
                                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end GALLERY CONTENT -->
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Discover-->
                <!--  Fit & Strong  -->
                <section class="fit-strong">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="fit-strong-left">
                                    <div class="fit-strong-top">
                                        <h3 class="fit-strong-text move_to_fadein_title" style="">Keep your body</h3>
                                        <h2 class="fit-strong-text move_to_fadein_title" style="">Fit &amp; Strong</h2>
                                        <p class="fit-strong-sub move_to_fadein_title" style="">Phasellus fermentum in,
                                            dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna.
                                            Vestibulum dapibus, mauris nec malesuada fames ac turpis velit Phasellus
                                            fermentum in, dolor. Pellentesque facilisis. </p>
                                    </div>
                                    <div class="fit-strong-bottom move_to_fadein_title" style="">
                                        <div class="fit-background"></div>
                                        <div class="carousel-image">
                                            <div id="carousel-image" class="owl-carousel owl-theme owl-carousel-init"
                                                 data-plugin-options="{&quot;singleItem&quot;:true,&quot;autoPlay&quot;:false,&quot;autoHeight&quot;:true, &quot;mouseDrag&quot;: false}"
                                                 style="opacity: 1; display: block;">
                                                <div class="owl-wrapper-outer autoHeight" style="height: 199px;">
                                                    <div class="owl-wrapper"
                                                         style="width: 2160px; left: 0px; display: block;">
                                                        <div class="owl-item" style="width: 360px;">
                                                            <div class="caroussel-slide">
                                                                <img src="/images/onepage/xfit-2.jpg.pagespeed.ic.qvKfqwUSlg.webp"
                                                                     alt="" data-pagespeed-url-hash="2026376706"
                                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 360px;">
                                                            <div class="caroussel-slide">
                                                                <img src="/images/onepage/xfit-2.jpg.pagespeed.ic.qvKfqwUSlg.webp"
                                                                     alt="" data-pagespeed-url-hash="2026376706"
                                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 360px;">
                                                            <div class="caroussel-slide">
                                                                <img src="/images/onepage/xfit-2.jpg.pagespeed.ic.qvKfqwUSlg.webp"
                                                                     alt="" data-pagespeed-url-hash="2026376706"
                                                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active" data-page="0"><span class=""></span></div>
                                                <div class="owl-page" data-page="1"><span class=""></span></div>
                                                <div class="owl-page" data-page="2"><span class=""></span></div>
                                            </div>
                                        </div>
                                        <div class="carousel-text">
                                            <div id="carousel-text" class="owl-carousel owl-theme owl-carousel-init"
                                                 data-plugin-options="{&quot;singleItem&quot;:true,&quot;autoPlay&quot;:false,&quot;autoHeight&quot;:true, &quot;mouseDrag&quot;: false}"
                                                 data-pager="owl-page" style="opacity: 1; display: block;">
                                                <div class="owl-wrapper-outer autoHeight" style="height: 194px;">
                                                    <div class="owl-wrapper"
                                                         style="width: 1500px; left: 0px; display: block;">
                                                        <div class="owl-item" style="width: 250px;">
                                                            <div class="slide-caption">
                                                                <h4 class="caption-title">Try your first training for
                                                                    free</h4>
                                                                <p class="caption-slide">Aliquam purus. Quisque lorem
                                                                    tortor fringilla sed, vestibulum id. Nulla ipsum
                                                                    dolor lacus, suscipit adipiscing. Cum sociis
                                                                    natoque </p>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 250px;">
                                                            <div class="slide-caption">
                                                                <h4 class="caption-title">Try your first training for
                                                                    free</h4>
                                                                <p class="caption-slide">Aliquam purus. Quisque lorem
                                                                    tortor fringilla sed, vestibulum id. Nulla ipsum
                                                                    dolor lacus, suscipit adipiscing. Cum sociis
                                                                    natoque </p>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 250px;">
                                                            <div class="slide-caption">
                                                                <h4 class="caption-title">Try your first training for
                                                                    free</h4>
                                                                <p class="caption-slide">Aliquam purus. Quisque lorem
                                                                    tortor fringilla sed, vestibulum id. Nulla ipsum
                                                                    dolor lacus, suscipit adipiscing. Cum sociis
                                                                    natoque </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="fit-strong-right move_to_fadein_title" style="">
                                    <div class="img-box-right move_to_fadein_title" id="boxOpenTime" style="">
                                        <img class="img-box move_to_fadein_title"
                                             src="/images/xfit-4.png.pagespeed.ic.1HceQ2ezJS.webp" alt=""
                                             data-pagespeed-url-hash="839237398"
                                             onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="">
                                        <div class="open-hour move_to_fadein_title" style="">
                                            <i class="fa fa fa-clock-o"></i>
                                            <div class="open-hours-title">
                                                <h4>Opening</h4>
                                                <p>Hours</p>
                                            </div>
                                        </div>
                                        <div class="img-box-right-border" style="border-left-width: 370px;"></div>
                                    </div>
                                    <div class="bottomright"></div>
                                    <div class="text-box move_to_fadein_title" style="">
                                        <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus
                                            at dolor.</p>
                                        <h5>From monday to friday</h5>
                                        <span class="open-hours">8 <sup>A.M</sup> - 8 <sup>P.M</sup></span>
                                        <h5>Saturday and sunday</h5>
                                        <span class="open-hours">7 <sup>A.M</sup> - 9 <sup>P.M</sup></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  End Fit & Strong  -->
            </div>
        </div>
    </section>
    <!--Footer-->
    <footer class="page-footer">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 infomation">
                        <div class="copy-right">
                            <div class="footer-right">
                                <div class="line1">Copyright © 2014<a href="#"> Athlete Fitness</a></div>
                                <div class="line2">Designed and development by InwaveThemes</div>
                            </div>
                        </div>
                        <div class="social_icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 location">
                        <div class="footer-title">
                            <h4>Our location</h4>
                        </div>
                        <div class="address">
                            <p>Room 1214&nbsp; #187 Tay Son Building, Dong Da Distr<br>Ha Noi, Vietnam<br>Phone : +84 4 22414757<br>Email : inwavethemes@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 send-mail">
                        <div class="footer-title">
                            <h4>Keep in touch</h4>
                        </div>
                        <form name="" method="post" id="send-mail">
                            <div class="info">Lorem ipsum dolor sit amet, consectetur adi sollicitud ante tellus ornare mi, et mollis</div>
                            <div class="email">
                                <input type="text" title="E-mail" name="user[email]" class="inputbox" placeholder="Your email">
                                <button class="button" title="Submit" type="submit"><i class="fa fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!--End Footer-->
    <!--To Top-->
    <div id="copyright">
        <div class="container">
            <div class="back-to-top"><a title="BACK_TO_TOP" href="#top"><i class="fa fa-chevron-up"></i></a></div>
            <div class="clrDiv"></div>
        </div>
    </div>
    <!--End To Top-->
    <script src="/js/app.js"></script>
</div>
</html>
