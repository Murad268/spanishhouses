@extends('front.layouts.main')
@section('page__title')
    product
@endsection
@section('bg')
<style>
    header {
        padding: 0 !important;
        padding-top: 80px !important;
        background: none;
    }
</style>
@endsection
@section('content')
<div class="product">
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
        <div style="margin-top: 40px" class="product__wrapper">
            <div class="product__slider">
                <div class="product__slider__main">
                    <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="">
                </div>
                <div class="product__slider__mini">
                    <div>
                        <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="" class="product__slider__mini__image">
                    </div>
                    <div>
                        <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="" class="product__slider__mini__image">
                    </div>
                    <div>
                        <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="" class="product__slider__mini__image">
                    </div>
                    <div>
                        <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="" class="product__slider__mini__image">
                    </div>
                    <div>
                        <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="" class="product__slider__mini__image">
                    </div>
                    <div>
                        <img src="{{asset('assets/front/images/newbuildings/Corner view 1.png')}}" alt="" class="product__slider__mini__image">
                    </div>
                </div>
            </div>
            <div class="product__desc">
                <div class="product__desc__box">
                    <div class="product__desc__box__top">
                        € 4,192,000
                    </div>

                    <div class="product__desc__box__body">
                        <div class="product__desc__box__body__el">
                            <strong>Артикул</strong>
                            <span>R3304774</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Спальни</strong>
                            <span>2</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Ванные</strong>
                            <span>2</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Aвтостоянка</strong>
                            <span>Да</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Сад</strong>
                            <span>Да</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Бассейн</strong>
                            <span>Да</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Площадь</strong>
                            <span>75 m2</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Терраса</strong>
                            <span>25 m2</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Участок</strong>
                            <span>0 m2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__description">
            <strong>
                описание
            </strong>
            <p>
                Новая разработка: цены от € & nbsp; 386 000 до € & nbsp; 578 000. [Кровати: 2–2] [Ванны: 2–3] [Застроенная площадь: 80,00 м2 - 104,00 м2] Дом, в котором
                вы всегда хотели жить, предлагая лучшее из всего. Это развитие является частью прекрасно созданного жилого района с полностью функционирующими
                общими частями. Он состоит из 32 домов с двумя и тремя спальнями, включая пентхаусы и просторные сады, общественные бассейны и поля для гольфа,
                расположенные в непосредственной близости от комплекса. Сделайте большую часть просторных, фантастических мест общего пользования с садами
                для взрослых. и детские бассейны с деревянными зонтиками, детская игровая площадка, корты для паддл-тенниса и тренажерный зал. Михас - город,
                расположенный в провинции Малага, в самом сердце Коста-дель-Соль, со старым кварталом, в котором есть все очарование традиционной андалузской
                деревни. Там вы сможете насладиться привлекательными произведениями архитектуры, такими как часовня Вирхен-де-ла-Пенья, городские стены с
                руинами замка и бесконечный список других достопримечательностей. Но не только это. Михас предлагает все, что вам может понадобиться,
                потому что, помимо того, что он расположен у подножия холмов Михас, он также имеет невероятные пляжи и предлагает один из лучших выборов
                полей для гольфа в этом районе. Это идеальное место для любителей этого вида спорта.
            </p>
        </div>
    </div>
</div>
<section class="contactPage">
    <div class="container">
        <div class="contactPage__box">
            <div class="contactPage__box__body">
                <div class="title">Заинтересовал объект?</div>
                <div class="contactPage__box__body__subtitle">Для получения дополнительной информации об этом объекте, пожалуйста,
                    заполните форму ниже или позвоните нам.</div>
                <div class="navbar__btns__numbers main__numbers">
                    <div class="navbar__btns__numbers__number">
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/whatsapp (1) 1.png')}}" alt=""></div>
                        <span>+79 951 120 365</span>
                    </div>
                    <div class="navbar__btns__numbers__number">
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/phone-call 2.png')}}" alt=""></div>
                        <span>+34 951 120 365</span>
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/spain (1) 1.png')}}" alt=""></div>
                    </div>
                    <div class="navbar__btns__numbers__number">
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/phone-call 2.png')}}" alt=""></div>
                        <span>+79 951 120 365</span>
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/russia 1.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="contactPage__form">
                    <form action="">
                        <input placeholder="Имя*" type="text"><input placeholder="Email адрес*" type="email"><input placeholder="Номер телефона" type="tel">
                        <textarea placeholder="Сооющение*" name="" id="" cols="30" rows="10"></textarea>
                        <div class="contactPage__form__check">
                            <input type="checkbox" name="" id="contactPage__form__check">
                            <label for="contactPage__form__check">я принимаю <a href="">политику конфиденциальности</a></label>
                        </div>
                        <button class="more">отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
