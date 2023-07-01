@extends('back.layouts.main')
@section('title', 'contacts')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(!count($contacts)>0)
    <a href="{{route('admin.contact.add')}}" class="btn btn-dark mb-5">new contacts</a>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($contacts)>0)
    <table style="width: max-content;" class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">russian number</th>
                <th scope="col">spanish number</th>
                <th scope="col">whatsapp number</th>
                <th>instagram link</th>
                <th>facebook link</th>
                <th>controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <th scope="row">{{$contact->id}}</th>
                <td style="width: max-content;">{{$contact->russian_number}}</td>
                <td>{{$contact->spanish_number}}</td>
                <td>{{$contact->whatsapp_number}}</td>
                <td>{{mb_strlen($contact->instagram_link) > 20 ? mb_substr($contact->instagram_link, 1, 20).'...':$contact->instagram_link}}</td>
                <td>{{mb_strlen($contact->facebook_link) > 20 ? mb_substr($contact->facebook_link, 1, 20).'...':$contact->facebook_link}}</td>
                <td style="display: flex; column-gap: 5px">
                    <a href="{{route('admin.contact.change', ['id' => $contact->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('kontaktı silmək istədiyinizdən əminsiniz?')" href="{{route('admin.contact.delete', ['id' => $contact->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    @else
    <div>hələ kiç heç bir kontakt məlumatı mövcud deyil</div>
    @endif
</div>
@endsection
