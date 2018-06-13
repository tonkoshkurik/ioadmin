@extends('layouts.main')

@section('body')
<div class="page container-fluid">
    <div class="row header main header-projects background-projects">
        <div class="col-sm-12">

            <div class="col-md-7 col-sm-offset-1">
                @include('layouts.header')
            </div>

            <div class="col-md-3 col-md-offset-1 hidden-sm lang-container">
                <div class="box lang"></div>
                <div class="lang-switcher box lang">
                    <p style="text-align: left; display: none">
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(216, 209, 217);">Ru </span>
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);"> En </span>
                        <span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);">Uk</span>
                    </p>
                </div>
                <div class="box lang"></div>
            </div>
        </div>
        <div class="heder-content flex col-sm-12">
            <div class="caption-box col-md-11 col-sm-offset-1">
                <h1 class="hidden-xs">
                    Мои проекты —
                    <br> это часть меня
                </h1>
                <h1 class="visible-xs">
                    Мои проекты
                    <br> это часть
                    <br> меня
                </h1>
            </div>
            <div class="row">
                <div class="quote-box col-sm-4 col-md-3  col-sm-offset-2 hidden-xs">
                    <p>Основа любого проекта:
                        <br> онлайн-тренировки + план питания</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-3  col-sm-offset-2 hidden-xs">
                    <div class="logo-box">
                        <img src="img/zhir-1.png" />
                        <img src="img/fn-1.png" />
                        <img src="img/mg-1.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row quote-row col-sm-offset-1 visible-xs">
        <div class="col-xs-12">
            <p>Основа любого проекта:
                <br> онлайн-тренировки + план питания</p>
        </div>
        <div class="logo-box col-xs-12">
            <img src="img/Logo3.png" />
            <img src="img/Logo1.png" />
            <img src="img/Logo2.png" />
        </div>
    </div>
    <div class="row child-info-box text-size  col-sm-offset-1">
        <div class="col-xs-12">
            <h2 class="project">Просто и эффективно</h2>
        </div>
        <div class="info-body col-sm-6 col-md-5 col-lg-5">
            <div class="line-inset">
                <p>Все просто: зайди в личный кабинет, включи видео и занимайся. Не забывай о ежедневных отчетах — я должен
                    видеть, что ты не отлыниваешь от тренировок.</p>
            </div>
        </div>
        <div class="info-body col-sm-6 col-md-5 col-lg-5 col-md-offset-1">
            <div class="line-inset">
                <p>Чтобы правильно питаться, следуй разделу
                    <b>«Рацион»</b>, составленному на основе твоих данных. А если потянет на кулинарные подвиги, загляни
                    в нашу
                    <b>«Книгу рецептов»</b>.</p>
            </div>
        </div>
    </div>
    <div class="row information-box background-green text-size">
        <div class="col-xs-8 visible-xs">
            <h2 class="project">«ЖирКиллер»</h2>
        </div>
        <div class="col-xs-4 col-sm-1 col-sm-offset-1">
            <img class="mini-logo" src="img/Logo3.png" />
        </div>
        <div class="col-xs-12 dop-content visible-xs">
            <span class="badge badge-white">5</span>
            <span>сезонов</span>
        </div>
        <div class="col-xs-8 col-sm-6 col-md-5 col-md-offset-1">
            <div class="row info-body">
                <h2 class="hidden-xs project">«ЖирКиллер»</h2>
                <div class="col-md-12 projects-info">
                    <div class="line-inset">
                        <p>Фитнес-игра, где худеют и выигрывают деньги и призы. Если соревнования тебе не по душе, просто
                            занимайся и сбрасывай вес. Тот самый случай, когда главное — не победа, а участие. Идеально
                            для тех, чья цель — избавиться от лишних кг</p>
                        <div class="row dop-content hidden-xs">
                            <div class="col-sm-8 b400">
                                Продолжительность
                            </div>
                            <div class="col-sm-4 b400">
                                <span class="badge badge-white">4</span>
                                недели
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dop-info project1 arrow-alt-right">
                        <span>Подробнее</span>
                        <i class="blue">
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
        <div class="img-mobail-box col-xs-4 col-sm-3 col-lg-2 col-lg-offset-1">
            <img class="object move-up img-mobail" src="img/IMG_M.png" />
        </div>
    </div>
    <div class="row information-box background-red text-size">
        <div class="title-box visible-xs">
            <h2 class="project">«Формы в Норме»</h2>
        </div>
        <div class="dop-content visible-xs">
            <span class="badge badge-white">5</span>
            <span>сезонов</span>
        </div>
        <div class="img-mobail-box col-sm-3 col-lg-2 col-lg-offset-1">
            <img class="object move-up img-mobail" src="img/IMG_M3.png" />
        </div>
        <div class="information-text-box col-sm-6 col-md-5 col-md-offset-1">
            <div class="row info-body">
                <h2 class="hidden-xs project">«Формы в Норме»</h2>
                <div class="col-md-12 projects-info">
                    <div class="line-inset">
                        <p>Универсальная программа онлайн-тренировок с кардионагрузками. В третьем сезоне появилась зумба
                            и пилатес. Оптимальный вариант для тех, кто хочет и похудеть и немного подкачаться.</p>
                        <div class="row dop-content hidden-xs">
                            <div class="col-sm-8 b400">
                                Продолжительность
                            </div>
                            <div class="col-sm-4 b400">
                                <span class="badge badge-white">4</span>
                                недели
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dop-info project2 arrow-alt-right">
                        <span>Подробнее</span>
                        <i class="blue">
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
        <div class="mini-logo-box col-sm-1 col-sm-offset-1">
            <img class="mini-logo visible-xs" src="img/Logo5.png" />
            <img class="mini-logo hidden-xs" src="img/Logo1.png" />
        </div>
    </div>
    <div class="row information-box background-green text-size">
        <div class="col-xs-8 visible-xs">
            <h2 class="project">«Міцні горішки»</h2>
        </div>
        <div class="col-xs-4 col-sm-1 col-sm-offset-1">
            <img class="mini-logo visible-xs" src="img/Logo4.png" />
            <img class="mini-logo hidden-xs" src="img/Logo2.png" />
        </div>
        <div class="col-xs-12 dop-content visible-xs">
            <span class="badge badge-white">5</span>
            <span>сезонов</span>
        </div>


        <div class="col-xs-8 col-sm-6 col-md-5 col-md-offset-1">
            <div class="row info-body">
                <h2 class="hidden-xs project">«Міцні горішки»</h2>
                <div class="col-md-12 projects-info">
                    <div class="line-inset">
                        <p>Удар по самой проблемной зоне женщин — специальный комплекс упражнений для крепкой попы. Лучшее
                            решение, чтобы избавиться от всего «лишнего» на бедрах и ягодицах.</p>
                        <div class="row dop-content hidden-xs">
                            <div class="col-sm-8 b400">
                                Продолжительность
                            </div>
                            <div class="col-sm-4 b400">
                                <span class="badge badge-white">3</span>
                                недели
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dop-info project3 arrow-alt-right">
                        <span>Подробнее</span>
                        <i class="blue">
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
        <div class="img-mobail-box col-xs-4 col-sm-3 col-lg-2 col-lg-offset-1">
            <img class="object move-up img-mobail" src="img/IMG_M5.png" />
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection