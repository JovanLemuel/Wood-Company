@extends('layouts/mainlayout')
@section('content')
    <h1>{{ $maintitle }}</h1>
    <img src="/images/{{ $product['image_name'] }}" width="140" height="130">
    <h2>Name: {{ $product['name'] }}</h2>
    <h3>Description: {{ $product['description'] }}</h3>

    <h1>Supplier</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product->supplier as $supplier)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td>{{ $supplier->city }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="h-screen"></div>
@endsection
