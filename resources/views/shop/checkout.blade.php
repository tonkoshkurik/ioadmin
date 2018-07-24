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
              <p style="text-align: left;">
                        <span>
                        <a href="{{ url(\App\Helpers::setting('facebook')) }}" target="_blank" style="font-size:23px; color:#695d6c;">
                            <i class="fab fa-facebook-f" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i>
                        </a>
                        </span>
                  <span>

                        <a href="{{ url( \App\Helpers::setting('instagram') ) }}" target="_blank"  style="font-size:23px; color:#695d6c;">
                            <i class="fab fa-instagram" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i>
                        </a>
                        </span>
                  <span>
                        <a href="{{url( \App\Helpers::setting('youtube')) }}" target="_blank" style="font-size:23px; color:#695d6c;">
                            <i class="fab fa-youtube" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i>
                        </a>
                        </span>
                  {{--<span style="font-size: 12px; font-family: OpenSans; color: rgb(216, 209, 217);">Ru </span>--}}
                  {{--<span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);"> En </span>--}}
                  {{--<span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);">Uk</span>--}}
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
              <div class="cart-mini"></div>
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
              <div class="cart-mini"></div>
              {{-- END react app--}}
          </div>
      </div>
  </div>


  <div id="checkout"></div>

@include('layouts.footer');
</div>
@endsection