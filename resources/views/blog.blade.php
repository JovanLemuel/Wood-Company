@extends('layouts/mainlayout')
@section('title', 'Blog')

@section('content')
    <div class="text-center py-12 px-6 mt-12">
        <h1 class="font-display font-bold text-5xl mb-6">The Blog</h1>
        <p class="max-w-lg mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel arcu commodo, sodales
            nibh sed, efficitur sapien.</p>
    </div>

    <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 pt-12 pb-24">
        {{-- {% for post in collections.blogs | reverse %}
        <div>
            <a href="{{ (post . url) | url }}">
                <img src="{{ post . data . image }}" class="w-full h-52 md:h-64 lg:h-96 xl:h-64 object-cover" />
            </a>

            <div class="bg-gray-50 p-8">
                <div class="text-xs text-gray-600 uppercase font-semibold">{{ (post . date) | readableDate }}</div>
                <h2 class="mt-3 text-3xl mb-6 font-display text-black leading-tight max-w-sm">
                    {% if post.data.title %}
                    {{ post . data . title }}
                    {% else %}
                    Untitled
                    {% endif %}
                </h2>
                {% if post.data.description %}
                <p class="mt-4 max-w-md">
                    {{ post . data . description }}
                </p>
                {% endif %}
                <a href="{{ (post . url) | url }}"
                    class="flex items-center mt-6 uppercase text-sm text-black font-semibold">
                    Read article
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
        {% endfor %} --}}
    </div>


    <div class="h-screen"></div>

@endsection
