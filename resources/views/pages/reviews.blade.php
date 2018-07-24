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
        <div class="box-header-min pink">
            <h1>Отзывы</h1>
        </div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 two-header-wrapper">
            <div class="box-header top-0">
                <h1>Отзывы</h1>
            </div>
            <ul class="menu menu-flex" role="tablist">
                <li role="presentation" class="menu-item @if($category_id == 1) active @endif">
                    <a href="{{ url('/reviews/1') }}" >Фото</a>
                </li>
                <li class="menu-item @if($category_id == 2) active @endif">
                    <a href="{{ url('/reviews/2') }}" >Отзывы</a>
                </li>
                <li class="menu-item @if($category_id == 3) active @endif">
                    <a href="{{ url('/reviews/3') }}" >Видео</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row comments-index">
        @foreach($reviews as $review)
            @if($review->category_id == $category_id)
                <div class="comment col-xs-12 col-sm-4 col-sm-offset-1">
                    <div class="comment-box">
                        @if($review->category_id == 2 OR $review->category_id == 1)
                        <div class="comment-img">
                            <img src="{{ url($review->image) }}">
                        </div>
                        @else
                            <div class="comment-video">
                                <iframe width="100%" height="315" src="{{ url($review->video) }}" frameborder="0" allow="autoplay; encrypted-media"
                                        allowfullscreen></iframe>
                            </div>
                        @endif
                        <div class="row comment-footer">
                            <div class="name-user page-photo col-xs-12 padding0">
                                @if($review->icon)
                                    <div class="user-medal">
                                        <img src="{{ url($review->icon) }}">
                                    </div>
                                @endif
                                <div class="user-name">
                                    <span>{{ $review->name }}</span>
                                </div>
                            </div>
                            @if($review->result_kg)
                                <div class="slim page-photo col-xs-12 padding0">
                                    <label>Похудела на</label>
                                    <div class="weight-box">
                                        <div class="weight">
                                            <div class="number">{{ $review->result_kg  }}</div>
                                            <div class="unit">кг</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>




    @include('layouts.footer')

</div>
@endsection