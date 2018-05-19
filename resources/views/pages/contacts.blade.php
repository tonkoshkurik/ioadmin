@extends('layouts.main')

@section('body')
    <div class="page container-fluid">
        <div class="row header main">
            <div class="col-md-8 col-xs-offset-1">
                @include('layouts.header')
            </div>
            <div class="col-md-3 hidden-sm lang-container contact-bg">
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
            <div class="box-header-min contact">
                <div class="menu-item">
                    <h1>Контакты</h1>
                </div>
            </div>
        </div>
        <div class="row page-content">
            <div class="col-xs-11 col-sm-11 col-md-8 col-sm-offset-1">
                <div class="row contact-table">
                    <div class="col-xs-12 contact-head">
                        <div class="hidden-xs col-sm-4">
                            <h1>Контакты</h1>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <span>
                                <i class="fas fa-phone"></i> 044 455 67 88</span>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <span>
                                <i class="fas fa-envelope"></i>info@zhirkiller.com</span>
                        </div>
                    </div>
                    <div class="col-xs-12 contact-tr">
                        <div class="col-sm-12 col-sm-4 contact-icon-box">
                            <img class="default" src="img/contact-question.png" alt="Есть вопросы по проектам?">
                            <img class="active" src="img/contact-question-active.png" alt="Есть вопросы по проектам?">
                        </div>
                        <div class="col-sm-12 col-sm-4">
                            <span class="hidden-xs">
                                <b>Есть вопросы <br> по проектам?</b>
                            </span>
                            <span class="visible-xs"> <b>Есть вопросы по проектам?</b>
                            </span>
                        </div>
                        <div class="col-sm-12 col-sm-4">
                            <span class="hidden-xs">Напиши нам, <br> чтобы узнать больше</span>
                            <span class="visible-xs">Напиши нам, чтобы узнать больше</span>
                        </div>
                    </div>
                    <div class="col-xs-12 contact-tr">
                        <div class="col-sm-12 col-sm-4 contact-icon-box">
                            <img class="default" src="img/contact-work.png" alt="Хочешь работать с нами?">
                            <img class="active" src="img/contact-work-active.png" alt="Хочешь работать с нами?">
                        </div>
                        <div class="col-sm-12 col-sm-4">
                            <span class="hidden-xs">
                                <b>Хочешь <br> работать с нами?</b>
                            </span>
                            <span class="visible-xs">
                                <b>Хочешь работать с нами?</b>
                            </span>
                        </div>
                        <div class="col-sm-12 col-sm-4">
                            <span class="hidden-xs">Пришли рассказ о себе
                                <br> и стань частью команды</span>
                            <span class="visible-xs">Пришли рассказ о себе и стань частью команды</span>
                        </div>
                    </div>
                    <div class="col-xs-12 contact-tr">
                        <div class="col-sm-12 col-sm-4 contact-icon-box">
                            <img class="default" src="img/contact-partners.png" alt="Хочешь сотрудничать?">
                            <img class="active" src="img/contact-partners-active.png" alt="Хочешь сотрудничать?">
                        </div>
                        <div class="col-sm-12 col-sm-4">
                            <span class="hidden-xs">
                                <b>Желаешь
                                    <br> сотрудничать?</b>
                            </span>
                            <span class="visible-xs">
                                <b>Желаешь сотрудничать?</b>
                            </span>
                        </div>
                        <div class="col-sm-12 col-sm-4">
                            <span class="hidden-xs">Расскажи,
                                <br> что можешь предложить</span>
                            <span class="visible-xs">Расскажи, что можешь предложить</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>

@endsection