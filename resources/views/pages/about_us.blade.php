@extends('layouts.main')

@section('body')
    <div class="page container-fluid">
        <div class="row header main header-about background-about">
            <div class="col-md-7 col-xs-offset-1">
                @include('layouts.header')

            </div>
            <div class="col-md-3 col-md-offset-1 hidden-sm lang-container">
                <div class="box lang"></div>
                <div class="lang-switcher box lang">
                    <p style="text-align: left; display: none;">
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(216, 209, 217);">Ru </span>
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);"> En </span>
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);">Uk</span>
                    </p>
                </div>
                <div class="box lang"></div>
            </div>
            <div class="heder-content col-sm-12">
                <div class="caption-box col-md-11 col-sm-offset-1">
                    <h1> Все, что я делаю — <br>следствие многолетней <br>любви к спорту <br></h1>
                </div>
                <div class="quote-box col-md-10 col-sm-offset-2 hidden-xs">
                    <p>Моя цель — помочь  <br> полюбить его другим.</p>
                </div>
            </div>
        </div>
        <div class="row quote-row col-sm-offset-1 hidden-sm hidden-md hidden-lg">
            <div class="col-xs-12">
                <p>Моя цель — помочь  <br> полюбить его другим.</p>
            </div>
        </div>
        <div class="row child-info-box text-size  col-sm-offset-1">
            <div class="col-xs-12">
                <h2>Любовь с детства</h2>
            </div>
            <div class="info-body col-sm-6 col-lg-5">
                <div class="line-inset">
                    <p>Роман со спортом начался еще в детстве. Целыми днями я пропадал во дворе, где можно было побегать, погонять мяч или  оседлать велосипед. Самое страшное наказание родителей — «будешь сидеть дома».</p>
                </div>
            </div>
            <div class="info-body col-sm-6 col-lg-5 col-lg-offset-1">
                <div class="line-inset">
                    <p>В <b>12 лет</b> я всерьез увлекся карате. В школу нужно было ко второй смене, а на тренировку — к 8 утра. Так я научился дисциплине и самоконтролю. Когда ты занят любимым делом, они не в тягость.</p>
                </div>
            </div>
        </div>
        <div class="row university-info-box text-size">
            <div class=" col-xs-12 hidden-sm hidden-md hidden-lg">
                <h2>Утром лекции, <br> Вечером тренировки</h2>
            </div>
            <div class="col-12 col-xs-4 col-lg-3 col-sm-offset-1 col-lg-offset-2">
                <img src="img/IMG_3.png" width="100%">
            </div>
            <div class="col-12 col-sm-5 col-sm-offset-1">
                <div class="row info-body">
                    <h2 class="hidden-xs">Утром — лекции, <br> Вечером — тренировки</h2>
                    <div class="col-md-12 info-content line-inset">
                        <p class="hidden-xs">После 5 лет занятий карате я узнал о фитнесе и групповых программах. К тому времени я уже учился на инженерном факультете в Севастопольском НТУ. Вечером прилежный студент превращался в молодого тренера. Различные фитнес-конвенции и мастер-классы дали базу знаний, упорные тренировки — опыт.  После окончания университета нужно было выбирать: профессия инженера или спорт. Я выбрал последнее.</p>
                        <p class="visible-xs">После 5 лет занятий карате я узнал о фитнесе и групповых программах. К тому времени я уже учился на инженерном факультете в Севастопольском НТУ. Вечером прилежный студент превращался в молодого тренера. </p><br>
                        <p class="visible-xs">Различные фитнес-конвенции и мастер-классы дали базу знаний, упорные тренировки — опыт.  После окончания университета нужно было выбирать: профессия инженера или спорт. Я выбрал последнее.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row tv-info-box text-size">
            <div class="tv-img-caption col-sm-11 col-sm-offset-1">
                <h2>Киев. <br> Телевидение</h2>
            </div>
            <div class="tv-img-content col-12 col-sm-11 col-sm-offset-1">
                <ul class="line-inset line-inset-2">
                    <li class="media">
                        <div class="media-year">
                            <p>2006</p>
                        </div>
                        <div class="media-content">
                            <p>В <b>2006</b> году я переехал в Киев и почти сразу меня пригласили в фитнес-центр Aquarium. Это было время интенсивного обучения параллельно с работой, но усилия того стоили. Через год состоялся мой дебют в качестве фитнес-презентера.
                                Теперь уже я <b>обучал других инструкторов</b></p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-year">
                            <p>2011</p>
                        </div>
                        <div class="media-content">
                            <p>На кастинг <b>СТБ</b> я пришел, особо ни на что не надеясь.
                                И неожиданно прошел его, став тренером проекта
                                <b>«Зваженi та щасливi» на 5 лет.</b>
                            </p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-year">

                        </div>
                        <div class="media-content">
                            <p>
                                Это был уникальный опыт: <b>«Зваженi та щасливi»,
                                    «Все буде добре», «Кохана, ми вбиваємо дітей»</b> — программы, в которых я выступал фитнес-экспертом.
                                Позже этот телевизонный бэкграунд помог мне создать собственные проекты.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row child-info-box col-sm-offset-1 text-size">
            <div class="col-xs-12">
                <h2>Мои проекты</h2>
            </div>
            <div class="col-sm-6 col-lg-5">
                <div class="info-body line-inset text-size">
                    <p>
                        За <b>5 сезонов «Зваженi та щасливi»</b> я открыл для себя, что «бабло побеждает жир». Оказалось, что главный мотиватор для людей, желающих похудеть, — соревновательный момент и… материальный стимул. Так родился <b>«ЖирКиллер»</b> — фитнес-игра, где худеют и выигрывают ценные призы и деньги.
                    </p><br>
                    <a href="#" class="btn btn-primary big-btn about-btn hidden-xs">Подробнее
                        {{--<i class="arrow-alt-right"></i>--}}
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
            <div class="col-sm-6 col-lg-5 col-lg-offset-1">
                <div class="info-body line-inset text-size">
                    <p>
                        Позже появились регулярные программы без всяких соревнований: <b>«Формы в Норме»</b> — для тех, кто хочет привести тело в порядок и <b>«Міцні Горішки»</b> — с упором на бедра на ягодицы. Система тренировок и план питания всех трех проектов — мои авторские наработки. В них я вложил весь свой опыт, знания и желание привить любовь к спорту.
                    </p>
                    <a href="http://zhirkiller.com/" class="btn btn-primary big-btn about-btn visible-xs">Подробнее
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
        @include('layouts.footer')

    </div>
@endsection