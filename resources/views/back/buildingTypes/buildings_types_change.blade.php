@extends('back.layouts.main')
@section('title', 'building types')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(session()->has('error__message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form action="{{route('admin.buildingtypes.update', ['id' => $id])}}" method="post">
        @csrf
        <div class="mb-3">
            <label " class="form-label">title</label>
            <input value="{{old('type_name', $buildingTypes->title)}}" name="type_name" type="text" class="form-control" >
        </div>
        @error('type_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">

            <div class="mb-5 form-check">
                <input {{  $buildingTypes->status == 1 ? "checked": "" }} value="1" name="type_status" class="form-check-input" type="checkbox" value="">
                <label class="form-check-label" for="flexCheckDefault">
                    status is active
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
