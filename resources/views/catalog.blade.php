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
                <p class="max-w-lg mx-auto">Browse our wide range of wood selections.</p>
            </div>

            {{-- @if (Auth::check() && Auth::user()->status == 'admin')
                <a href="{{ route('products.create') }}">Create Product</a>
            @endif --}}


            <form action="" method="GET" netlify class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input name="search" type="search" placeholder="Search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pl-10 p-2.5"
                        placeholder="Search">
                </div>
                <button type="submit"
                    class="p-2.5 ml-2 text-sm font-medium text-white bg-jevon_ganteng_sekali rounded-lg border hover:bg-jevon_ganteng_gila focus:ring-4 focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @foreach ($products as $pr)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            {{-- <img class="h-48 w-full object-cover" src="/images/{{ $products['productimage'] }}"
                                alt="product image"> --}}
                            <img src="{{ asset('storage/productimage/' . $pr->product_image) }}"
                                class="h-48 w-full object-cover" alt="{{ $pr->product_image }}">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl text-center font-semibold text-gray-900">{{ $pr['name'] }}</p>
                                    <p class="mt-3 text-center text-base text-gray-500">{{ $pr['description'] }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
