<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <form action="{{route('admin.login_check')}}" method="post" style="width: 400px;">

        @csrf
        <h5 class="mb-3">Login to Admin Panel</h5>
        <div class="form-outline mb-4">
            <input value="{{old('admin_login')}}" name="admin_login" type="text" class="form-control" />
            <label class="form-label mt-2" for="form2Example1">Login</label>
        </div>
        <div class="form-outline mb-4">
            <input name="admin_pass" type="password"  class="form-control" />
            <label  class="form-label  mt-2" for="form2Example2">Password</label>
        </div>
        @if(session()->has('err'))
        <div class="alert alert-danger">
            {{ session('err') }}
        </div>
        @endif
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
    </form>
</body>

</html>
