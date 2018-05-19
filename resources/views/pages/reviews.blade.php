@extends('layouts.main')

@section('body')
<div class="page container-fluid">
    <div class="row header main">
        <div class="col-md-8 col-xs-offset-1">
            <header>
                <div class="logo box">
                    <img src="img/logo.png" alt="Igor Obuhovsky logo">
                </div>
                <nav class="menu-overlay">
                    <a href="#" class="toggleNav"></a>
                    <ul class="menu box flex-menu">
                        @foreach($menu as $menuitem)
                            <li class="menu-item">
                                <a href="{{ $menuitem->url() }}">
                                    {{$menuitem->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <a href="#" class="close" style="font-size:2em;"><i class="fas fa-times"></i></a>
                </nav>
            </header>
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
        <div class="box-header-min">
            <h1>Отзывы</h1>
        </div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 two-header-wrapper">
            <div class="box-header top-0">
                <h1>Отзывы</h1>
            </div>
            <ul class="menu menu-flex">
                <li class="menu-item"><a href="#">Фото</a></li>
                <li class="menu-item"><a href="#">Видео</a></li>
                <li class="menu-item"><a href="#">Отзывы</a></li>
            </ul>

        </div>

    </div>

    <div class="row comments-index">

        <div class="comment col-md-6 col-lg-4 col-lg-offset-1">
            <div class="comment-box">
                <div class="comment-text">
                    <img src="img/facebook-logo.png">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                </div>
                <div class="row comment-footer">
                    <div class="name-user col-sm-5 col-xs-12">
                        <img src="img/Medal1.png">
                        <span>Оксана</span>
                    </div>
                    <div class="slim col-sm-7 col-xs-12">
                        <label>Похудела на</label>
                        <span><i>24</i>кг</span>
                        <span><i>24</i>см</span>
                    </div>
                </div>
                <button class="btn btn-primary">Подробнее</button>
            </div>
        </div>

        <div class="comment col-md-6 col-lg-4 col-lg-offset-1">
            <div class="comment-box">
                <div class="comment-text">
                    <img src="img/facebook-logo.png">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                </div>
                <div class="row comment-footer">
                    <div class="name-user col-sm-5 col-xs-12">
                        <span>Оксана</span>
                    </div>
                    <div class="slim col-sm-7 col-xs-12">
                        <label>Похудела на</label>
                        <span><i>24</i>кг</span>
                        <span><i>24</i>см</span>
                    </div>
                </div>
                <button class="btn btn-primary">Подробнее</button>
            </div>
        </div>

        <div class="comment col-md-6 col-lg-4 col-lg-offset-1">
            <div class="comment-box">
                <div class="comment-text">
                    <img src="img/facebook-logo.png">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                </div>
                <div class="row comment-footer">
                    <div class="name-user col-sm-5 col-xs-12">
                        <span>Оксана</span>
                    </div>
                    <div class="slim col-sm-7 col-xs-12">
                        <label>Похудела на</label>
                        <span><i>24</i>кг</span>
                        <span><i>24</i>см</span>
                    </div>
                </div>
                <button class="btn btn-primary">Подробнее</button>
            </div>
        </div>

        <div class="comment col-md-6 col-lg-4 col-lg-offset-1">
            <div class="comment-box">
                <div class="comment-text">
                    <img src="img/facebook-logo.png">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                </div>
                <div class="row comment-footer">
                    <div class="name-user col-sm-5 col-xs-12">
                        <img src="img/Medal2.png">
                        <span>Оксана</span>
                    </div>
                    <div class="slim col-sm-7 col-xs-12">
                        <label>Похудела на</label>
                        <span><i>24</i>кг</span>
                        <span><i>24</i>см</span>
                    </div>
                </div>
                <button class="btn btn-primary">Подробнее</button>
            </div>
        </div>
    </div>



    <!-- <div class="row">
<h1>Все, что я делаю —<br>
    следствие многолетней<br>
    любви к спорту </h1>
<div class="col-md-6">
  <p>Моя цель — помочь <br>
      полюбить его другим.</p>
</div>
</div>

-->


    <div class="row">
        <div class="navigation">
            <div class="col-xs-10 col-sm-offset-1">
                <ul class="navs">
                    <li class="active"><a href="https://futureprocurement.net/procurement-blog/">1</a></li>
                    <li><a href="https://futureprocurement.net/procurement-blog/page/2/">2</a></li>
                    <li><a href="https://futureprocurement.net/procurement-blog/page/3/">3</a></li>
                    <li>…</li>
                    <li><a href="https://futureprocurement.net/procurement-blog/page/12/">12</a></li>
                </ul>
                <div class="box">
                    <li class="next"><a href="https://futureprocurement.net/procurement-blog/page/2/">Следующая <img src="img/arrow-next.png" alt="Следующая"></a></li>
                </div>
            </div>
        </div>
    </div>



    <footer class="row">

        <div class="col-md-11 col-md-offset-1">
            <!-- Here is flex container should start -->
            <div class="logo box">
                <img src="img/footer-logo.png" alt="Igor Obuhovsky logo">
                <p>© 2017 Copyright</p>
            </div>

            <ul class="menu box">
                <li class="menu-item"><a href="about.html">Обо мне</a></li>
                <li class="menu-item"><a href="#">Проекты</a></li>
                <li class="menu-item"><a href="#">Магазин</a></li>
                <li class="menu-item"><a href="#">Отзывы</a></li>
                <li class="menu-item"><a href="#">Блог</a></li>
                <li class="menu-item"><a href="#">Контакты</a></li>
            </ul>

            <div class="box phone">
                <p><i class="fas fa-phone"></i> 044 455 67 88</p>
                <p><i class="fas fa-envelope"></i> info@zhirkiller.com</p>
            </div>

            <div class="box social">
                <div style="font-size:23px; color:#695d6c;">
                    <i class="fab fa-facebook-f" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i>
                    <i class="fab fa-instagram" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i>
                    <i class="fab fa-youtube" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i>
                </div>
            </div>

        </div>

    </footer>




</div>
@endsection