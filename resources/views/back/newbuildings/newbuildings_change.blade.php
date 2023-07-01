@extends('back.layouts.main')
@section('title', 'new buildings')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(session()->has('error__message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form method="post" enctype="multipart/form-data" action="{{route('admin.newbuildings.update', ['id' => $id])}}">
        @csrf
        <div class="mb-3">
            <label  class="form-label">img</label>
            <input type="file" name="newbuildings_photo" class="form-control"">
        </div>
        @error('newbuildings_photo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label  class="form-label">title</label>
            <input value="{{old('newbuildings_title', $building->title)}}" type="text" name="newbuildings_title" class="form-control"">
        </div>
        @error('newbuildings_title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <div class="mb-5 form-check">
                <input {{ $building->status == 1 ? "checked" : "" }} value="1" name="newbuildings_status" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    status is active
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Change</button>
    </form>

</div>
@endsection
