@extends('layouts/mainlayout')
@section('title', 'Catalog')

@section('content')
    <div class="container mt-2">
        <h2>Catalog Page</h2>
    </div>

    <form action="" method="GET" class="form-inline w-25 d-flex gap-2">
        <input type="search" placeholder="Search" name="search" class="form-control">
        <button type="submit" class="btn btn-outline-success">Search</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Supplier Name</th>
                <th scope="col">Photo</th>
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
                        <img src="/images/{{ $pr['image_name'] }}" class="mx-auto d-block rounded-3" width="140"
                            height="130">
                    </td>
                </tr>
                @php($i++)
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

    <h1>Supplier</h1>

    <table class="table table-striped">
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
