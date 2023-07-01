
@extends('back.layouts.main')
@section('title', 'categories')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
         <a href="" class="btn btn-dark mb-5">new categories</a>
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
              <tr>
                <th scope="row">1</th>


                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>

                <td>
                  <a href="" class="btn btn-success">Change</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>

            </tbody>
          </table>
      </div>
@endsection





