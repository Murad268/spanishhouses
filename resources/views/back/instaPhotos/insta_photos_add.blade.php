@extends('back.layouts.main')
@section('title', 'insta photos')
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
    @if(session()->has('error__message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form method="post" action="{{route('admin.instaphotos.create')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label " class="form-label">Img</label>
            <input type="file" name="photo" class="form-control" >
        </div>
        @error('photo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label " class="form-label">Link</label>
            <input value="{{ old('link') }}" type="text" name="link" class="form-control" >
        </div>
        @error('link')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
