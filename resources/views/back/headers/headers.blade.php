@extends('back.layouts.main')
@section('title', 'headers')
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">

    <a href="{{route('admin.headers.add')}}" class="mb-5 btn btn-dark">new headers</a>


    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($pages)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">page_name</th>
                <th scope="col">header_img</th>
                <th scope="col">title</th>
                <th scope="col">subtitle</th>
                <th scope="col">controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
            <tr>
                <th scope="row">{{$page->id}}</th>
                <th scope="col">{{$page->name}}</th>
                <td class="img__col"><a target="_blank" href="{{asset('assets/front/images/header/'.$page->img)}}"><img src="{{asset('assets/front/images/header/'.$page->img)}}" alt=""></a></td>
                <td>{{$page->title}}</td>
                <td>{{$page->subtitle}}</td>
                <td style="display: flex; column-gap: 10px">
                    <a href="{{route('admin.headers.change', ['id' => $page->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('verilənləri silmək istədiyinizdın əminsinizmi?')" href="{{route('admin.headers.delete', ['id' => $page->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    @else
    <div>hələ ki, heç bir səhifə başlığı daxil edilməyib</div>
    @endif

</div>
@endsection
