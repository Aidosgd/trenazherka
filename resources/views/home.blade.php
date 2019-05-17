@extends('layouts.app')

@section('content')
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
                        @foreach($productsCategory->children as $category)
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="col-md-12 price-table-content">
                                    <div class="price-table-text">
                                        <h3>{{ $category->node->title }}</h3>
                                        <a href="/product/{{ $category->node->slug }}"><span>Посмотреть</span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                        <h4>Новые товары</h4>
                    </div>
                    @foreach($products as $product)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="product-image-wrapper">
                                <div class="product-content">
                                    <div class="product-image">
                                        <a href="/product/{{ $product->category->node->slug.'/'.$product->node->slug }}">
                                            <img alt="{{ $product->node->title }}" src="{{ $product->images->first()->path }}">
                                        </a>
                                    </div>
                                    <div class="info-products">
                                        <div class="product-name">
                                            <a href="/product/{{ $product->category->node->slug.'/'.$product->node->slug }}">{{ $product->node->title }}</a>
                                            <div class="product-bottom"></div>
                                        </div>
                                        <div class="price-box">
                                            <span class="special-price">{{ $product->node->fields->price }} тг</span>
                                            <span class="old-price">{{ $product->node->fields->old_price }} тг</span>
                                        </div>
                                        <div class="actions">
                                            {!! $product->node->teaser !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--End New Products-->
    </div>
@endsection
@section('scripts')
    <script>
        var windowHeight = $(window).height(),
                mainSlider = $('.slick-slider'),
                header = $('.header');

        mainSlider.slick({
            dots: true,
            arrows: true
        });

        mainSlider.css({
            height : windowHeight
        });

        var lastScrollTop = 0;
        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st > lastScrollTop){
                if(lastScrollTop > windowHeight){
                    header.addClass('black');
                }
            } else {
                if(lastScrollTop < windowHeight){
                    header.removeClass('black');
                }
            }
            lastScrollTop = st;
        });
    </script>
@endsection