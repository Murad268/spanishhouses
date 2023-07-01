@extends('back.layouts.main')
@section('title', 'districts')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">

    <a href="{{route('admin.districts.add')}}" class="btn btn-dark mb-5">new district</a>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if(count($districts)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">slug</th>
                <th scope="col">status</th>
                <th>controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($districts as $district)
            <tr>
                <th scope="row">{{$district->id}}</th>


                <td>{{$district->name}}</td>

                <td>{{$district->slug}}</td>
                <td>
                    @if($district->status)
                    <span style="color: green">active</span>
                    @else
                    <span style="color: red">passiv</span>
                    @endif
                </td>

                <td style="display: flex; column-gap: 5px">
                    <a href="{{route('admin.districts.change', ['id' => $district->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('Rayonu silmək istədiyinizdən əminsinizmi?')" href="{{route('admin.districts.delete', ['id' => $district->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    @if ($districts->lastPage() > 1)
    <div class="pagination">
            @if($districts->currentPage() > 1)
            <a class="btn btn-primary" href="{{ $districts->previousPageUrl() }}">Previous</a>
            @endif

            @if($districts->hasMorePages())
            <a class="btn btn-primary" href="{{ $districts->nextPageUrl() }}">Next</a>
            @endif
    </div>
    @endif
    @else
    <div>hələ heç bir rayon daxil edilməyib</div>
    @endif

</div>
@endsection
