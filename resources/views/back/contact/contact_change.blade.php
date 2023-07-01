@extends('back.layouts.main')
@section('title', 'contacts')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(session()->has('error__message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form method="post" action="{{route('admin.contact.update', ['id' => $contact->id])}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">russian number</label>
            <input name="russian_number" value="{{old('russian_number', $contact->russian_number)}}" type="tel" class="form-control" ">
            @error('russian_number')
            <div class=" alert alert-danger">{{ $message }}
        </div>
        @enderror
</div>

<div class="mb-3">
    <label class="form-label">spanish number</label>
    <input value="{{old('spanish_number', $contact->spanish_number)}}" name="spanish_number" type="tel" class="form-control" ">
            @error('spanish_number')
            <div class=" alert alert-danger">{{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
    <label class="form-label">wp number</label>
    <input value="{{old('whatsapp_number', $contact->whatsapp_number)}}" name="whatsapp_number" type="tel" class="form-control" ">
            @error('whatsapp_number')
            <div class=" alert alert-danger">{{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
    <label class="form-label">insta link</label>
    <input value="{{old('instagram_link', $contact->instagram_link)}}" name="instagram_link" type="tel" class="form-control" ">
            @error('instagram_link')
            <div class=" alert alert-danger">{{ $message }}
</div>
@enderror
</div>

<div class="mb-3">
    <label class="form-label">facebook link</label>
    <input value="{{old('facebook_link', $contact->facebook_link)}}" name="facebook_link" type="tel" class="form-control" ">
            @error('facebook_link')
            <div class=" alert alert-danger">{{ $message }}
</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection
