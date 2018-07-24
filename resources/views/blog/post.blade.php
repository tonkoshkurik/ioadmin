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
          <p style="display: none; text-align: left;">
            <span style="font-size: 12px; font-family: OpenSans; color: rgb(216, 209, 217);">Ru </span>
            <span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);"> En </span>
            <span style="font-size: 12px; font-family: OpenSans; color: rgb(85, 77, 87);">Uk</span>
          </p>
        </div>
        <div class="box lang"></div>
      </div>
    </div>

  @include('flash::message')

    <div class="row two-header">
        <div class="box-header-min blog">
            <div class="menu-item">
              <h1>{{ $post->title }}</h1>
            </div>
        </div>
    </div>

    <div class="row blog-post-header hidden-xs">
      <div class="col-sm-7 col-md-8 col-md-offset-1">
        <h1>{{ $post->title }}</h1>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="{{ url('blog') }}" class="back">
          <i class="last-page-btn left"></i>
          Назад к статьям
        </a>
      </div>
    </div>
    <div class="row quote-row quote-row-blog col-sm-offset-1 hidden-sm hidden-md hidden-lg">
      <div class="col-xs-12">
        <a href="{{ url('blog') }}" class="back">
          <i class="last-page-btn left"></i>
        </a>
        <span class="pull-right" style="color:#000">Назад к статьям</span>
      </div>
    </div>

    <div class="row post">
      @if($post->image)  
        <img src="{{ url($post->image) }}" alt="{{ $post->title }}" class="img-responsive post-thumb">
      @endif
      <div class="col-xs-12">
        <div class="post-container">
          <div class="meta">
            <a href="#" class="category-post">{{ $post->category->name }}</a>
            <p class="pull-right date">{{ $post->date->format('y/m/d') }}</p>
          </div>
          <div class="content">
            {!! $post->content !!}     
          </div>
          <div class="comments">

            <h2>Комментарии
              <span class="comments-count pull-right">{{ $post->comments()->count() }}</span>
            </h2>

            <ul id="comments" class="list-unstyled">
              @foreach ($post->comments as $comment)
              <li class="comment" >
                <div  class="comment-body clearfix">
                  <div class="comment-meta">
                    <span class="comment-author-link">{{ $comment->name }}</span>
                    <span class="comment-date pull-right">{{ $comment->created_at }}</span>
                  </div>
                  <div class="comment-content clearfix">
                    <p>
                      {{$comment->content}}
                    </p>
                  </div>
                  <!-- <div class="comment-reply-link"><a rel='nofollow' class='comment-reply-link' href='https://vmequipment.ru/predlagaet-veterinaram-xirurgicheskie-stoly-sozdannye-specialno-dlya-raboty-s-zhivotnymi/?replytocom=7#respond' onclick='return addComment.moveForm( "comment-7", "7", "respond", "1" )' aria-label='Комментарий к записи Dan'>Ответить</a></div> -->
                </div>
              </li>
              <br>
              @endforeach
            </ul>
              
            <form method="post" action={{ url('/blog/'. $post->id .'/comment') }} id="comment-form" class="fl-comment-form">
              @csrf
              <div class="col-xs-12 col-md-6">
                <label for="author">Введите Имя</label>
                <input type="text" id="author" name="name" class="form-control" value="{{ old('name') }}" tabindex="1" aria-required="true" />
                <br />
              </div>
              <div class="col-xs-12 col-md-6">
                <label for="email">Введите email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}" tabindex="2" aria-required="true" />
                <br />
              </div>
              <div class="col-xs-12">
                <label for="comment">Комментарий</label>
                <textarea name="content" id="comment" class="form-control" cols="60" rows="8" >{{ old('content') }}</textarea>
              </div>
              <div class="hidden">
                <input type="text" name="text" >
              </div>
              <div class="col-xs-12 form-submit">
                <input name="submit" type="submit" id="fl-comment-form-submit" class="btn btn-primary" value="Отправить комментарий" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    @include('layouts.footer')

  </div>
@endsection

@section('js')
<script>
$('div.alert').delay(3000).fadeOut(350);
$('#flash-overlay-modal').modal();

</script>
@endsection