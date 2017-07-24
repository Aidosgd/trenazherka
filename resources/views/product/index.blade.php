@extends('layouts.app')
@section('black') black @endsection
@section('content')
    <section class="page-heading">
        <div class="title-slide">
            <div class="container">
                <div class="banner-content">
                    <div class="page-title">
                        <h3>Product listing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul>
                            <li class="home"><a href="/"><i class="fa fa-home"></i> Главная страница</a></li>
                            <li><span>//</span></li>
                            <li class="category-2">Страница товаров</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->
        <div class="product-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-image-wrapper">
                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="#"><img alt="" src="{{ $product->images->first()->path }}"></a>
                                        </div>
                                        <div class="info-products">
                                            <div class="product-name">
                                                <a href="product-detail.html">{{ $product->node->title }}</a>
                                                <div class="product-bottom"></div>
                                            </div>
                                            <div class="price-box">
                                                <span class="special-price">{{ $product->node->fields->price }} тг</span>
                                                <span class="old-price">{{ $product->node->fields->old_price }} тг</span>
                                            </div>
                                            <div class="actions">
                                                {!! $product->node->content !!}
                                                {{--<ul>--}}
                                                    {{--<li><a href="#"><i class="fa fa-info"></i></a></li>--}}
                                                    {{--<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                                    {{--<li><a href="#"><i class="fa fa-search"></i></a></li>--}}
                                                    {{--<li><a href="#"><i class="fa fa-star"></i></a></li>--}}
                                                {{--</ul>--}}
                                            </div>
                                        </div>
                                    </div>
                                    {{--<a class="arrows quickview" href="#quickview"><i class="fa fa-arrows"></i></a>--}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection