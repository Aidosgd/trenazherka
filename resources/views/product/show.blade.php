@extends('layouts.app')
@section('black') black @endsection
@section('content')
    <section class="page-heading">
        <div class="title-slide">
            <div class="container">
                <div class="banner-content">
                    <div class="page-title">
                        <h3>{{ $product->node->title }}</h3>
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
                            <li class="category-2"><a href="/product/{{ $category->node->slug }}">{{ $category->node->title }}</a></li>
                            <li class="category-2">{{ $product->node->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-view">
                            <div class="product-essential col-md-12">
                                <div class="product-img-box col-md-6">
                                    <img src="{{ $product->images->first()->path }}" alt="">
                                </div>
                                <div class="product-shop col-md-6">
                                    <div class="product-name">
                                        <h1>{{ $product->node->title }}</h1>
                                    </div>
                                    <div class="meta-box">
                                        <div class="price-box">
                                            <span class="special-price">{{ $product->node->fields->price }}тг</span>
                                            <span class="old-price">{{ $product->node->fields->old_price }}тг</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="short-description">
                                        {!! $product->node->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection