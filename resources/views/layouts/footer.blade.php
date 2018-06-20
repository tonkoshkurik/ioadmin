
<footer class="row" style="position: relative;">
    <div class="col-md-11 col-md-offset-1">
        <!-- Here is flex container should start -->
        <div class="logo box">
            {{--  Copyright, footer logo --}}
            <img src="{{ asset('img/footer-logo.png') }}" alt="Igor Obuhovsky logo">
            <p>© 2017 Copyright</p>
        </div>
        <ul class="menu box">
            {{--Menu--}}
            @foreach($menu as $menuitem)
                <li class="menu-item">
                    <a href="{{ $menuitem->url() }}">
                        {{$menuitem->name}}
                    </a>
                </li>
            @endforeach
        </ul>
        {{-- Contact  --}}
        <div class="box phone">
            <p><i class="fas fa-phone"></i> 044 455 67 88</p>
            <p><i class="fas fa-envelope"></i> info@zhirkiller.com</p>
        </div>

        <div class="box social">
            {{--
              Settings:
               social buttons
                - facebook
                - instagram
                - youtube
            --}}
            <div style="font-size:23px; color:#695d6c;">
                <a href="{{ url(\App\Helpers::setting('facebook')) }}" target="_blank" style="font-size:23px; color:#695d6c;">
                    <i class="fab fa-facebook-f" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i>
                </a>
                <a href="{{ url( \App\Helpers::setting('instagram') ) }}" target="_blank"  style="font-size:23px; color:#695d6c;">
                    <i class="fab fa-instagram" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i>
                </a>
                <a href="{{url( \App\Helpers::setting('youtube')) }}" target="_blank" style="font-size:23px; color:#695d6c;">
                    <i class="fab fa-youtube" data-fa-transform="shrink-3.5" data-fa-mask="fas fa-circle"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
