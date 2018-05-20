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
        <div class="box-header-min pink">
            <h1>Отзывы</h1>
        </div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 two-header-wrapper">
            <div class="box-header top-0">
                <h1>Отзывы</h1>
            </div>
            <ul class="menu menu-flex" role="tablist">
                <li role="presentation" class="active menu-item">
                    <a href="#photo" aria-controls="photo" role="tab" data-toggle="tab">Фото</a>
                </li>
                <li class="menu-item">
                    <a href="#video" aria-controls="video" role="tab" data-toggle="tab">Видео</a>
                </li>
                <li class="menu-item">
                    <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Отзывы</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content">

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="photo">
                <div class="row comments-index photo-page">
                    <div class="row col-xs-12 margin0">
                        <div class="comment col-xs-12 col-sm-6 col-lg-2 col-lg-offset-1">
                            <div class="comment-box">
                                <div class="comment-img">
                                    <img src="img/comment/5.png">
                                </div>
                                <div class="row comment-footer">
                                    <div class="name-user page-photo col-xs-12 padding0">
                                        <div class="user-medal">
                                            <img src="img/Medal1.png">
                                        </div>
                                        <div class="user-name">
                                            <span>Татьяна</span>
                                        </div>
                                    </div>
                                    <div class="slim page-photo col-xs-12 padding0">
                                        <label>Похудела на</label>
                                        <div class="weight-box">
                                            <div class="weight">
                                                <div class="number">5</div>
                                                <div class="unit">кг</div>
                                            </div>
                                            <div class="weight">
                                                <div class="number">25</div>
                                                <div class="unit">см</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dop-info col-xs-12 padding0">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                        <button class="btn btn-primary pink">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment col-xs-12 col-sm-6 col-lg-2 col-lg-offset-2">
                            <div class="comment-box">
                                <div class="comment-img">
                                    <img src="img/comment/5.png">
                                </div>
                                <div class="row comment-footer">
                                    <div class="name-user page-photo col-xs-12 padding0">
                                        <div class="user-medal">
                                            <img src="img/Medal1.png">
                                        </div>
                                        <div class="user-name">
                                            <span>Татьяна</span>
                                        </div>
                                    </div>
                                    <div class="slim page-photo col-xs-12 padding0">
                                        <label>Похудела на</label>
                                        <div class="weight-box">
                                            <div class="weight">
                                                <div class="number">5</div>
                                                <div class="unit">кг</div>
                                            </div>
                                            <div class="weight">
                                                <div class="number">25</div>
                                                <div class="unit">см</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dop-info col-xs-12 padding0">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                        <button class="btn btn-primary pink">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment col-xs-12 col-sm-6 col-lg-2 col-lg-offset-2">
                            <div class="comment-box">
                                <div class="comment-img">
                                    <img src="img/comment/5.png">
                                </div>
                                <div class="row comment-footer">
                                    <div class="name-user page-photo col-xs-12 padding0">
                                        <div class="user-medal">
                                            <img src="img/Medal1.png">
                                        </div>
                                        <div class="user-name">
                                            <span>Татьяна</span>
                                        </div>
                                    </div>
                                    <div class="slim page-photo col-xs-12 padding0">
                                        <label>Похудела на</label>
                                        <div class="weight-box">
                                            <div class="weight">
                                                <div class="number">5</div>
                                                <div class="unit">кг</div>
                                            </div>
                                            <div class="weight">
                                                <div class="number">25</div>
                                                <div class="unit">см</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dop-info col-xs-12 padding0">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                        <button class="btn btn-primary pink">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-xs-12 margin0">
                        <div class="comment col-xs-12 col-sm-6 col-lg-2 col-lg-offset-1">
                            <div class="comment-box">
                                <div class="comment-img">
                                    <img src="img/comment/5.png">
                                </div>
                                <div class="row comment-footer">
                                    <div class="name-user page-photo col-xs-12 padding0">
                                        <div class="user-medal">
                                            <img src="img/Medal1.png">
                                        </div>
                                        <div class="user-name">
                                            <span>Татьяна</span>
                                        </div>
                                    </div>
                                    <div class="slim page-photo col-xs-12 padding0">
                                        <label>Похудела на</label>
                                        <div class="weight-box">
                                            <div class="weight">
                                                <div class="number">5</div>
                                                <div class="unit">кг</div>
                                            </div>
                                            <div class="weight">
                                                <div class="number">25</div>
                                                <div class="unit">см</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dop-info col-xs-12 padding0">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                        <button class="btn btn-primary pink">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment col-xs-12 col-sm-6 col-lg-2 col-lg-offset-2">
                            <div class="comment-box">
                                <div class="comment-img">
                                    <img src="img/comment/5.png">
                                </div>
                                <div class="row comment-footer">
                                    <div class="name-user page-photo col-xs-12 padding0">
                                        <div class="user-medal">
                                            <img src="img/Medal1.png">
                                        </div>
                                        <div class="user-name">
                                            <span>Татьяна</span>
                                        </div>
                                    </div>
                                    <div class="slim page-photo col-xs-12 padding0">
                                        <label>Похудела на</label>
                                        <div class="weight-box">
                                            <div class="weight">
                                                <div class="number">5</div>
                                                <div class="unit">кг</div>
                                            </div>
                                            <div class="weight">
                                                <div class="number">25</div>
                                                <div class="unit">см</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dop-info col-xs-12 padding0">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                        <button class="btn btn-primary pink">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment col-xs-12 col-sm-6 col-lg-2 col-lg-offset-2">
                            <div class="comment-box">
                                <div class="comment-img">
                                    <img src="img/comment/5.png">
                                </div>
                                <div class="row comment-footer">
                                    <div class="name-user page-photo col-xs-12 padding0">
                                        <div class="user-medal">
                                            <img src="img/Medal1.png">
                                        </div>
                                        <div class="user-name">
                                            <span>Татьяна</span>
                                        </div>
                                    </div>
                                    <div class="slim page-photo col-xs-12 padding0">
                                        <label>Похудела на</label>
                                        <div class="weight-box">
                                            <div class="weight">
                                                <div class="number">5</div>
                                                <div class="unit">кг</div>
                                            </div>
                                            <div class="weight">
                                                <div class="number">25</div>
                                                <div class="unit">см</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dop-info col-xs-12 padding0">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                        <button class="btn btn-primary pink">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="video">
                <div class="row comments-index">

                    <div class="comment col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
                        <div class="comment-box">
                            <div class="comment-video">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Ni9LIPaIKOg" frameborder="0" allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="row comment-footer">
                                <div class="name-user col-sm-5 col-xs-12 padding0">
                                    <div class="user-medal">
                                        <img src="img/Medal1.png">
                                    </div>
                                    <div class="user-name">
                                        <span>Татьяна</span>
                                    </div>
                                </div>
                                <div class="slim col-sm-7 col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">5</div>
                                            <div class="unit">кг</div>
                                        </div>
                                        <div class="weight">
                                            <div class="number">25</div>
                                            <div class="unit">см</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dop-info col-xs-12 padding0 visible-xs">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                    <button class="btn btn-primary pink">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
                        <div class="comment-box">
                            <div class="comment-video">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Ni9LIPaIKOg" frameborder="0" allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="row comment-footer">
                                <div class="name-user col-sm-5 col-xs-12 padding0">
                                    <div class="user-name">
                                        <span>Татьяна</span>
                                    </div>
                                </div>
                                <div class="slim col-sm-7 col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">5</div>
                                            <div class="unit">кг</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dop-info col-xs-12 padding0 visible-xs">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                    <button class="btn btn-primary pink">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
                        <div class="comment-box">
                            <div class="comment-video">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Ni9LIPaIKOg" frameborder="0" allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="row comment-footer">
                                <div class="name-user col-sm-5 col-xs-12 padding0">
                                    <div class="user-name">
                                        <span>Татьяна</span>
                                    </div>
                                </div>
                                <div class="slim col-sm-7 col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">5</div>
                                            <div class="unit">кг</div>
                                        </div>
                                        <div class="weight">
                                            <div class="number">25</div>
                                            <div class="unit">см</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dop-info col-xs-12 padding0 visible-xs">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                    <button class="btn btn-primary pink">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
                        <div class="comment-box">
                            <div class="comment-video">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Ni9LIPaIKOg" frameborder="0" allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="row comment-footer">
                                <div class="name-user col-sm-5 col-xs-12 padding0">
                                    <div class="user-medal">
                                        <img src="img/Medal2.png">
                                    </div>
                                    <div class="user-name">
                                        <span>Татьяна</span>
                                    </div>
                                </div>
                                <div class="slim col-sm-7 col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">5</div>
                                            <div class="unit">кг</div>
                                        </div>
                                        <div class="weight">
                                            <div class="number">25</div>
                                            <div class="unit">см</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dop-info col-xs-12 padding0 visible-xs">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                    <button class="btn btn-primary pink">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="row comments-index">

                    <div class="comment col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
                        <div class="comment-box">
                            <div class="comment-text hidden-xs">
                                <div class="img-comment">
                                    <img src="img/comment/1.png">
                                </div>
                            </div>
                            <div class="comment-text visible-xs">
                                <img src="img/facebook-logo.png">
                                <img src="img/comment/1.png">
                            </div>
                            <div class="row comment-footer">
                                <div class="name-user col-sm-5 col-xs-12 padding0">
                                    <div class="user-medal">
                                        <img src="img/Medal1.png">
                                    </div>
                                    <div class="user-name">
                                        <span>Татьяна</span>
                                    </div>
                                </div>
                                <div class="slim col-sm-7 col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">5</div>
                                            <div class="unit">кг</div>
                                        </div>
                                        <div class="weight">
                                            <div class="number">25</div>
                                            <div class="unit">см</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dop-info col-xs-12 padding0 visible-xs">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                    <button class="btn btn-primary pink">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
                        <div class="comment-box">
                            <div class="comment-text hidden-xs">
                                <div class="img-comment">
                                    <img src="img/comment/2.png">
                                </div>
                            </div>
                            <div class="comment-text visible-xs">
                                <img src="img/facebook-logo.png">
                                <img src="img/comment/2.png">
                            </div>
                            <div class="row comment-footer">
                                <div class="name-user col-sm-5 col-xs-12 padding0">
                                    <div class="user-name">
                                        <span>Татьяна</span>
                                    </div>
                                </div>
                                <div class="slim col-sm-7 col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">5</div>
                                            <div class="unit">кг</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dop-info col-xs-12 padding0 visible-xs">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                    <button class="btn btn-primary pink">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
                        <div class="comment-box">
                            <div class="comment-text hidden-xs">
                                <div class="img-comment">
                                    <img src="img/comment/3.png">
                                </div>
                            </div>
                            <div class="comment-text visible-xs">
                                <img src="img/facebook-logo.png">
                                <img src="img/comment/3.png">
                            </div>
                            <div class="row comment-footer">
                                <div class="name-user col-sm-5 col-xs-12 padding0">
                                    <div class="user-name">
                                        <span>Татьяна</span>
                                    </div>
                                </div>
                                <div class="slim col-sm-7 col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">5</div>
                                            <div class="unit">кг</div>
                                        </div>
                                        <div class="weight">
                                            <div class="number">25</div>
                                            <div class="unit">см</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dop-info col-xs-12 padding0 visible-xs">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                    <button class="btn btn-primary pink">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
                        <div class="comment-box">
                            <div class="comment-text hidden-xs">
                                <div class="img-comment">
                                    <img src="img/comment/4.png">
                                </div>
                            </div>
                            <div class="comment-text visible-xs">
                                <img src="img/facebook-logo.png">
                                <img src="img/comment/4.png">
                            </div>
                            <div class="row comment-footer">
                                <div class="name-user col-sm-5 col-xs-12 padding0">
                                    <div class="user-medal">
                                        <img src="img/Medal2.png">
                                    </div>
                                    <div class="user-name">
                                        <span>Татьяна</span>
                                    </div>
                                </div>
                                <div class="slim col-sm-7 col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">5</div>
                                            <div class="unit">кг</div>
                                        </div>
                                        <div class="weight">
                                            <div class="number">25</div>
                                            <div class="unit">см</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dop-info col-xs-12 padding0 visible-xs">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi</p>
                                    <button class="btn btn-primary pink">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <div class="row">
        <div class="navigation">
            <div class="col-xs-10 col-sm-offset-1">
                <ul class="navs">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li>…</li>
                    <li><a href="">12</a></li>
                </ul>
                <div class="box">
                    <li class="next"><a href="">Следующая <img src="img/arrow-next.png" alt="Следующая"></a></li>
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