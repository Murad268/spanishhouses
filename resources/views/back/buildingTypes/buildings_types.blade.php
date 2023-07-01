@extends('back.layouts.main')
@section('title', 'building types')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <a href="{{route('admin.buildingtypes.add')}}" class="btn btn-dark mb-5">new building type</a>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($types) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">slug</th>
                <th scope="col">status</th>
                <th>controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
            <tr>
                <th scope="row">{{$type->id}}</th>
                <td>{{$type->title}}</td>
                <td>{{$type->slug}}</td>
                <td>
                    @if($type->status)
                    <span style="color: green">active</span>
                    @else
                    <span style="color: red">passiv</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('admin.buildingtypes.change', ['id' => $type->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('tikinti tiplərini silmək istədiyinizdən əminsiniz?')" href="{{route('admin.buildingtypes.delete', ['id' => $type->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    @if ($types->lastPage() > 1)
    <div class="pagination">
        @if($types->currentPage() > 1)
        <a class="btn btn-primary" href="{{ $types->previousPageUrl() }}">Previous</a>
        @endif

        @if($types->hasMorePages())
        <a class="btn btn-primary" href="{{ $types->nextPageUrl() }}">Next</a>
        @endif
    </div>
    @endif
    @else
    <div>hələ ki, heç bir tikili tipi daxil edilməyib</div>
    @endif
</div>
@endsection
