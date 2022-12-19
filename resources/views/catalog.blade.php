@extends('layouts/mainlayout')
@section('title', 'Catalog')

@section('content')
    <div class="relative bg-white pt-12 pb-20 px-4 sm:px-6 lg:pt-12 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center py-12 px-6 mt-12">
                <h1 class="font-display font-bold text-5xl mb-6">Catalog</h1>
                <p class="max-w-lg mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel arcu commodo,
                    sodales
                    nibh sed, efficitur sapien.</p>
            </div>

            {{-- @if (Auth::check() && Auth::user()->status == 'admin')
                <a href="{{ route('products.create') }}">Create Product</a>
            @endif --}}

            <form action="" method="GET" netlify>
                <div>
                    <label class="block text-base tracking-tight text-gray-600">Search</label>
                    <input name="search" type="search" placeholder="Search"
                        class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700" />
                    <button type="submit">Search</button>
                </div>
            </form>

            @foreach ($products as $pr)
                <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="/images/{{ $products['productimage'] }}"
                                alt="product image">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">{{ $pr['name'] }}</p>
                                    <p class="mt-3 text-base text-gray-500">{{ $pr['description'] }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{--     <table class="table">
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
            @foreach ($products as $pr)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td> <a href="/catalog/{{ $pr['id'] }}">{{ $pr['name'] }}</a></td>
                    <td>{{ $pr['description'] }}</td>
                    <td>{{ $pr->supplier->name }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $products->product_image) }}" class="mx-auto d-block rounded-3"
                        width="140" height="130">
                    </td>
                    @if (Auth::check() && Auth::user()->status == 'admin')
                        <td>
                            <div class="mt-2">
                                <a href="{{ route('products.edit', $products->id) }}">Update</a>
                            </div>
                            <div class="mt-2">
                                <form action="{{ route('products.destroy', $products->id) }}" method="POST">
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
    </table> --}}

    {{-- <h1>Supplier</h1> --}}

    {{-- <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $sr)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $sr['name'] }}</td>
                    <td>{{ $sr['phone'] }}</td>
                    <td>{{ $sr['city'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}


@endsection
