@extends('back.layouts.main')
@section('title', 'about')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(!count($about)>0)
    <a href="{{route('admin.about.add')}}" class="mb-5 btn btn-dark">new about</a>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($about)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">img</th>
                <th scope="col">title</th>
                <th scope="col">subtitle</th>
                <th scope="col">footer</th>

                <th scope="col">desc</th>
                <th scope="col">controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($about as $info)
            <tr>
                <th scope="row">{{$info->id}}</th>

                <td class="img__col"><a target="_blank" href="{{asset('assets/front/images/about/'.$info->img)}}"><img style="width: 45px; height: 60px" src="{{asset('assets/front/images/about/'.$info->img)}}" alt=""></a></td>
                <td>{{$info->title}}</td>
                <td>{{$info->subtitle}}</td>
                <td>{{$info->footer}}</td>
                <td>{{mb_strlen($info->desc)>30?mb_substr($info->desc, 1, 30)."...":$info->desc}}</td>

                <td>
                    <a href="{{route('admin.about.change', ['id' => $info->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('haqqımızda informasiyasını silmək istədiyinizdən əminsinizmi?')" href="{{route('admin.about.delete', ['id' => $info->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    @else
    <div>hələ ki, heç bir haqqımızda mətni daxil edilməyib</div>
    @endif

</div>
@endsection
