<header>
    <div class="logo box">
        <a href="{{ url('/') }}">
            <img src="img/logo.png" alt="Igor Obuhovsky logo">
        </a>
    </div>
    <nav class="menu-overlay">
        <a href="#" class="toggleNav"></a>
        <ul class="menu box flex-menu">
            @foreach($menu as $menuitem)
                <li class="menu-item">
                    <a href="{{ $menuitem->url() }}">
                        {{$menuitem->name}}
                    </a>
                </li>
            @endforeach
        </ul>
        <a href="#" class="close" style="font-size:2em;"><i class="fas fa-times"></i></a>
    </nav>
</header>