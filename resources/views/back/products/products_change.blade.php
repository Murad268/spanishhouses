@extends('back.layouts.main')
@section('title', 'products')
@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    @if(session()->has('error__message'))
    <div class="alert alert-success">
        {{ session('error__message') }}
    </div>
    @endif
    <form method="post" action="{{route('admin.products.update', ['id' => $product->id])}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">title</label>
            <input value="{{old('products_title', $product->products_title)}}" name="products_title" type="text" class="form-control">
            @error('products_title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="mb-5 form-check">
                <input {{$product->is_newbuilding==1?'checked':''}} name="is_newbuilding" class="form-check-input newbuildingsCheck" type="checkbox" value="1">
                <label class="form-check-label" for="flexCheckDefault">
                    is newbuildings
                </label>
            </div>
        </div>
        <div class="mb-3 newbuildingsSelect {{$product->is_newbuilding==1? 'active': ''}}">
            <label class="form-label">newbuilding</label>
            <select name="newbuildings_id" class="form-select form-control" aria-label="Default select example">
                <option class="newnon" value="">district</option>
                @foreach($newbuildings as $newbuilding)
                <option {{$product->newbuildings_id == $newbuilding->id ? 'selected' : ''}} value="{{$newbuilding->id}}">{{$newbuilding->title}}</option>
                @endforeach
            </select>
            @error('newbuildings_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">on rest</label>
            <select name="onrest" class="form-select form-control" aria-label="Default select example">
                <option {{$product->onrest  == 1 ? 'selected' : ''}} value="0">no</option>
                <option {{$product->onrest  == 1 ? 'selected' : ''}} value="1">yes</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">new</label>
            <select name="is_new" class="form-select form-control" aria-label="Default select example">
                <option {{$product->is_new  ? 'selected' : ''}} value="1">yes</option>
                <option {{$product->is_new == 0 ? 'selected' : ''}} value="0">no</option>

            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">product description</label>
            <textarea style="height: 600px" name="products_desc" class="form-control">{{old('products_desc', $product->products_desc)}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">artikul</label>
            <input value="{{old('artikul', $product->artikul)}}" name="artikul" type="text" class="form-control">
            @error('artikul')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input value="{{old('products_price', $product->products_price)}}" name="products_price" type="text" class="form-control">
            @error('products_price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">bedrooms</label>
            <input value="{{old('bedrooms', $product->bedrooms)}}" type="number" name="bedrooms" class="form-control">
            @error('bedrooms')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">bathrooms</label>
            <input value="{{old('bathrooms', $product->bathrooms)}}" type="number" name="bathrooms" class="form-control">
            @error('bathrooms')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="mb-5 form-check">
                <input {{$product->car_parks==1?'checked':''}} name="car_parks" class="form-check-input" type="checkbox" value="1">
                <label class="form-check-label" for="flexCheckDefault">
                    has car parks
                </label>
            </div>
        </div>
        <div class="mb-3">
            <div class="mb-5 form-check">
                <input {{$product->garden ==1?'checked':''}} name="garden" class="form-check-input" type="checkbox" value="1">
                <label class="form-check-label" for="flexCheckDefault">
                    has garden
                </label>
            </div>
        </div>
        <div class="mb-3">
            <div class="mb-5 form-check">
                <input {{$product->pool==1?'checked':''}} name="pool" class="form-check-input" type="checkbox" value="1">
                <label class="form-check-label" for="flexCheckDefault">
                    has pool
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">square</label>
            <input value="{{old('square', $product->square)}}" type="number" name="square" class="form-control">
            @error('square')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">plot</label>
            <input value="{{old('plot', $product->plot)}}" name="plot" type="number" class="form-control">
            @error('plot')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">building type</label>
            <select name="products_building_type" class="form-select form-control" aria-label="Default select example">
                @foreach($types as $type)
                <option {{$product->products_building_type == $type->id ? 'selected' : ''}} value="{{$type->id}}">{{$type->title}}</option>
                @endforeach
            </select>
            @error('products_building_type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">district</label>
            <select name="products_district" class="form-select form-control" aria-label="Default select example">
                @foreach($districts as $district)
                <option {{$product->products_district == $district->id ? 'selected' : ''}} value="{{$district->id}}">{{$district->name}}</option>
                @endforeach
            </select>
            @error('products_district')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input {{$product->products_status==1?'checked':''}} name="products_status" class="form-check-input" type="checkbox" value="1">
                <label class="form-check-label" for="flexCheckDefault">
                    status is active
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Change</button>
    </form>
</div>
<script>
    const options = document.querySelectorAll('.newbuildingsSelect option');
    const buildingsCheck = document.querySelector('.newbuildingsCheck');
    const nonOption = document.querySelector('.newnon');

    function deselectOptions() {
        options.forEach(option => {
            option.selected = false;
        });
    }

    function toggleElements() {
        document.querySelector('.newbuildingsSelect').classList.toggle('active');
        nonOption.classList.toggle('active');
    }

    function handleBuildingsCheckChange() {
        if (!buildingsCheck.checked) {
            deselectOptions();
            nonOption.checked = true;
        }
        toggleElements();
    }

    buildingsCheck.addEventListener('change', handleBuildingsCheckChange);
</script>
@endsection
