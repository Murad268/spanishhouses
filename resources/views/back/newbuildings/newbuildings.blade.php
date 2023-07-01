@extends('back.layouts.main')
@section('title', 'new buildings')
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">
    <a href="{{route('admin.newbuildings.add')}}" class="btn btn-dark mb-5">new newbuilding</a>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($newbuildings)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">slug</th>
                <th scope="col">img</th>
                <th scope="col">status</th>
                <th>controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newbuildings as $newbuild)
            <tr>
                <th scope="row">{{$newbuild->id}}</th>


                <td>{{$newbuild->title}}</td>

                <td>{{$newbuild->slug}}</td>
                <td class="img__col"><a target="_blank" href="{{asset('assets/front/images/newbuildings/'. $newbuild->img)}}"><img src="{{asset('assets/front/images/newbuildings/'. $newbuild->img)}}" alt=""></a></td>
                <td>
                    @if($newbuild->status)
                    <span style="color: green">active</span>
                    @else
                    <span style="color: red">passiv</span>
                    @endif
                </td>

                <td style="display: flex; column-gap: 5px">
                    <a href="{{route('admin.newbuildings.change', ['id' => $newbuild->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('yeni tikilini silmək sitədiyinizdın əminsiniz?')" href="{{route('admin.newbuildings.delete', ['id' => $newbuild->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>

    </table>
    @if ($newbuildings->lastPage() > 1)
    <div class="pagination">
        @if($newbuildings->currentPage() > 1)
        <a class="btn btn-primary" href="{{ $newbuildings->previousPageUrl() }}">Previous</a>
        @endif

        @if($newbuildings->hasMorePages())
        <a class="btn btn-primary" href="{{ $newbuildings->nextPageUrl() }}">Next</a>
        @endif
    </div>
    @endif
    @else
    <div>hələ ki, heç bir data daxil edilməyib</div>
    @endif()
</div>
@endsection
