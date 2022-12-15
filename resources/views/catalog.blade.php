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
    @php
        for ($j = 0; $j < count($writers); $j++) {
            if ($j + 1 == 1) {
                $country[$j] = 'Lebanon';
            } elseif ($j + 1 == count($writers)) {
                $country[$j] = 'Brunei';
            } elseif ($j + 1 == count($writers) / 2) {
                $country[$j] = 'Indonesia';
            } else {
                if (($j + 1) % 2 == 0) {
                    $country[$j] = 'Prancis';
                } else {
                    $country[$j] = 'Rusia';
                }
            }
        }
    @endphp

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Country</th>
                <th scope="col">Description</th>
                <th scope="col">Contact</th>
                <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 0)
            @php($k = 0)
            @foreach ($writers as $wr)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td> <a href="/writer/{{ $wr['id'] }}">{{ $wr['name'] }}</a></td>
                    <td>{{ $country[$i] }}</td>
                    <td>
                        @if ($loop->first)
                            Urutan terbatas
                        @elseif($loop->last)
                            Urutan terbawah
                        @elseif($loop->iteration == $loop->count / 2)
                            Urutan tengah
                        @elseif($loop->even)
                            Urutan genap
                        @elseif ($loop->odd)
                            Urutan ganjil
                        @endif
                    </td>
                    <td>
                        {{ $wr['contact'] }}
                    </td>
                    <td>
                        <img src="/images/{{ $wr['image_name'] }}" class="mx-auto d-block rounded-3" width="140"
                            height="130">
                    </td>
                </tr>
                @php($i++)
            @endforeach
        </tbody>
    </table>

    {{ $writers->links() }}

    <h1>Books</h1>

    @if (Auth::check() && Auth::user()->status == 'admin')
        <a href="{{ route('books.create') }}" class="btn btn-outline-primary">Create</a>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Writer Name</th>
                <th scope="col">Cover Photo</th>
                @if (Auth::check() && Auth::user()->status == 'admin')
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['synopsis'] }}</td>
                    <td>{{ $book->writer->name }}</td>
                    <td>
                        <img src="/images/{{ asset('storage/' . $book->coverphoto) }}" class="mx-auto d-block rounded-3"
                            width="140" height="130">
                    </td>
                    @if (Auth::check() && Auth::user()->status == 'admin')
                        <td>
                            <div class="mt-2">
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Update</a>
                            </div>
                            <div class="mt-2">
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    <div class="h-screen"></div>

@endsection
