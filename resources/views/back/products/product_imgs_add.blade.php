@extends('back.layouts.main')
@section('title', 'product images')
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
    @if(session()->has('error__message'))
    <div class="alert alert-success">
        {{ session('error__message') }}
    </div>
    @endif
    <form method="post" action="{{route('admin.products_images.image_create', ['id' => $id])}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">img</label>
            <input multiple="multiple" name="product_image[]" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if(session()->has('errorImg'))
            <div class="alert alert-success">
                {{ session('errorImg') }}
            </div>
            @endif
        </div>



        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
