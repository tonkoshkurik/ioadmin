@extends('layouts.main')

@section('body')
     {{--<div id="modal-cart" class="modal fade">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button class="btn btn-primary green btn-close btn-close-modal" type="button" data-dismiss="modal">--}}
                        {{--<i class="fas fa-times"></i>--}}
                    {{--</button>--}}
                    {{--<h4>--}}
                        {{--<img src="{{ url('../img/Icon1.png') }}"> Добавленные товары--}}
                    {{--</h4>--}}
                {{--</div>--}}
            {{--<div id="shop-cart"></div>--}}
                {{----}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="page container-fluid">
        <div class="row header main green">
            <div class="col-xs-12 col-md-8 col-sm-offset-1">
                @include('layouts.header')
            </div>
            <div class="col-md-3 hidden-sm lang-container">
                <div class="box lang"></div>
                <div class="lang-switcher box lang">
                    <p style="text-align: left;">
                        <a href="#" class="active">Ru </a>
                        <a href="#"> En </a>
                        <a href="#">Uk</a>
                    </p>
                </div>
                <div class="box lang"></div>
            </div>
        </div>

        <div class="row two-header">
            <div class="col-xs-12 col-sm-11 col-sm-offset-1 box-header-min cart green">
                <div class="menu-item">
                    <h1>Магазин</h1>
                </div>
                <div class="menu-item">
                    {{--   react app  --}}
                    <div class="shop-cart"></div>
                    {{-- END react app--}}
                </div>
            </div>
            <div class="col-xs-10 col-xs-offset-1 box-header-cart hidden-xs">
                <div class="col-xs-12 two-header-shop">
                    <div class="box-header top-0">
                        <h1>Магазин</h1>
                    </div>
                </div>
                <div class="two-header-cart hidden-xs">
                    {{--   react app  --}}
                    <div class="shop-cart"></div>
                    {{-- END react app--}}
                </div>
            </div>
        </div>
        <div class="row hidden-xs">
            <div class="col-xs-12 col-xs-11 col-sm-offset-1">
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Главная</a>
                    </li>
                    <li>
                        <a href="{{ url('shop') }}">Магазин</a>
                    </li>
                    <li class="active">{{ $product->name }}</li>
                </ol>
            </div>
        </div>
        <div class="row product-desc">
            <div class="col-xs-12 col-sm-5 col-md-5 col-sm-offset-1 col-lg-3 col-lg-offset-1">
                <h2 class="visible-xs product-title">{{ $product->name }}</h2>
                <div class="row product-photo">
                    <div class="col-xs-12 visible-xs label-box">
                        {!!  \App\Helpers::product_label($product->label) !!}
                    </div>
                    <div class="col-xs-12 slider-product-for">
                        {{--@dd($product->photos)--}}
                        @foreach($product->photos as $image)
                            <img src="{{ url( 'uploads/' . $image ) }}" alt="{{ $product->name }}">
                        @endforeach
                    </div>
                    <div class="col-xs-12 slider-product-nav">
                        @foreach($product->photos as $image)
                            @php
                                $thumb = pathinfo($image);
                                $thumb = url('uploads') . '/products/' . $thumb['filename'] . '_thumb.' . $thumb['extension'];
                            @endphp
                            <img src="{{ $thumb }}" alt="">
                        @endforeach
                    </div>
                </div>
            </div> 
            <div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-1 col-lg-3 col-lg-offset-1">
                <div class="row product-info">
                    <div class="col-xs-12 title-box hidden-xs">
                        <h2>{{ $product->name }}</h2>
                    </div>
                    @if(count($product->sizes))
                        <div class="col-xs-12 product-size">
                            <h4>Размер:</h4>
                            <div class="size-box">
                            @foreach ($product->sizes as $k => $size)
                                <label class="radio-size">
                                    <input type="radio" name="size" value="{{ strtoupper($size) }}">
                                    <div class="radio-text">{{ strtoupper($size) }}</div>
                                </label>
                            @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="col-xs-12 stock-price">

                        <div class="price-box">
                            @if($product->discount_price)
                            <div class="price-old">
                                <span>{{ $product->base_price }}</span> грн
                            </div>
                            <div class="price">
                                <span>{{ $product->discount_price }}</span> грн
                            </div>
                            @else
                            <div class="price">
                                <span>{{ $product->base_price }}</span> грн
                            </div>
                            @endif
                        </div>

                        <div id="add-to-cart"
                             data-id="{{ $product->id }}"
                             data-name="{{ $product->name }}"
                             data-price="{{ $product->discount_price ? $product->discount_price : $product->base_price }}"
                             data-image="{{ url( 'uploads/' . $product->photos[0] ) }}"
                        ></div>

                        {{--<br />--}}

                        {{--<button class="btn btn-primary green big-btn" name="submit">--}}
                            {{--<span>Купить</span>--}}
                            {{--<i class="black">--}}
                                {{--<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
                                     {{--viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">--}}
                                    {{--<path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111--}}
                                                        {{--C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587--}}
                                                        {{--c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"--}}
                                    {{--/>--}}
                                {{--</svg>--}}
                            {{--</i>--}}
                        {{--</button>--}}
                    </div>
                    <div class="col-xs-12 product-description  hidden-xs">
                        <p>Футболка из высокаокачественных материалов, предназначенная дляФутболка из</p>
                    </div>
                    <div class="col-xs-12 info-button-box  hidden-xs">
                        <a class="red-tooltip" data-toggle="tooltip" data-placement="bottom" title="{{ $product->delivery or '' }}">
                            <i class="icon-info delivery"></i>
                            Доставка
                        </a>
                        <a data-toggle="tooltip" data-placement="bottom" title="{{ $product->payment or '' }}">
                            <i class="icon-info payment"></i>
                            Оплата
                        </a>
                        <a data-toggle="tooltip" data-placement="bottom" title="{{ $product->waranty or '' }}">
                            <i class="icon-info guarantee"></i>
                            Гарантия
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-11 col-sm-offset-1 col-lg-2 col-lg-offset-1">
                <div class="row products-compositions">
                    <div class="col-xs-12 title-box  hidden-xs">
                        {!! \App\Helpers::product_label($product->label) !!}
                    </div>
                    @if($product->description)
                    <div class="col-xs-12 product-features visible-xs">
                        <h4>О товаре:</h4>
                        {!! $product->description or '' !!}
                    </div>
                    @endif
                    @if($product->staff)
                    <div class="col-xs-12 compositions-box">
                        <h4>Состав:</h4>
                        {!! $product->staff !!}
                    </div>
                    @endif
                    @if($product->something)
                    <div class="col-xs-12 product-features">
                        <h4>Особенности:</h4>
                      {!! $product->something !!}
                    </div>
                    @endif
                    <div class="info-button-box col-xs-12 visible-xs">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <i class="icon-info delivery"></i>
                                            <span>Доставка</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                    {!! $product->delivery or '' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <i class="icon-info payment"></i>
                                            <span>Оплата</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {!! $product->payment or '' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <i class="icon-info guarantee"></i>
                                            <span>Гарантия</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {!! $product->waranty or '' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>

@endsection

@section('js')
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script>
    $('.slider-product-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.slider-product-nav'
      });
      $('.slider-product-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-product-for',
        focusOnSelect: true,
        arrows: false
      });
    </script>
    <script>
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
      $(window).on('load', function(){
        $('.slider-product-for')[0].slick.setPosition()
      });
    </script>
@endsection