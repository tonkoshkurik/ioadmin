<header>
    <div class="logo box">
        <a href="{{ url('/') }}">
{{--            <img src="{{ asset("img/logo.png") }}" alt="Igor Obuhovsky logo">--}}
            <i class="logo-img"></i>
        </a>
    </div>
    <nav class="menu-overlay">
        <a href="#" class="toggleNav"></a>
        <ul class="menu box flex-menu">
            @php
                $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            @endphp
            @foreach($menu as $menuitem)
                <li class="menu-item">
                    <a href="{{ $menuitem->url() }}" @if($actual_link === $menuitem->url()) style="font-weight: 600" @endif>
                        {{$menuitem->name}}
                    </a>
                </li>
            @endforeach
        </ul>
        <a href="#" class="close" style="font-size:2em;"><i class="fas fa-times"></i></a>
    </nav>
</header>