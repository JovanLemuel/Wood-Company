@extends('layouts/mainlayout')
@section('content')
    <div class="text-center pt-20 py-12 px-6 mt-12">
        <h1 class="font-display font-bold text-5xl mb-6">Update Blog</h1>
    </div>
    <div class="container mx-auto px-6 mb-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-4xl mx-auto">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Title</label>
                    <input type="text" name="blog_title"
                        class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700"
                        value="{{ $blog->blog_title }}">
                </div>
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Content</label>
                    <input type="text" name="blog_content"
                        class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700"
                        value="{{ $blog->blog_content }}">
                </div>
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Type</label>
                    <input type="text" name="blog_type"
                        class="mt-2 w-full border-none text-sm p-4 bg-gray-100 text-gray-700"
                        value="{{ $blog->blog_type }}">
                </div>
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Genre</label>
                    <select type="text" name="genre_id" class="mt-2 form-select w-full py-3">
                        @foreach ($genres as $gre)
                            <option value="{{ $gre['id'] }}">{{ $gre->genre_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="block text-base tracking-tight text-gray-600">Image</label>
                    <img src="{{ asset('storage/' . $blog->blog_image) }}" alt="">
                    <input type="file" name="blog_image" class="mt-2 w-full form-control">
                </div>
                <button type="submit"
                    class="inline-block bg-jevon_ganteng_sekali hover:bg-jevon_ganteng_gila text-white uppercase text-sm tracking-widest font-heading px-8 py-4 mt-6">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
