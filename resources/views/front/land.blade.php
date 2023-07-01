@extends('front.layouts.main')
@section('page__title')
    Земельные
        участки
@endsection
@section("header__title")
    Земельные
    участки
@endsection
@section("header__subtitle")
    РАССКАЖИТЕ НАМ, ЧТО ТАКОЕ ЖИЗНЬ ВАШЕЙ МЕЧТЫ,
    И МЫ НАЙДЕМ ЕЕ ДЛЯ ВАС
@endsection
@section('bg')
<style>
    header {
        background-size: cover;
        background: url("{{asset('assets/front/images/onebuilding/Corner\ view\ 1\ \(1\).png')}}") center center/cover no-repeat
    }
</style>
@endsection

@section('content')
<section class="onenewbuilding">
    <div class="container">
        <div class="page__inputs page__inputs__LOP">
            <form action="">
                <input type="hidden" class="page__inputs__input" name="">
                <div class="artikul">
                    <div class="search__icon">
                        <img src="{{asset('assets/front/icons/pages__inputs/searching-magnifying-glass 1.svg')}}" alt="">
                    </div>
                    <input placeholder="Артикул" type="text">
                </div>
                <div class="type__building type__building__street">
                    <div class="type__building__main type__building__street__main">
                        <span>Тип недвижимости</span>
                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    </div>
                    <div class="type__building__bottom">
                        <ul>
                            <li>Все типы</li>
                            <li>Дом</li>
                            <li>Таунхаус</li>
                            <li>Квартира</li>
                        </ul>
                    </div>
                </div>
                <div class="type__building typpage__inputs__box">
                    <div class="type__building__main typpage__inputs__box__main">
                        <span>Район</span>
                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    </div>
                    <div class="type__building__bottom">
                        <ul>
                            <li>Все типы</li>
                            <li>Дом</li>
                            <li>Таунхаус</li>
                            <li>Квартира</li>
                        </ul>
                    </div>
                </div>
                <button>поиск</button>
            </form>
        </div>
        <div class="onenewbuilding__wrapper">
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>
            <div class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">Fuengirola - R3304693</div>
                        <div class="cart__subtitle">Элитная вилла в стиле модерн</div>
                        <div class="cart__price">€4,195,000</div>
                        <div class="cart__foot_top">
                            <span>Площадь: 300 м2</span><span>Спальни: 5</span>
                        </div>
                        <div class="cart__foot_bottom">Терраса: 25м2</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
