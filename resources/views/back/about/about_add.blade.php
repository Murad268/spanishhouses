@extends('back.layouts.main')
@section('title', 'about')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(session()->has('error__message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form action="{{route('admin.about.create')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mb-3">
            <label " class="form-label">Img</label>
            <input type="file" name="about_photo" class="form-control" >
            @error('about_photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label " class="form-label">Title</label>
            <input value="{{old('about_title')}}" type="text" name="about_title" class="form-control" >
            @error('about_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label " class="form-label">Footer</label>
            <input value="{{old('about_footer')}}" type="text" name="about_footer" class="form-control" >

            @error('about_footer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label " class="form-label">desc</label>
            <textarea name="about_desc" style="height: 500px" class="form-control">{{old('about_desc')}}</textarea>
            @error('about_desc')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">add</button>
    </form>
</div>
@endsection
