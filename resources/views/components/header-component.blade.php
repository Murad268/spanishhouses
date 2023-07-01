<header class="header">
    <div class="hamburger__menu">
        <div class="hamburger__menu__exit">
            <img src="{{asset('assets/front/icons/navbar/close 1.svg')}}" alt="">
        </div>
        <div class="navbar__languages menu__langs">
            <a class="navbar__language">EN</a>
            <a class="navbar__language active">RU</a>
            <a class="navbar__language">ES</a>
        </div>
        <div class="hamburger__menu__title">Добро пожаловать в
            Spain House
        </div>
        <div class="hamburger__menu__links">
            <ul>
                <li><a href="{{route('home')}}">Главная</a></li>
                <li><a href="{{route('newbuildings')}}">новостройки</a></li>
                <li><a href="{{route('resale')}}">вторичная недвижимость</a></li>
                <li><a href="{{route('onrent')}}">аренда</a></li>
                <li><a href="{{route('contact')}}">контакты</a></li>
            </ul>
        </div>
        <div class="navbar__btns__numbers">
            <div class="navbar__btns__numbers__number">
                <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/phone-call 2.png')}}" alt=""></div>
                <span>{{$wp}}</span>
                <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/spain (1) 1.png')}}" alt=""></div>
            </div>
            <div class="navbar__btns__numbers__number">
                <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/phone-call 2.png')}}" alt=""></div>
                <span>{{$esp}}</span>
                <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/russia 1.png')}}" alt=""></div>
            </div>
            <div class="navbar__btns__numbers__number">
                <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/whatsapp (1) 1.png')}}" alt=""></div>
                <span>{{$rus}}</span>
            </div>
        </div>
        <div class="footer__social">
            <a href="{{$insta}}"><img src="{{asset('assets/front/icons/navbar/instagram (1) 1.svg')}}" alt=""></a><a href="{{$fb}}"><img src="{{asset('assets/front/icons/navbar/facebook (3) 1.png')}}" alt=""></a>
        </div>
    </div>
    <div class="header__overlay">
    </div>
    <nav class="navbar">
        <div class="container">
            <div class="navbar__wrapper">
                <a href="{{route('home')}}" class="navbar__logo">
                    <img src="{{asset('assets/front/icons/navbar/'.$logo)}}" alt="">
                </a>
                <div class="navbar__btns">
                    <div class="navbar__btns__numbers main__numbers">
                        <div class="navbar__btns__numbers__number">
                            <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/whatsapp (1) 1.png')}}" alt=""></div>
                            <span>{{$wp}}</span>
                        </div>
                        <div class="navbar__btns__numbers__number">
                            <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/phone-call 2.png')}}" alt=""></div>
                            <span>{{$esp}}</span>
                            <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/spain (1) 1.png')}}" alt=""></div>
                        </div>
                        <div class="navbar__btns__numbers__number">
                            <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/phone-call 2.png')}}" alt=""></div>
                            <span>{{$rus}}</span>
                            <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/russia 1.png')}}" alt=""></div>
                        </div>
                    </div>
                    <div class="navbar__languages main__langs">
                        <a class="navbar__language">EN</a>
                        <a class="navbar__language active">RU</a>
                        <a class="navbar__language">ES</a>
                    </div>
                    <div class="navbar__hamburger">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="header__body">
        <h1>@yield('header__title')</h1>
        <div class="header__body__subtitle">
            @yield('header__subtitle')
        </div>
    </div>
</header>
