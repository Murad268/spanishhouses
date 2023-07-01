@extends('back.layouts.main')
@section('title', 'insta photos')
@section('content')

<div id="content" class="p-4 p-md-5 pt-5">

    <a href="{{route('admin.instaphotos.add')}}" class="btn btn-dark mb-5">new insta Photo</a>


    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($photos)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">img</th>
                <th scope="col">link</th>
                <th>controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
            <tr>
                <th scope="row">{{$photo->id}}</th>
                <td class="img__col"><a target="_blank" href="{{asset('assets/front/images/instagram/'.$photo->img)}}"><img style="height: 60px; width: 50px" src="{{asset('assets/front/images/instagram/'.$photo->img)}}" alt=""></a></td>
                <td>{{mb_substr($photo->link, 0, 25)}}...</td>
                <td>
                    <a href="{{route('admin.instaphotos.change', ['id' => $photo->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('şəkli silmək istədiyinizdən əminsiniz?')" href="{{route('admin.instaphotos.delete', ['id' => $photo->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    @if ($photos->lastPage() > 1)
    <div class="pagination">
        @if($photos->currentPage() > 1)
        <a class="btn btn-primary" href="{{ $photos->previousPageUrl() }}">Previous</a>
        @endif

        @if($photos->hasMorePages())
        <a class="btn btn-primary" href="{{ $photos->nextPageUrl() }}">Next</a>
        @endif

    </div>
    @endif
    @else
    <div>
        hələ kiç heç bir şəkil mövcud deyil
    </div>
    @endif
</div>
@endsection
