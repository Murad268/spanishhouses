@extends('back.layouts.main')
@section('title', 'products')
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
    <a href="{{route('admin.products.add')}}" class="btn btn-dark mb-5">new product</a>
    @if(count($products) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">slug</th>
                <th scope="col">main img</th>
                <th scope="col">is new building</th>
                <th scope="col">artikul</th>
                <th scope="col">price</th>
                <th scope="col">bedrooms</th>
                <th scope="col">bathrooms</th>
                <th scope="col">car parks</th>
                <th scope="col">garden</th>
                <th scope="col">pool</th>
                <th scope="col">square</th>
                <th scope="col">plot</th>
                <th scope="col">building type</th>
                <th scope="col">district</th>

                <th scope="col">status</th>
                <th scope="col">controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{mb_strlen($product->products_title)>20?mb_substr($product->products_title, 0, 20).'...':$product->products_title}}</td>
                <td>{{mb_strlen($product->products_slug)>20?mb_substr($product->products_slug, 0, 20).'...':$product->products_slug}}</td>
                <td class="img__col">
                    <a href="{{ route('admin.products_images.imagesId', ['id' => $product->id]) }}">
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
                        "əsas şəkli təyin elə/ dəyiş"
                        @endunless
                    </a>
                </td>

                <td>{{$product->is_newbuilding}}</td>
                <td>{{$product->artikul}}</td>
                <td>{{$product->products_price}}</td>
                <td>{{$product->bedrooms}}</td>
                <td>{{$product->bathrooms}}</td>
                <td>
                    @if($product->car_parks)
                    <span style="color: green">has</span>
                    @else
                    <span style="color: red">hasn'nt</span>
                    @endif
                </td>
                <td>
                    @if($product->garden)
                    <span style="color: green">has</span>
                    @else
                    <span style="color: red">has'nt</span>
                    @endif
                </td>
                <td>
                    @if($product->pool)
                    <span style="color: green">has</span>
                    @else
                    <span style="color: red">has'nt</span>
                    @endif
                </td>
                <td>{{$product->square}} м2</td>
                <td>{{$product->plot}} м2</td>
                <td>{{$product->type->title}}</td>
                <td>{{$product->district->name}}</td>
                <td>
                    @if($product->products_status)
                    <span style="color: green">active</span>
                    @else
                    <span style="color: red">passive</span>
                    @endif
                </td>
                <td style="display: flex; column-gap: 10px">
                    <a href="{{route('admin.products.change', ['id'=>$product->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('məhsulu silmək istədiyinizdən əminsinizmi?')" href="{{route('admin.products.delete', ['id'=>$product->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
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
    <div>hələ ki, heç bir məhsul daxil edilməyib</div>
    @endif
</div>
@endsection
