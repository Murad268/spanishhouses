@extends('front.layouts.main')
@section('page__title')
    Контакты
@endsection
@section('bg')
<style>
    header {
        padding: 0 !important;
        padding-top: 80px !important;
    }
</style>
@endsection
@section("content")
<section class="about">

    <div class="container">
        <div class="about__wrapper">
            <div class="about__desc">
                <div class="title">{{$founder->nmae}}</div>
                <div class="desc">
                    {{$founder->desc}}
                </div>
                <div class="desc__footer">
                    {{$founder->footer}}
                </div>
            </div>
            <div class="about__image">
                <div class="image__stand">
                    <div class="image">
                        <img src="{{asset('assets/front/images/about/IMG_4948 3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactPage">
    <div class="container">
        <div class="contactPage__box">
            <div class="contactPage__box__body">
                <div class="title">Нужна помощь?</div>
                <div class="contactPage__box__body__subtitle">Заполните форму ниже или позвоните мне</div>
                <div class="navbar__btns__numbers main__numbers">
                    <div class="navbar__btns__numbers__number">
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/whatsapp (1) 1.png')}}" alt=""></div>
                        <span>{{$contacts->whatsapp_number}}</span>
                    </div>
                    <div class="navbar__btns__numbers__number">
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/phone-call 2.png')}}" alt=""></div>
                        <span>{{$contacts->spanish_number}}</span>
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/spain (1) 1.png')}}" alt=""></div>
                    </div>
                    <div class="navbar__btns__numbers__number">
                        <div class="navbar__btns__numbers__number__img"><img src="{{asset('assets/front/icons/navbar/phone-call 2.png')}}" alt=""></div>
                        <span>{{$contacts->russian_number}}</span>
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
