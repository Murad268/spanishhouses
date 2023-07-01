@extends("front.layouts.main")
@section('page_title', $header->title)

@section("header__title")
{{$header->title}}
@endsection
@section("header__subtitle")
{{$header->subtitle}}
@endsection
@section("bg")
<style>
    header {
        background-size: cover;
        background: url("{{asset('assets/front/images/header/'.$header->img)}}") center center/cover no-repeat
    }
</style>
@endsection
@section("content")
<section class="about">
    <div class="container">
        <div class="about__wrapper">
            <div class="about__desc">
                <div class="title">{{$about->title}}</div>
                <div class="desc">
                    {{$about->desc}}
                </div>
                <div class="desc__footer">
                    {{$about->footer}}
                </div>
            </div>
            <div class="about__image">
                <div class="image__stand">
                    <div class="image">
                        <img src="{{asset('assets/front/images/about/'.$about->img)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reccomended">
    <div class="container">
        <div class="title">Рекомендуемые объекты</div>
        <div class="desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt
            congue ligula in rutrum. Morbi ne lacus condimentum, hendrerit mi eu,
        </div>
        <div class="reccomended__wrapper">
            @foreach($products as $product)

            <div class="reccomended__item">
                <div class="reccomended__item__img">
                    @php
                    $isMainExists = false;
                    @endphp

                    @foreach($product->productsImgs as $img)
                    @if($img->is_main == 1)
                    <img src="{{ asset('assets/front/images/products/'.$img->product_image) }}" alt="">
                    @php
                    $isMainExists = true; // is_main = 1 olan kaydın olduğunu işaretliyoruz
                    @endphp
                    @break
                    @endif
                    @endforeach

                    @unless($isMainExists)
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFeJCZZRqGCpPzFNOiH6W1duWFyKbREFkJ-D6_Mjfcuw&s" alt="">
                    @endunless
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__title">{{$product->district->name}} - {{$product->artikul}}</div>
                        <div class="cart__subtitle">{{mb_strlen($product->products_title)>20?mb_substr($product->products_title, 0, 20).'...':$product->products_title}}</div>
                        <div class="cart__price">€{{$product->products_price}}</div>
                        <div class="cart__foot_top">
                            <span>Площадь: {{$product->square}} м2</span><span>Спальни: {{$product->bedrooms}}</span>
                        </div>

                    </div>
                </div>

            </div>
            @endforeach


        </div>
        <a href="" class="more">весь каталог</a>
    </div>
</section>
<div class="hr container"></div>
<section class="instagram">
    <div class="container">
        <div class="instagram__icon">
            <img src="{{asset('assets/front/icons/instagram/instagram (2) 1.png')}}" alt="">
        </div>
        <div class="title">Instagram</div>
        <a href="" class="link">@realestate_spain_ekaterina</a>

        <div class="instagram__wrapper">
            @foreach($photos as $photo)
            <a href="{{$photo->link}}" class="instagram__photo">
                <img src="{{asset('assets/front/images/instagram/'.$photo->img)}}" alt="">
            </a>
            @endforeach

        </div>
        <a href="" class="more">смотреть больше</a>
    </div>
</section>
<div class="hr container"></div>

<section class="founder">
    <div class="container">
        <div class="founder__wrapper">
            <div class="founder__image">
                <div class="image__stand">
                    <div class="image">
                        <img src="{{asset('assets/front/images/founder/'.$founder->img)}}" alt="">
                    </div>
                </div>
            </div>

            <div class="founder__desc">
                <div class="title">
                    {{$founder->nmae}}
                </div>
                <div class="subtext">
                    {{$founder->position}}
                </div>
                <div class="desc">
                    {{$founder->desc}}
                </div>
                <div class="subfooter">
                    LanguageS: {{$founder->languages}}
                </div>

                <a href="{{route('contact')}}" class="btn__unborder">
                    контакты
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
