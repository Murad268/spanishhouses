@extends('back.layouts.main')
@section('title', 'founder')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(!count($founder)>0)
    <a href="{{route('admin.founder.add')}}" class="mb-5 btn btn-dark">new founder</a>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if(count($founder)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">position</th>
                <th scope="col">desc</th>
                <th scope="col">languages</th>
                <th scope="col">img</th>
                <th scope="col">controlls</th>
            </tr>
        </thead>
        <tbody>
            @foreach($founder as $found)
            <tr>
                <th scope="row">{{$found->id}}</th>
                <td>{{mb_strlen($found->nmae)>20?mb_substr($found->nmae, 0, 20).'...':$found->nmae}}</td>
                <td>{{mb_strlen($found->position)>20?mb_substr($found->position, 0, 20).'...':$found->position}}</td>
                <td>{{mb_strlen($found->desc)>20?mb_substr($found->desc, 0, 20).'...':$found->desc}}</td>
                <td>{{mb_strlen($found->languages)>20?mb_substr($found->languages, 0, 20).'...':$found->languages}}</td>
                <td class="img__col"><a href="{{asset('assets/front/images/founder/'.$found->img)}}"><img style="width: 60px; height: 70px" src="{{asset('assets/front/images/founder/'.$found->img)}}" alt=""></a></td>

                <td style="display: flex; column-gap: 10px">
                    <a href="{{route('admin.founder.change', ['id' => $found->id])}}" class="btn btn-success">Change</a>
                    <a onclick="return confirm('founder məlumatlarının silinməsini istədiyinizdın əminsiniz?')" href="{{route('admin.founder.delete', ['id' => $found->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    @else
    <div>hələ ki, heç bir founder məlumatı daxil edilməyib</div>
    @endif

</div>
@endsection
