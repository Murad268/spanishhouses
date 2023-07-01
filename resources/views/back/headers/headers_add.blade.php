@extends('back.layouts.main')
@section('title', 'headers')
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
    @if(session()->has('error__message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form method="post" action="{{route('admin.headers.create')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label " class="form-label">Img</label>
            <input type="file" name="headers_photo" class="form-control" >
            @error('headers_photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label " class="form-label">name</label>
            <input type="text" name="headers_name" class="form-control" >
            @error('headers_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label " class="form-label">Title</label>
            <input type="text" name="headers_title" class="form-control" >
            @error('headers_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label " class="form-label">Subtitle</label>
            <input type="text" name="header_subtitle" class="form-control" >
            @error('header_subtitle')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

</div>
@endsection
