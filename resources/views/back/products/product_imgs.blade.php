@extends('back.layouts.main')
@section('title', 'product images')
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
    <a href="{{route('admin.products_images.image_add', ['id' => $id])}}" class="btn btn-dark mb-5">new product img</a>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($imgs)>0)
    <div class="products__images__wrapper">
        @if(isset($id))
        <div class="product">
            <div class="product_title">{{$product->products_title}}</div>
            <div class="product__wrapper">
                @foreach($imgs as $img)
                <div class="products__images__row {{$img->is_main?'active':''}}">
                    <div class="products__images__row__img">
                        <a target="_blank" href="{{asset('assets/front/images/products/'.$img->product_image)}}"><img src="{{asset('assets/front/images/products/'.$img->product_image)}}" alt=""></a>
                    </div>
                    <div class="products__images__row__to__main">
                        <a href="{{route('admin.products_images.changeMain', ['product_id' => $img->product_id, 'id' => $img->id])}}">set as main photo</a>
                        <a onclick="return confirm('şəkli silmək istədiyinizdən əminsiniz?')" href="{{route('admin.products_images.delete', ['product_id' => $img->product_id, 'id' => $img->id])}}" style="color: red" href="">delete photo</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        @endif
    </div>
    @if ($imgs->lastPage() > 1)
    <div class="pagination">
        @if($imgs->currentPage() > 1)
        <a class="btn btn-primary" href="{{ $imgs->previousPageUrl() }}">Previous</a>
        @endif

        @if($imgs->hasMorePages())
        <a class="btn btn-primary" href="{{ $imgs->nextPageUrl() }}">Next</a>
        @endif
    </div>
    @endif
    @else
    <div>hələ ki, heç bir şəkil yüklənməyib</div>
    @endif
</div>
@endsection
