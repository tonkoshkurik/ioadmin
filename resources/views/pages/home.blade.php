@extends('layouts.main')

@section('body')
  <div class="page container-fluid">
    <div class="row header main header-projects header-index " style="background:none;">

      <div class="col-sm-12" style="position: relative; z-index: 2;">
        <div class="col-md-7 col-xs-offset-1">
          @include('layouts.header')
        </div>
        <div class="col-md-3 col-md-offset-1 hidden-sm lang-container">
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

      <div class="swiper-container">
        <div class="swiper-wrapper">
          {{--Slider
            slides:
              1: {
                bg-image
              }
              2: {
                title
                text
                button
                button-url
              }
          --}}
          <div class="swiper-slide slide-img1" style="background: url(../img/header-2.png) 50% 50% no-repeat;">
            <div class="swiper-content-text">
              <div class="title">
                <span class="hidden-xs">Привет, <br>я — Игорь Обуховский</span>
                <span class="hidden-sm hidden-md hidden-lg">Привет, <br>я — Игорь <br> Обуховский</span>
              </div>
              <div class="text">
                <p>Автор проектов «ЖирКиллер», «Міцні Горішки», «Формы в Норме», экс-тренер 5 сезонов проекта
                  канала СТБ «Зваженi та щасливi»</p>
              </div>
              <div class="button">
                <a href="#" class="btn btn-primary btn-slide">Подробнее <i class="arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <div class="swiper-slide slide-img2" style="background: url(../img/header-1.png) 50% 50% no-repeat;">
            <div class="swiper-content-text">
              <div class="title">«ЖирКиллер»</div>
              <br>
              <div class="text">
                <p>Худей и выигрывай
                  <br> Старт проекта — 21 декабря</p>
              </div>
              <div class="button">
                <a href="#" class="btn btn-primary background-gren">Подробнее <i class="arrow-alt-right black"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Arrows -->
        <a class="swiper-button-next hidden-xs" href="#"></a>

      </div>
    </div>
    <div class="row quote-row col-sm-offset-1 hidden-sm hidden-md hidden-lg">
      <div class="col-xs-12">
        <p>Автор проектов «ЖирКиллер», «Міцні Горішки», «Формы в Норме», экс-тренер 5 сезонов проекта канала СТБ «Зваженi
          та щасливi»</p>
        <a href="#" class="btn btn-primary btn-slide">Подробнее <i class="arrow-alt-right"></i></a>
      </div>
    </div>

    <div class="row child-info-box text-size  col-sm-offset-1">
      <div class="col-xs-12">
        <h2>Зачем я это делаю</h2>
      </div>
      <div class="info-body col-sm-6 col-md-5 col-lg-5">
        <div class="line-inset">
          <p>За <b>5 сезонов</b> проекта «Зваженi та щасливi» я понял одну простую вещь. Меняя внешний вид людей, ты меняешь
            их жизнь. Это дорогого стоит. Не все могут попасть в телепроект и не всем это нужно.</p>
        </div>
      </div>
      <div class="info-body col-sm-6 col-md-5 col-lg-5 col-md-offset-1">
        <div class="line-inset">
          <p>Поэтому я создал такие программы, которые помогут любому привести тело в порядок — похудеть и подкачаться,
            обрести кубики пресса и стройные бедра. Без спортзала, в <b>домашних условиях</b>, по <b>полчаса в день</b>.</p>
        </div>
      </div>

      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <h2>Проекты</h2>
      </div>
    </div>

    <div class="row row-flex projects-info-box">
      {{--
        Projects
      --}}
      <div class="col-sm-3 padding0 box-img-projects hidden-xs" style="background-image:url(../img/1.png)">
      </div>
      <div class="col-xs-12 col-sm-9 row-flex-col padding0  background-grey">
        <div class="info-box box1">
          <div class="info-box-content">
            <img class="icon-btn" src="../img/4.png">
            <div class="info-box-title">
              <h3>«ЖирКиллер»</h3>
              <div class="badge-box">
                <span class="badge badge-white">5</span>
                <span>сезонов</span>
              </div>
            </div>
            <div class="info-box-text">
              <p>Первая онлайн фитнес-игра, где получают деньги и призы за похудение</p>
              <a href="#" class="btn">Подробнее <i class="arrow-alt-right blue"></i></a>
            </div>
            <div class="info-box-img">
              <img class="icon-project" src="img/11.png" />
            </div>
          </div>
        </div>
        <div class="info-box box2">
          <div class="info-box-content">
            <img class="icon-btn" src="../img/6.png">
            <div class="info-box-title">
              <h3>«Формы в Норме»</h3>
              <div class="badge-box">
                <span class="badge badge-white">2</span>
                <span>сезона</span>
              </div>
            </div>
            <div class="info-box-text">
              <p>Универсальные онлайн-тренировки c различными направлениями фитнеса</p>
              <a href="#" class="btn">Подробнее <i class="arrow-alt-right blue"></i></a>
            </div>
            <div class="info-box-img">
              <img class="icon-project" src="img/12.png" />
            </div>
          </div>
        </div>
        <div class="info-box box3">
          <div class="info-box-content">
            <img class="icon-btn" src="../img/5.png">
            <div class="info-box-title">
              <h3>«Міцні горішки»</h3>
              <div class="badge-box">
                <span class="badge badge-white">1</span>
                <span>сезон</span>
              </div>
            </div>
            <div class="info-box-text">
              <p>Специальная онлайн- программа, нацеленная на бедры и ягодицы</p>
              <a href="#" class="btn">Подробнее <i class="arrow-alt-right blue"></i></a>
            </div>
            <div class="info-box-img">
              <img class="icon-project" src="img/13.png" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row child-info-box counter-box text-size  col-sm-offset-1">
      <div class="col-xs-12">
        <h2>Наши достижения</h2>
      </div>
      <div class="counter-box-content col-xs-12">
        <div class="line-inset">
          <div class="counter-info">
            <span class="spincrement">30000</span>
            <i class="glyphicon glyphicon-plus"></i>
            <p>Количество участников
              <br> всех проектов</p>
          </div>
          <div class="counter-info">
            <span class="spincrement">600</span>
            <i class="glyphicon glyphicon-plus"></i>
            <p>Городов и населенных пунктов
              <br> по всему миру</p>
          </div>
          <div class="counter-info">
            <span class="spincrement">150000</span>
            <i class="glyphicon glyphicon-plus"></i>
            <p>Сброшенных кг</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row works-info-box works-info-box-img text-size">
      <div class="col-sm-12 col-md-9 background-brown padding0-xs">
        <div class="works-img-caption col-md-11 col-md-offset-1" style="position: relative;">
          <h2 class="hidden-xs hidden-sm">Почему это работает?</h2>
          <h2 class="hidden-md hidden-lg">Почему <br> это работает?</h2>
        </div>
        <div class="works-img-content text-ul col-12 col-sm-11 col-md-offset-1">
          <ul class="line-inset line-inset-3">
            <li class="media">
              <div class="media-title">
                <img class="mobile-icon" src="img/Icons1.png" />
                <span>
                                    <img class="icon-string" src="img/Icons1.png" /> Все просто</span>
              </div>
              <div class="media-content">
                <p>Здесь не бывает чудо-диет и волшебных таблеток. Нет и не будет места лени. Только регулярные
                  тренировки и правильное питание.</p>
              </div>
            </li>
            <li class="media">
              <div class="media-title">
                <img class="mobile-icon" src="img/Icons2.png" />
                <span>
                                    <img class="icon-string" src="img/Icons2.png" /> Масштаб проектов</span>
              </div>
              <div class="media-content">
                <p>Более 30 тыс. участников из 22 стран по всему миру уже изменили свое тело. Присоединяйся
                  к нам!</p>
              </div>
            </li>
            <li class="media">
              <div class="media-title">
                <img class="mobile-icon" src="img/Icons3.png" />
                <span>
                                    <img class="icon-string" src="img/Icons3.png" /> Сила мотивации </span>
              </div>
              <div class="media-content">
                <p>Здесь не бывает чудо-диет и волшебных таблеток. Нет и не будет места лени. Только регулярные
                  тренировки и правильное питание.</p>
              </div>
            </li>
            <li class="media">
              <div class="media-title">
                <img class="mobile-icon" src="img/Icons4.png" />
                <span>
                                    <img class="icon-string" src="img/Icons4.png" /> Сила единства </span>
              </div>
              <div class="media-content">
                <p>У каждого из моих проектов есть свое сообщество. Это твои единомышленники, готовые поддержать,
                  помочь советом и смотивировать, если нужно.</p>
              </div>
            </li>
            <li class="media">
              <div class="media-title">
                <img class="mobile-icon" src="img/Icons5.png" />
                <span>
                                    <img class="icon-string" src="img/Icons5.png" /> Моя вера</span>
              </div>
              <div class="media-content">
                <p>Мои агенты ответят на любой вопрос, помогут разобраться в системе, отправить отчет и не отвлекаться
                  от главного — тренировок.</p>
              </div>
            </li>
            <li class="media">
              <div class="media-title">
                <img class="mobile-icon" src="img/Icons6.png" />
                <span>
                                    <img class="icon-string" src="img/Icons6.png" /> Поддержка и помощь </span>
              </div>
              <div class="media-content">
                <p>Вера в тебя и твои силы. Я помогал измениться самым разным участникам проектов. Поэтому знаю
                  точно — когда есть желание, все реально.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-3 hidden-xs hidden-sm" style="left: -10%;">
        <img class="works-info-box-img2" src="img/IMG3_I.png">
      </div>
    </div>

    <div class="row sistem-info-box text-size background-white">
      <div class=" col-xs-12 hidden-sm hidden-md hidden-lg">
        <h2>Уникальная система</h2>
      </div>
      <div class="col-12 col-xs-4 col-sm-6">
        <img class="hidden-xs" src="img/IMG_PC.png" width="100%">
        <img class="hidden-sm hidden-md hidden-lg" src="img/7.png" width="100%">
      </div>
      <div class="col-12 col-sm-6 col-md-5">
        <div class="row info-body">
          <h2 class="hidden-xs">Уникальная система</h2>
          <div class="col-md-12 info-content line-inset line-inset-3">
            <p>Это как персональный тренер, только лучше — потому что все всегда под рукой, а заниматься можно когда
              угодно и где угодно.</p>
            <p>А если возникнет вопрос или понадобится помощь, в чате можно пообщаться с агентом — вашим личным
              помощником
            </p>
            <p>Участник любого проекта получает доступ к личому кабинету. Здесь хранится вся информация: персональная программа, план питания, задания, замеры, баллы и многое другое.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row sistem-info-box command-info-box-img text-size text-white">
      <div class="command-img-caption col-xs-12">
        <h2 class="hidden-sm hidden-md hidden-lg font-size32">Наша
          <br> команда?
        </h2>
      </div>
      <div class="command-img-content col-12 col-xs-12 col-sm-5 col-sm-offset-4 padding0">
        <div class=" col-xs-12 info-body">
          <h2 class="hidden-xs">Наша команда</h2>
          <div class="info-content line-inset line-inset-3">
            <p>Эти люди всегда за кадром, их работа может казаться невидимой, но без них ничего не было бы.</p>
            <a href="#" class="btn btn-primary btn-command">Стать частью команды <i class="arrow-alt-right black"></i></a>
          </div>
        </div>
      </div>
    </div>


    <div class="row row-flex comment-info-box text-size background-white">
      <div class="col-xs-12 hidden-sm hidden-md hidden-lg ">
        <h2>Отзывы участников</h2>
        <ul class="nav nav-pills text-center center-pills tab-btn-white">
          <li class="active">
            <a class="tab-menu-comment" data-toggle="tab" href=".photo-panel">Фото</a>
          </li>
          <li>
            <a class="tab-menu-comment" data-toggle="tab" href=".comment-panel">Отзывы</a>
          </li>
          <li>
            <a class="tab-menu-comment" data-toggle="tab" href=".video-panel">Видео</a>
          </li>
        </ul>
      </div>
      <div class="col-12 col-xs-4 col-sm-6 col-md-6 book-slider center-img" style="overflow:hidden;">
        <div class="tab-content">

          <div id="img-photo" class="text-center center-pills photo-panel tab-pane fade in active">
            @foreach($reviews as $review)
              @if($review->category_id === 1)
                <img src="{{ url($review->image) }}" name="photo" alt="">
              @endif
            @endforeach
              {{--<img class="seven" src="../img/slider/f1.jpg" name="photo">--}}
              {{--<img src="../img/slider/f2.jpg" name="photo">--}}
              {{--<img src="../img/slider/f3.jpg" name="photo">--}}
              {{--<img src="../img/slider/f4.jpg" name="photo">--}}
              {{--<img src="../img/slider/f5.jpg" name="photo">--}}
          </div>

          <div id="img-comment" class="text-center comment-panel center-pills tab-pane fade">
            @foreach($reviews as $review)
              @if($review->category_id === 2)
                <img src="{{ url($review->image) }}" name="comment">
              @endif
            @endforeach
            {{--<img src="../img/slider/review8.png" name="comment">--}}
            {{--<img src="../img/slider/review9.png" name="comment">--}}
            {{--<img src="../img/slider/review12.png" name="comment">--}}
          </div>

          <div id="url-video" class="video-panel tab-pane fade">
            <iframe class="collapse js-element-iframe" src="#" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            @foreach($reviews as $review)
              @if($review->category_id === 3)
                <a href="{{ $review->video }}" ></a>
              @endif
            @endforeach
            {{--<a href="https://www.youtube.com/embed/Ni9LIPaIKOg"></a>--}}
            {{--<a href="https://www.youtube.com/embed/fU8Gej4UNiw"></a>--}}
          </div>

          <a class="comment-button-next hidden-xs btn-img-next" data-name-box="photo"></a>
        </div>
      </div>

      <div class="col-12 col-xs-12 col-sm-4 col-md-6 row-flex-col">
        <h2 class="hidden-xs">Отзывы участников</h2>
        <div class="nav col-xs-12 col-md-12 col-lg-11 row-flex-col info-content line-inset">
          <div class="info-box active text-center" name="photo-panel-box">
            <div class="info-box-content">
              <div class="info-title text-left">
                <img src="../img/photo.png" />
                <span>Фото</span>
              </div>
              <div class="info-swiper input-group group-quantity">
                                <span class="input-group-btn">
                                    <a class="btn-swiper btn-img-last" data-name-box="photo"></a>
                                </span>
                <span class="quantity">01</span>
                <span class="input-group-btn">
                                    <a class="btn-swiper btn-img-next" data-name-box="photo"></a>
                                </span>
              </div>
              <div class="info-count-post">
                <span>{{ sprintf("%02d", $reviews->where('category_id', 1)->count()) }}</span>
              </div>
              <div class="info-text">
                <span>Все отзывы</span>
              </div>
            </div>
          </div>
          <div class="info-box text-center" name="comment-panel-box">
            <div class="info-box-content">
              <div class="info-title text-left">
                <img src="../img/sms.png" />
                <span>Отзывы</span>
              </div>
              <div class="info-swiper input-group group-quantity">
                                <span class="input-group-btn">
                                    <a class="btn-swiper btn-img-last" data-name-box="comment"></a>
                                </span>
                <span class="quantity">01</span>
                <span class="input-group-btn">
                                    <a class="btn-swiper btn-img-next" data-name-box="comment"></a>
                                </span>
              </div>
              <div class="info-count-post">
                <span>{{ sprintf("%02d", $reviews->where('category_id', 2)->count()) }}</span>
              </div>
              <div class="info-text">
                <span>Все отзывы</span>
              </div>
            </div>
          </div>
          <div class="info-box text-center" name="video-panel-box">
            <div class="info-box-content">
              <div class="info-title text-left">
                <img src="../img/video.png" />
                <span>Видео</span>
              </div>
              <div class="info-swiper input-group group-quantity">
                                <span class="input-group-btn">
                                    <a class="btn-swiper btn-img-last" data-name-box="video"></a>
                                </span>
                <span class="quantity">01</span>
                <span class="input-group-btn">
                                    <a class="btn-swiper btn-img-next" data-name-box="video"></a>
                                </span>
              </div>
              <div class="info-count-post">
                <span>{{ sprintf("%02d", $reviews->where('category_id', 3)->count()) }}</span>
              </div>
              <div class="info-text">
                <span>Все отзывы</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row posts-index margin-bottom0 background-grey">
      <div class="col-xs-12 col-sm-11 col-sm-offset-1 posts-title">
        <div class="col-xs-12 col-sm-6 padding0">
          <h2>Блог</h2>
        </div>
        <div class="col-xs-12 col-sm-6 hidden-xs">
          <a href="{{ url('blog') }}" class="btn btn-primary btn-blog background-white">Все статьи блога <i class="arrow-alt-right black"></i></a>
        </div>
      </div>
      <div class="margin-top30 col-sm-1 col-sm-offset-1 hidden-xs">
        <i class="line-inset"></i>
      </div>

      <div class="col-xs-12 col-sm-10">
        {{--
          Blog - database
          title
          img
          excerpt
          //datetime => date and year
        --}}
        @foreach($blog as $article)
        <div class="post margin-top30 col-md-4">
          <h3>{{$article->title}}</h3>
          <a href="{{  url( '/blog/' . $article->slug) }}">
            <img src="{{ $article->thumb }}" alt="Как быстро получить пресс с кубиками изменив только питание" class="img-responsive">
          </a>
          <div class="excerpt">
            <p>{{$article->excerpt()}}</p>
          </div>
          <hr>
          <div class="post-meta">
            <p class="date">{{ \Carbon\Carbon::parse($article->date)->format('m/d')  }}</p>
            <p class="year">{{ \Carbon\Carbon::parse($article->date)->format('Y') }}</p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="col-xs-12">
        <a href="{{ url('blog') }}" class="btn btn-primary background-white btn-blog-footer">Все статьи блога <i class="arrow-alt-right black"></i></a>
      </div>
    </div>

    @include('layouts.footer')
  </div>

