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

        <div class="row blog-header">

            <div class="col-lg-9 col-sm-offset-1 blog-header-wrapper">

                <div class="box-header box">
                    <h1>{{ $title }}</h1>
                </div>

                <a href="#" class="cats-toggle">Категории <i style="margin-left:90px" class="fas fa-angle-down"></i></a>
                <ul class="menu menu-flex">
                    @foreach($cats as $cat)
                    <li class="menu-item">
                        <a href="{{ url('blog/' . $cat->slug) }}">{{$cat->name}}</a>
                    </li>
                    @endforeach
                    {{--<li class="menu-item"><a href="#">Питание</a></li>--}}
                    {{--<li class="menu-item"><a href="about.html">Полезные советы</a></li>--}}
                    {{--<li class="menu-item"><a href="#">Работа организма</a></li>--}}
                    {{--<li class="menu-item"><a href="about.html">Упражнения </a></li>--}}
                    {{--<li class="menu-item"><a href="#">Здоровый образ жизни</a></li>--}}
                </ul>

            </div>

        </div>

        <div class="row posts-index">
            @foreach($posts as $post)
            <div class="post col-xs-12 col-md-4 col-sm-offset-1">
                <h2>{{$post->title}}</h2>
                <img src="{{ $post->image }}"
                     alt="{{$post->title}}"
                     class="img-responsive">
                <div class="post-meta">
                    <a href="#" class="category-post">
                        {{ $post->category->name }}
                    </a>
                    <p class="date">
                        {{ $post->date }}
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="excerpt">
                    {{ $post->excerpt() }}
                </div>
                <a href="{{ url( 'blog/' . $post->slug ) }}" class="btn btn-primary">Читать далее <i class="arrow-alt-right"></i></a>
            </div>
            @endforeach
        </div>

        <div class="row background-light-grey">
            <div class="navigation">
                <div class="col-xs-10 col-xs-offset-1">
                    <ul class="navs">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>…</li>
                        <li><a href="#">12</a></li>
                    </ul>
                    <div class="box">
                        <li class="next"><a>Следующая<i class="next-page-btn"></i></a></li>
                    </div>
                </div>
            </div>
        </div>



        @include('layouts.footer')

    </div>

@endsection