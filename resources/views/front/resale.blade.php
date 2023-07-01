@extends("front.layouts.main")
@section('page_title', $header->title)

@section("header__title", $header->title)

@section('header__subtitle', $header->subtitle)

@section('bg')
<style>
    header {
        background-size: cover;
        background: url("{{'assets/front/images/onebuilding/Corner\ view\ 1\ \(1\).png'}}") center center/cover no-repeat
    }
</style>

@endsection


@section('content')
<section class="onenewbuilding">
    <div class="container">
        @include('front.layouts.inputs')
        @if(count($products)>0)
        <div class="onenewbuilding__wrapper">
            @foreach ($products as $product)
            <a href="{{route('product', ['id' => $product->id])}}" class="newbuildings__item">
                <div class="newbuildings__item__img">
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
                        <div class="cart__price">€{{number_format($product->products_price, 0, ',', '.')}}</div>
                        <div class="cart__foot_top">
                            <span>Площадь: {{$product->square}} м2</span><span>Спальни: {{$product->bedrooms}}</span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
        @if ($products->lastPage() > 1)
        <div class="pagination">
            @if($products->currentPage() > 1)
            <a class="btn btn-primary" href="{{ $products->previousPageUrl() }}">Previous</a>
            @endif

            @if($products->hasMorePages())
            <a class="btn btn-primary" href="{{ $products->nextPageUrl() }}">Next</a>
            @endif
        </div>
        @endif
        @else

        <div class="non_tov">продукты не найдены</div>
        @endif
    </div>
</section>
@endsection