@endsection



@section('js')
    <!-- Swiper JS -->
    <script src="{{ url('js/swiper.min.js') }}"></script>
    <script>
      var mySwiper = new Swiper('.swiper-container', {
        navigation: {
          nextEl: '.swiper-button-next'
        },
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
      mySwiper.on('slideNextTransitionEnd', function () {
        var activeSlide = parseInt(this.activeIndex);
        if(activeSlide === 2){
          $(".swiper-button-next").addClass("swiper-button2");
          $(".menu-overlay").addClass("active-white");

        }
        else{
          $(".swiper-button-next").removeClass("swiper-button2");
          $(".menu-overlay").removeClass("active-white");
        }

      });
    </script>
    <script src="js/jquery.spincrement.min.js"></script>
    <script>
      $(document).ready(function () {
        var show = true;
        var countbox = ".counter-box";
        $(window).on("scroll load resize", function () {
          if (!show) return false;                   // Отменяем показ анимации, если она уже была выполнена
          var w_top = $(window).scrollTop();        // Количество пикселей на которое была прокручена страница
          var e_top = $(countbox).offset().top;     // Расстояние от блока со счетчиками до верха всего документа
          var w_height = $(window).height();        // Высота окна браузера
          var d_height = $(document).height();      // Высота всего документа
          var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
          if (w_top + (e_top / 3.5) >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
            $(".spincrement").spincrement({
              thousandSeparator: " ",
              duration: 8000
            });
            show = false;
            //alert("dd");
          }
        });

        $('.info-box.box3').on('mouseover', function () {
          $('.box-img-projects').css('background', 'url(../img/3.png) 50% 50%');
        });
        $('.info-box.box2').on('mouseover', function () {
          $('.box-img-projects').css('background', 'url(../img/2.png) 50% 50%');
        });
        $('.info-box.box1').on('mouseover', function () {
          $('.box-img-projects').css('background', 'url(../img/1.png) 50% 50%');
        });

        $(".swiper-slide").css('background-size', 'cover');



        $('.tab-menu-comment').on("click", function () {
          var href = $(this).attr("href").substr(1);
          if(!$('[name="' + href + '-box"]').hasClass('active')){
            $(".comment-info-box .info-box").removeClass("active");
            $('[name="' + href + '-box"]').addClass("active");
          }
        })
        $('[name="photo-panel-box"]').on("click", function () {
          if(!$(this).hasClass('active')){
            $('a[href=".photo-panel"]').click();
            $(".comment-info-box .info-box").removeClass("active");
            $(this).addClass("active");
            $(".comment-button-next").data("name-box","photo");
          }
        });
        $('[name="comment-panel-box"]').on("click", function () {
          if(!$(this).hasClass('active')){
            $('a[href=".comment-panel"]').click();
            $(".comment-info-box .info-box").removeClass("active");
            $(this).addClass("active");
            $(".comment-button-next").data("name-box","comment");
          }
        });
        $('[name="video-panel-box"]').on("click", function () {
          if(!$(this).hasClass('active')){
            $('a[href=".video-panel"]').click();
            $(".comment-info-box .info-box").removeClass("active");
            $(this).addClass("active");
            $(".comment-button-next").data("name-box","video");
          }
        });
      });

      $(document).ready(function () {
        $('.comment-info-box .info-box').on("click", function (e) {
          var currentAttrValue = $(this).data('href');
          $('.nav-pills a[href="' + currentAttrValue + '"]').tab('show')
        });

        var urlFirstVideo = $("#url-video a").first().attr("href");
        var width = $(".comment-info-box .book-slider #img-photo img").first().width();
        var height = $(".comment-info-box .book-slider #img-photo img").first().height();
        $("#url-video .js-element-iframe").first().attr({ "width": width, "height": height });
        var $iframe = $("#url-video .js-element-iframe").first().clone().removeClass().addClass("old-iframe").attr("src", urlFirstVideo);
        $("#url-video").append($iframe);
      });

      var currentPhoto = 1;
      var kolvoPhoto = $("#img-photo img[name='photo']").length;
      var photo = new Array();
      $.each($("#img-photo img[name='photo']"), function (key, value) {
        photo[key] = new Image();
        photo[key].src = $(this).attr("src");
      });

      var currentComment = 1;
      var kolvoComment = $("#img-comment img[name='comment']").length; //количество картинок
      var comment = new Array();
      $.each($("#img-comment img[name='comment']"), function (key, value) {
        comment[key] = new Image();
        comment[key].src = $(this).attr("src");
      });

      var currentVideo = 1;
      var kolvoVideo = $("#url-video a").length; //количество картинок
      var video = new Array();
      $.each($("#url-video a"), function (key, value) {
        video[key] = $(this).attr("href");
      });


      $(".btn-img-next").on("click", function () {

        var nameBox = $(this).data("name-box");
        switch (nameBox) {
          case "photo":
            if (currentPhoto < kolvoPhoto) swipeElement($(this), ++currentPhoto, nameBox)
            break;
          case "comment":
            if (currentComment < kolvoComment) swipeElement($(this), ++currentComment, nameBox)
            break;
          case "video":
            if (currentVideo < kolvoVideo) swipeElement($(this), ++currentVideo, nameBox)
            break;
        }


      })

      $(".btn-img-last").on("click", function () {

        var nameBox = $(this).data("name-box");
        switch (nameBox) {
          case "photo":
            if (currentPhoto > 1) swipeElement($(this), --currentPhoto, nameBox)
            break;
          case "comment":
            if (currentComment > 1) swipeElement($(this), --currentComment, nameBox)
            break;
          case "video":
            if (currentVideo > 1) swipeElement($(this), --currentVideo, nameBox)
            break;
        }
      })

      function swipeElement($this, current, nameBox) {

        var numPhoto = addZero(current);

        switch (nameBox) {
          case "photo":
            document.images['photo'].src = photo[current - 1].src;
            $('[name="photo-panel-box"]').find(".quantity").text(numPhoto);
            break;
          case "comment":
            document.images['comment'].src = comment[current - 1].src;
            $('[name="comment-panel-box"]').find(".quantity").text(numPhoto);
            break;
          case "video":
            $("#url-video .old-iframe").remove();
            $('[name="video-panel-box"]').find(".quantity").text(numPhoto);

            var $iframe = $("#url-video .js-element-iframe")
              .first()
              .clone()
              .removeClass()
              .addClass("old-iframe")
              .attr("src", video[current - 1]);
            $("#url-video").append($iframe);
            break;
        }
      }

      function addZero(params) {
        return ("0" + params).slice(-2);
      }
    </script>
@endsection