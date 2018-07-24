@extends('layouts.main')

@section('body')
    <div class="page container-fluid">
        <div class="row header main green">
            <div class="col-xs-12 col-sm-8 col-sm-offset-1">
                @include('layouts.header')
            </div>
            <div class="col-md-3 hidden-sm lang-container">
                <div class="box lang"></div>
                <div class="lang-switcher box lang">
                    <p style="text-align: left;">
                        <span>
                        <a href="{{ url(\App\Helpers::setting('facebook')) }}" target="_blank" style="font-size:23px; color:#695d6c;">
                            <i class="fab fa-facebook-f" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i>
                        </a>
                        </span>
                        <span>

                        <a href="{{ url( \App\Helpers::setting('instagram') ) }}" target="_blank"  style="font-size:23px; color:#695d6c;">
                            <i class="fab fa-instagram" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i>
                        </a>
                        </span>
                        <span>
                        <a href="{{url( \App\Helpers::setting('youtube')) }}" target="_blank" style="font-size:23px; color:#695d6c;">
                            <i class="fab fa-youtube" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i>
                        </a>
                        </span>
                        {{--<span style="font-size: 12px; font-family: OpenSans; color: rgb(216, 209, 217);">Ru </span>--}}
                        {{--<span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);"> En </span>--}}
                        {{--<span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);">Uk</span>--}}
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
                    <div class="cart-mini"></div>
                    {{-- END react app--}}
                </div>
            </div>
            <div class="col-xs-10 col-xs-offset-1 box-header-cart hidden-xs">
                <div class="col-xs-12 two-header-shop">
                    <div class="box-header top-0">
                        <h1>Магазин</h1>
                    </div>
                    <a href="#" class="cats-toggle collapse">Список товаров
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="menu menu-flex">
                        <li class="menu-item">
                            <a href="#">Фото</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Видео</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Отзывы</a>
                        </li>
                    </ul>
                </div>
                <div class="two-header-cart hidden-xs">
                    {{--   react app  --}}
                    <div class="cart-mini"></div>
                    {{-- END react app--}}
                </div>
            </div>
        </div>

        <div class="row stocks-box">
            <ul class="sleder-baner-product">
                @foreach ($slider as $slide)
                    
                <li class="stock-box">
                    <div class="content-box">
                        <div class="element">
                            <div class="stock-label-box">
                                <span class="stock-label">{{ $slide->label }}</span>
                            </div>
                        </div>
                        <div class="element">
                            <div class="stock-text">
                                <h2>{!! $slide->title !!}</h2>
                                {!! $slide->description !!}
                            </div>
                        </div>
                        <div class="element stock-img">
                            <img src="{{ url($slide->image) }}">
                        </div>
                        <div class="element">
                            <div class="stock-price">
                                {!! $slide->prices !!}
                                <a href="{{ $slide->url }}" class="btn btn-primary green big-btn btn-buy">
                                    <span>Купить</span>
                                    <i class="black">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
                                                <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                                                                        C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                                                                        c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"
                                                />
                                            </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>


        </div>

        <div class="row product-list">
            @php
                $i=1;
            @endphp
            @foreach($products as $product)
                <div class="@if($i % 2 == 0 ) col-xs-12 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 @else col-xs-12 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-1  @endif">
                    @php
                        $i++
                    @endphp
                <div class="product-container">
                    <div class="product-header">
                        <div class="product-title">
                            <span>{{ $product->name }}</span>
                        </div>
                        <div class="product-img">
                            @if(count($product->photos))
                            @php
                                $photo = $product->photos[0];
                            @endphp
                            <a href="{{ url('/product/'. $product->slug )}}">
                                <img src="{{ url('uploads/' . $photo) }}">
                            </a>
                            @endif
                            {!!   \App\Helpers::product_label($product->label) !!}
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="price">
                            <div class="price-naw">
                                <span>{{ $product->discount_price ? $product->discount_price : $product->base_price }} грн</span>
                            </div>
                        </div>
                        <a href="{{ url('/product/'. $product->slug )}}" class="btn btn-primary green big-btn btn-buy">
                            <span>Купить</span>
                            <i class="black">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
                                    <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                                                     C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                                                     c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"
                                    />
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>


        <div class="row background-light-grey">
            <div class="navigation">
                <div class="col-xs-10 col-xs-offset-1">
                    {!! $products->links('vendor.pagination.default') !!}
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footer');
    </div>
<div class="shop-cart"></div>
@endsection

@section('js')
<script>
  $(document).ready(function () {

    var quantitiy = 0;
    $('.quantity-right-plus').click(function (e) {
      // Stop acting like a button
      e.preventDefault();
      var $this = $(this).parents(".group-quantity");
      // Get the field name
      var quantity = parseInt($('.input-quantity', $this).val());
      // If is not undefined
      $('.input-quantity', $this).val(quantity + 1);
      // Increment

    });

    $('.quantity-left-minus').click(function (e) {
      // Stop acting like a button
      e.preventDefault();
      var $this = $(this).parents(".group-quantity");
      // Get the field name
      var quantity = parseInt($('.input-quantity', $this).val());
      // Increment
      if (quantity > 0) {
        $('.input-quantity', $this).val(quantity - 1);
      }
    });

  });
</script>
    <script src="js/slick.min.js"></script>
    <script>

      $('.sleder-baner-product').slick({
        arrows: false,
        autoplaySpeed:3000,
        dots: true
      });
    </script>
@endsection
