@extends('layouts/mainlayout')
@section('title', 'Catalog')

@section('content')
    <div class="container mt-2">
        <h2>Catalog Page</h2>
    </div>

    @if (Auth::check() && Auth::user()->status == 'admin')
        <a href="{{ route('products.create') }}">Create Product</a>
    @endif

    <form action="" method="GET" netlify>
        <div>
            <label class="block text-base tracking-tight text-gray-600">Search</label>
            <input name="search" type="search" placeholder="Search"
                class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700" />
            <button type="submit">Search</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Supplier Name</th>
                <th scope="col">Photo</th>
                @if (Auth::check() && Auth::user()->status == 'admin')
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @php($i = 0)
            @php($k = 0)
            @foreach ($product as $pr)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td> <a href="/catalog/{{ $pr['id'] }}">{{ $pr['name'] }}</a></td>
                    <td>{{ $pr['description'] }}</td>
                    <td>{{ $pr->supplier->name }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $product->image_name) }}" class="mx-auto d-block rounded-3"
                            width="140" height="130">
                    </td>
                    @if (Auth::check() && Auth::user()->status == 'admin')
                        <td>
                            <div class="mt-2">
                                <a href="{{ route('products.edit', $product->id) }}">Update</a>
                            </div>
                            <div class="mt-2">
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    @endif
                </tr>
                @php($i++)
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

    <h1>Supplier</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supplier as $sr)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $sr['name'] }}</td>
                    <td>{{ $sr['phone'] }}</td>
                    <td>{{ $sr['city'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection
