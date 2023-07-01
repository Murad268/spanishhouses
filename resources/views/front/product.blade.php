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
    @include('front.layouts.inputs')
        <div style="margin-top: 40px" class="product__wrapper">
            <div class="product__slider">
                <div class="product__slider__main">
                    @php
                    $isMainExists = false;
                    @endphp

                    @foreach($product->productsImgs as $img)
                    @if($img->is_main == 1)
                    <a href="{{asset('assets/front/images/products/'.$img->product_image)}}"><img class="main_img" src="{{asset('assets/front/images/products/'.$img->product_image)}}" alt=""></a>
                    @php
                    $isMainExists = true; // is_main = 1 olan kaydın olduğunu işaretliyoruz
                    @endphp
                    @break
                    @endif
                    @endforeach

                    @unless($isMainExists)
                    <img class="main_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFeJCZZRqGCpPzFNOiH6W1duWFyKbREFkJ-D6_Mjfcuw&s" alt="">
                    @endunless
                </div>
                <div class="product__slider__mini">
                    @foreach($product->productsImgs as $img)
                    <div>
                        <img src="{{asset('assets/front/images/products/'.$img->product_image)}}" alt="" class="product__slider__mini__image">
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="product__desc">
                <div class="product__desc__box">
                    <div class="product__desc__box__top">
                        € {{$product->products_price}}
                    </div>

                    <div class="product__desc__box__body">
                        <div class="product__desc__box__body__el">
                            <strong>Артикул</strong>
                            <span>{{$product->artikul}}</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Спальни</strong>
                            <span>{{$product->bedrooms}}</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Ванные</strong>
                            <span>{{$product->bathrooms}}</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Aвтостоянка</strong>
                            <span>
                                @if($product->car_parks)
                                Да
                                @else
                                нет
                                @endif
                            </span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Сад</strong>
                            <span>
                                @if($product->garden)
                                Да
                                @else
                                нет
                                @endif
                            </span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Бассейн</strong>
                            <span>
                                @if($product->pool)
                                Да
                                @else
                                нет
                                @endif
                            </span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Площадь</strong>
                            <span>{{$product->square}} m2</span>
                        </div>
                        <div class="product__desc__box__body__el">
                            <strong>Участок</strong>
                            <span>{{$product->plot}} m2</span>
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
                {{$product->products_desc}}
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
<script>
    document.querySelectorAll('.product__slider__mini__image').forEach(img => {
        img.addEventListener('click', (e) => {
            document.querySelector('.product__slider__main img').src = e.target.src
        })
    })
</script>
@endsection
