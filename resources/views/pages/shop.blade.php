@extends('layouts.main')

@section('body')
    <div class="page container-fluid">
        <div class="row header main">
            <div class="col-md-8 col-xs-offset-1">
                @include('layouts.header')
            </div>
            <div class="col-md-3 hidden-sm lang-container">
                <div class="box lang"></div>
                <div class="lang-switcher box lang">
                    <p style="text-align: left;">
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(216, 209, 217);">Ru </span>
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);"> En </span>
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);">Uk</span>
                    </p>
                </div>
                <div class="box lang"></div>
            </div>
        </div>

        <div class="row two-header">
            <div class="box-header-min cart">
                <div class="menu-item">
                    <h1>Магазин</h1>
                </div>
                <div class="menu-item">
                    <a href="#" class="cats-toggle cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="label">{{ $cart or 0 }}</span>
                    </a>
                </div>
            </div>
            <div class="col-xs-offset-1">
                <div class="col-xs-12 col-sm-9 two-header-shop">
                    <div class="box-header top-0">
                        <h1>Магазин</h1>
                    </div>
                    <a href="#" class="cats-toggle">Список товаров <i class="fas fa-angle-down"></i></a>
                    <ul class="menu menu-flex">
                        <li class="menu-item"><a href="#">Фото</a></li>
                        <li class="menu-item"><a href="#">Видео</a></li>
                        <li class="menu-item"><a href="#">Отзывы</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 two-header-cart">
                    <a href="#" class="cats-toggle">
                        <i class="fas fa-shopping-cart"></i> Товаров добавлено
                        <span class="label">{{ $cart or 0 }}</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row stocks-box">
            <div class="stock-box">
                <div class="slider-box">
                    <div class="slider">
                        <a href="#"><i class="fas fa-circle"></i></a>
                        <a href="#"><i class="fas fa-circle"></i></a>
                        <a href="#"><i class="fas fa-circle"></i></a>
                    </div>
                </div>
                <div class="content-box">
                    <div class="element">
                        <div class="stock-label-box">
                            <span class="stock-label">Акция</span>
                        </div>
                    </div>
                    <div class="element">
                        <div class="stock-text">
                            <h2>Пакет "Мiцнi горiшкi" <br> По супер цене</h2>
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
                            <button class="btn btn-primary">Купить <i class="arrow-alt-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row product-list">
            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-lg-2 col-lg-offset-1">
                <div class="product-container">
                    <div class="product-header">
                        <div class="product-title">
                            <span>Майка белвя</span>
                        </div>
                        <div class="product-img">
                            <img src="img/Group1.png">
                            <span class="label-product label-top">Tоп</span>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="price">
                            <div class="price-naw">
                                <span>500 грн</span>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-buy">Купить <i class="arrow-alt-down"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-lg-2 col-lg-offset-2">
                <div class="product-container">
                    <div class="product-header">
                        <div class="product-title">
                            <span>Майка белвя</span>
                        </div>
                        <div class="product-img">
                            <img src="img/Group2.png">
                            <span class="label-product label-new">Новинка</span>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="price">
                            <div class="price-naw">
                                <span>500 грн</span>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-buy">Купить <i class="arrow-alt-down"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-lg-2 col-lg-offset-2">
                <div class="product-container">
                    <div class="product-header">
                        <div class="product-title">
                            <span>Майка белвя</span>
                        </div>
                        <div class="product-img">
                            <img src="img/Group3.png">
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="price">
                            <div class="price-naw">
                                <span>500 грн</span>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-buy">Купить <i class="arrow-alt-down"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-lg-2 col-lg-offset-1">
                <div class="product-container">
                    <div class="product-header">
                        <div class="product-title">
                            <span>Майка белвя</span>
                        </div>
                        <div class="product-img">
                            <img src="img/Group2.png">
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="price">
                            <div class="price-naw">
                                <span>500 грн</span>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-buy">Купить <i class="arrow-alt-down"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-lg-2 col-lg-offset-2">
                <div class="product-container">
                    <div class="product-header">
                        <div class="product-title">
                            <span>Майка белвя</span>
                        </div>
                        <div class="product-img">
                            <img src="img/Group3.png">
                            <span class="label-product label-discount">Скидка</span>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="price">
                            <div class="price-naw">
                                <span>750 грн</span>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-buy">Купить <i class="arrow-alt-down"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-lg-2 col-lg-offset-2">
                <div class="product-container">
                    <div class="product-header">
                        <div class="product-title">
                            <span>Майка белвя</span>
                        </div>
                        <div class="product-img">
                            <img src="img/Group1.png">
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="price">
                            <div class="price-naw">
                                <span>100 грн</span>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-buy">Купить <i class="arrow-alt-down"></i></button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="navigation">
                <div class="col-xs-10 col-xs-offset-1">
                    <ul class="navs">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>…</li>
                        <li><a href="#">12</a></li>
                    </ul>
                    <div class="box">
                        <li class="next"><a href="">Следующая <img src="img/arrow-next.png" alt="Следующая"></a></li>
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footer')
    </div>
@endsection