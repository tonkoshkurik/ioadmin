@extends('layouts.main')

@section('body')
    <div id="modal-cart" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn btn-primary green btn-close btn-close-modal" type="button" data-dismiss="modal">
                        <i class="fas fa-times"></i>
                    </button>
                    <h4>
                        <img src="../img/Icon1.png"> Добавленные товары
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="row product-box">
                            <div class="col-xs-4 col-sm-3">
                                <img src="../img/Group12.png" width="100%">
                            </div>
                            <div class="col-xs-8 col-sm-9">
                                <div class="row">
                                    <div class="col-xs-7 title-box">
                                        <span>Майка белая</span>
                                    </div>
                                    <div class="col-xs-5 close-box">
                                        <button class="btn btn-primary green btn-close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="input-group group-quantity">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-quantity" data-type="minus" data-field="">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity" name="quantity" class="form-control input-quantity" value="1" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn btn-quantity" data-type="plus" data-field="">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="price-box col-xs-12 col-sm-5">
                                        <span>100 грн</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row product-box">
                            <div class="col-xs-4 col-sm-3">
                                <img src="../img/Group12.png" width="100%">
                            </div>
                            <div class="col-xs-8 col-sm-9">
                                <div class="row">
                                    <div class="col-xs-7 title-box">
                                        <span>Майка белая</span>
                                    </div>
                                    <div class="col-xs-5 close-box">
                                        <button class="btn btn-primary green btn-close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="input-group group-quantity">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-quantity" data-type="minus" data-field="">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity" name="quantity" class="form-control input-quantity" value="1" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn btn-quantity" data-type="plus" data-field="">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="price-box col-xs-12 col-sm-5">
                                        <span>100 грн</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-xs-12  price-block">
                            <button class="btn btn-primary green big-btn btn-buy-order" name="submit">
                                <span>Оформить заказ</span>
                                <i class="black">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
                                        <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                                                         C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                                                         c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"
                                        />
                                    </svg>
                                </i>
                            </button>
                            <div class="order-price">
                                <div>Всего</div>
                                <div class="sum-price">
                                    <b>375</b> грн
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page container-fluid">
        <div class="row header main green">
            <div class="col-xs-12 col-sm-8 col-sm-offset-1">
                @include('layouts.header')
            </div>
            <div class="col-md-3 hidden-sm lang-container">
                <div class="box lang"></div>
                <div class="lang-switcher box lang">
                    <p style="display: none; text-align: left;">
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
                    <a class="cats-toggle cart" data-toggle="modal" data-target="#modal-cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="label green">2</span>
                    </a>
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
                    <a class="cats-toggle" href="#"  data-toggle="modal" data-target="#modal-cart">
                        <i class="fas fa-shopping-cart"></i> Товаров добавлено
                        <span class="label green">2</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row stocks-box">
            <ul class="sleder-baner-product">
                <li class="stock-box">
                    <div class="content-box">
                        <div class="element">
                            <div class="stock-label-box">
                                <span class="stock-label">Акция 3</span>
                            </div>
                        </div>
                        <div class="element">
                            <div class="stock-text">
                                <h2>Пакет "Мiцнi горiшкi"
                                    <br> По супер цене</h2>
                                <p>
                                    <span>Футболка</span>+
                                    <span>Эспадер</span>+
                                    <span>Бутылка для воды</span>+
                                    <span>Коврык</span>
                                </p>
                            </div>
                        </div>
                        <div class="element stock-img">
                            <img src="img/stock-img.png">
                        </div>
                        <div class="element">
                            <div class="stock-price">
                                <div class="price-box">
                                    <div class="price-old">
                                        <span>300</span> грн
                                    </div>
                                    <div class="price">
                                        <span>100 грн</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary green big-btn btn-buy">
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
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="stock-box">
                    <div class="content-box">
                        <div class="element">
                            <div class="stock-label-box">
                                <span class="stock-label">Акция 1</span>
                            </div>
                        </div>
                        <div class="element">
                            <div class="stock-text">
                                <h2>Пакет "Мiцнi горiшкi"
                                    <br> По супер цене</h2>
                                <p>
                                    <span>Футболка</span>+
                                    <span>Эспадер</span>+
                                    <span>Бутылка для воды</span>+
                                    <span>Коврык</span>
                                </p>
                            </div>
                        </div>
                        <div class="element stock-img">
                            <img src="img/stock-img.png">
                        </div>
                        <div class="element">
                            <div class="stock-price">
                                <div class="price-box">
                                    <div class="price-old">
                                        <span>300</span> грн
                                    </div>
                                    <div class="price">
                                        <span>100 грн</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary green big-btn btn-buy">
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
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="stock-box">
                    <div class="content-box">
                        <div class="element">
                            <div class="stock-label-box">
                                <span class="stock-label">Акция 2</span>
                            </div>
                        </div>
                        <div class="element">
                            <div class="stock-text">
                                <h2>Пакет "Мiцнi горiшкi"
                                    <br> По супер цене</h2>
                                <p>
                                    <span>Футболка</span>+
                                    <span>Эспадер</span>+
                                    <span>Бутылка для воды</span>+
                                    <span>Коврык</span>
                                </p>
                            </div>
                        </div>
                        <div class="element stock-img">
                            <img src="img/stock-img.png">
                        </div>
                        <div class="element">
                            <div class="stock-price">
                                <div class="price-box">
                                    <div class="price-old">
                                        <span>300</span> грн
                                    </div>
                                    <div class="price">
                                        <span>100 грн</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary green big-btn btn-buy">
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
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
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
                            <img src="{{ url('uploads/' . $photo) }}">
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
                    <ul class="navs green">
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>…</li>
                        <li>
                            <a href="#">12</a>
                        </li>
                    </ul>
                    <div class="box">
                        <li class="next">
                            <a>
                                <span>Следующая</span>
                                <i class="next-page-btn green">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
                                        <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                                C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                                c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"
                                        />
                                    </svg>
                                </i>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footer');
    </div>
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
