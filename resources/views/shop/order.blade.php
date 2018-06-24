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
        <p style="display: none; text-align: left;">
          <a href="#" class="active">Ru </a>
          <a href="#"> En </a>
          <a href="#">Uk</a>
        </p>
      </div>
      <div class="box lang"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-11 col-sm-offset-1 box-header-min ">
      <div class="menu-item">
          <h1>Спасибо за доверие</h1>
      </div>
    </div>
  </div>

    <div class="row order-box">
        <div class="col-sm-6 col-lg-4 col-sm-offset-1">
            <div class="info-body">
                <p> Ваш номер заказа
                    <span class="label-green">№{{$order->id}}</span>
                </p>
            </div>
        </div>
        <div class="col-sm-5 col-lg-5 col-lg-offset-1">
            <div class="info-body">
                <p>
                    В ближайшее время наш менеджер свяжется с вами и уточнит детали.
                </p>
            </div>
        </div>
        <div class="col-sm-5 col-sm-offset-7 col-lg-offset-6">
            <a class="btn btn-primary green big-btn btn-home" href="/">
                <span>На главную</span>
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

  @include('layouts.footer');
</div>
@endsection