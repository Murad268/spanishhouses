@extends('front.layouts.main')
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
        background: url("{{asset('assets/front/images/recomended/006_PEDROJAEN_DJI_0815 1.png')}}") center center/cover no-repeat
    }
</style>
@endsection
@section('content')
<section class="newbuildings">
    <div class="container">
        @if(count($newsBuildings)>0)
        <div class="newbuildings__wrapper">
            @foreach($newsBuildings as $newsBuilding)
            <a href="{{route('onebuilding', ['id' => $newsBuilding->id])}}" class="newbuildings__item">
                <div class="newbuildings__item__img">
                    <img src="{{asset('assets/front/images/newbuildings/'.$newsBuilding->img)}}" alt="">
                </div>
                <div class="cart_item__box">
                    <div class="cart__item__body">
                        <div class="cart__main__title">
                            {{mb_strlen($newsBuilding->title)>20?mb_substr($newsBuilding->title, 0, 20).'...':$newsBuilding->title}}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @if ($newsBuildings->lastPage() > 1)
        <div class="pagination">
            @if($newsBuildings->currentPage() > 1)
            <a class="btn btn-primary" href="{{ $newsBuildings->previousPageUrl() }}">Previous</a>
            @endif

            @if($newsBuildings->hasMorePages())
            <a class="btn btn-primary" href="{{ $newsBuildings->nextPageUrl() }}">Next</a>
            @endif
        </div>
        @endif
        @else
        <div>rayon tapılmadı</div>
        @endif
    </div>
</section>

@endsection
