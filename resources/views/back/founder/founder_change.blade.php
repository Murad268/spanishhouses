@extends('back.layouts.main')
@section('title', 'founder')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5" ">
@if(session()->has('error__message'))
    <div class=" alert alert-success">
    {{ session('message') }}
</div>
@endif
<form enctype="multipart/form-data" action="{{route('admin.founder.create')}}" method="post">
    @csrf
    <div class="mb-3">
        <label " class="form-label">img</label>
        <input type="file" name="founder_photo" class="form-control" >
        @error('founder_photo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label " class="form-label">name</label>
        <input value="{{old('founder_name', $founder->nmae)}}" type="text" name="founder_name" class="form-control" >
        @error('founder_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label " class="form-label">position</label>
        <input value="{{old('founder_position', $founder->position)}}" type="text" name="founder_position" class="form-control" >
        @error('founder_position')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label " class="form-label">desc</label>
        <input value="{{old('founder_desc', $founder->desc)}}" type="text" name="founder_desc" class="form-control" >
        @error('founder_desc')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label " class="form-label">languages</label>
        <input value="{{old('founder_languages', $founder->languages)}}" type="text" name="founder_languages" class="form-control" >
        @error('founder_languages')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection
