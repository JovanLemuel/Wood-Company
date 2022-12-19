@extends('layouts/mainlayout')
@section('content')
    <h1>{{ $pagetitle }}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            @if ($errors->has('name'))
                <p class="error">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $product->description }}">
            @if ($errors->has('description'))
                <p class="error">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <br>
            <img src="{{ asset('storage/' . $product->product_image) }}" alt="">
            <input type="file" name="product_image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Supplier</label>
            <input type="text" name="supplier_name" class="form-control" value="{{ $product->supplier->name }}" readonly>
        </div>
        <button type="submit">Submit</button>
    </form>

    <div class="h-screen"></div>
@endsection
