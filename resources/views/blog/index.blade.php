@extends('layouts.main')

@section('body')

    <div class="page container-fluid">
        <div class="row header main ">
            <div class="col-md-8 col-sm-offset-1" style="position: relative; z-index: 2;">
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

        <div class="row blog-header">

            <div class="col-xs-12 col-sm-9 col-sm-offset-1 blog-header-wrapper visible-xs">
                <div class="box-header box">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-offset-1 blog-header-wrapper cats">
                <div class="box-header box hidden-xs">
                    <h1>{{ $title }}</h1>
                </div>

                <a href="#" class="cats-toggle">Категории <i style="margin-left:90px" class="fas fa-angle-down"></i></a>
                <ul class="menu menu-flex">
                    @foreach($cats as $cat)
                    <li class="menu-item">
                        <a href="{{ url('blog/' . $cat->slug) }}">{{$cat->name}}</a>
                    </li>
                    @endforeach
                </ul>

            </div>

        </div>

        <div class="row posts-index">
            @if($posts->count())
            @foreach($posts as $post)
            <div class="post col-xs-12 col-md-4 col-sm-offset-1">
                <h2>{{$post->title}}</h2>
                <img src="{{ url($post->thumb) }}"
                     alt="{{$post->title}}"
                     class="img-responsive">
                <div class="post-meta">
                    <a href="#" class="category-post">
                        {{ $post->category->name }}
                    </a>
                    <p class="date">
                        {{ $post->date->format('y/m/d') }}
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="excerpt">
                    {{ $post->excerpt() }}
                </div>
                <a href="{{ url( '/blog/post/' . $post->slug ) }}" class="btn btn-primary  big-btn">
                    <span>Читать далее</span>
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
            @endforeach
            @else
                <div class="post col-xs-12 col-md-4 col-sm-offset-1">
                    <h1>Нет записей</h1>
                </div>
            @endif
        </div>

        @if($posts->hasPages())
        <div class="row background-light-grey">
            <div class="navigation">
                <div class="col-xs-10 col-xs-offset-1">
                    {{  $posts->links('vendor.pagination.default')  }}
                    {{--<ul class="navs">--}}

                        {{--<li class="active"><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li>…</li>--}}
                        {{--<li><a href="#">12</a></li>--}}

                    {{--</ul>--}}
                    {{--<div class="box">--}}

                        {{--<li class="next"><a>Следующая<i class="next-page-btn"></i></a></li>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        @endif


        @include('layouts.footer')

    </div>

@endsection