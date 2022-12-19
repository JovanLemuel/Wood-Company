@extends('layouts/mainlayout')
@section('content')
    <h1>{{ $pagetitle }}</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
            @if ($errors->has('name'))
                <p class="error">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control">
            @if ($errors->has('description'))
                <p class="error">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <input type="file" name="image_name" class="form-control">
            @if ($errors->has('image_name'))
                <p class="error">{{ $errors->first('image_name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Supplier</label>
            <select name="supplier_id" id="" class="form-select">
                @foreach ($suppliers as $suppplier)
                    <option value="{{ $supplier['id'] }}">{{ $supplier['name'] }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>

    <div class="h-screen"></div>
@endsection
