@extends('back.layouts.main')
@section('title', 'logo')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(!count($logo)>0)
    <form method="post" enctype="multipart/form-data" action="{{route('admin.logo.create')}}">
        @csrf
        <div>
            <input type="file" name="logo__image" id="">
        </div>
        @error('logo__image')
            <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
        <button href="{{route('admin.about.add')}}" class="mb-5 mt-3 btn btn-dark">new logo</button>
    </form>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($logo)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">img</th>

            </tr>
        </thead>
        <tbody>
            @foreach($logo as $info)
            <tr>
                <th scope="row">{{$info->id}}</th>
                <td class="img__col"><a target="_blank" href="{{asset('assets/front/images/header/'.$info->logo)}}"><img style="width: 80px; height: 40px" src="{{asset('assets/front/images/header/'.$info->logo)}}" alt=""></a></td>
                <td>
                    <a onclick="return confirm('logonu silmək istədiyinizdən əminsinizmi?')" href="{{route('admin.logo.delete', ['id' => $info->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    @else
    <div>hələ ki, heç bir logo daxil edilməyib</div>
    @endif

</div>
@endsection
