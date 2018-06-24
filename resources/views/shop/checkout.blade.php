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

  <div class="row two-header">
      <div class="col-xs-12 col-sm-11 col-sm-offset-1 box-header-min cart green">
          <div class="menu-item">
              <h1>Магазин</h1>
          </div>
          <div class="menu-item">
              {{--   react app  --}}
              {{-- END react app--}}
          </div>
      </div>
      <div class="col-xs-10 col-xs-offset-1 box-header-cart hidden-xs">
          <div class="col-xs-12 two-header-shop">
              <div class="menu-item">
                <h1>Оформление
                      <br> заказа</h1>
              </div>

          </div>
          <div class="two-header-cart hidden-xs">
              {{--   react app  --}}
              <div class="shop-cart"></div>
              {{-- END react app--}}
          </div>
      </div>
  </div>


  <div id="checkout"></div>

@include('layouts.footer');
</div>
@endsection