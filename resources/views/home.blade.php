@extends('layouts/mainlayout')
@section('title', 'About')

@section('content')

    <div class="-mt-24 relative w-full py-12 px-12 bg-yellow-900">
        <div class="relative z-10 text-center py-24 md:py-48">
            <h1 class="text-white text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-display font-bold mb-12">
                Source of quality wood</h1>
            <a href="/catalog"
                class="inline-block bg-yellow-800 text-white uppercase text-sm tracking-widest font-heading px-8 py-4">Check
                catalog</a>
        </div>

        <div
            class="relative z-10 mx-auto max-w-4xl flex justify-between uppercase text-white font-heading tracking-widest text-sm">
            <a href="/contact" class="border-b border-white">Find out more</a>
            <a href="/contact" class="border-b border-white">Get in touch</a>
        </div>

        <img src="https://images.unsplash.com/photo-1490129375591-2658b3e2ee50?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2244&q=80"
            class="w-full h-full absolute inset-0 object-cover opacity-70" />
    </div>

    {{-- {% for post in collections.blogs | reverse | limit(1) %}
    <div class="grid grid-cols-1 md:grid-cols-2">

        <div class="bg-white p-12 md:p-24 flex justify-end items-center">
            <a href="{{ post . url }}">
                <img src="{{ post . data . image }}" class="w-full max-w-md" />
            </a>
        </div>

        <div class="bg-gray-100 p-12 md:p-24 flex justify-start items-center">
            <div class="max-w-md">
                <div class="w-24 h-2 bg-yellow-800 mb-4"></div>
                <h2 class="font-display font-bold text-2xl md:text-3xl lg:text-4xl mb-6">{{ post . data . title }}</h2>
                <p class="font-light text-gray-600 text-sm md:text-base mb-6 leading-relaxed">
                    {{ post . data . description }}
                </p>
                <a href="{{ post . url }}"
                    class="inline-block border-2 border-yellow-800 font-light text-yellow-800 text-sm uppercase tracking-widest py-3 px-8 hover:bg-yellow-800 hover:text-white">Read
                    more</a>
            </div>
        </div>

    </div>
    {% endfor %} --}}

    <img src="https://images.unsplash.com/photo-1501901609772-df0848060b33?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
        class="w-full h-screen object-cover" />

    <div class="max-w-xl mx-auto text-center py-24 md:py-32">
        <div class="w-24 h-2 bg-yellow-800 mb-4 mx-auto"></div>
        <h2 class="font-display font-bold text-3xl md:text-4xl lg:text-5xl mb-6">We take pride in our product</h2>
        <p class="font-light text-gray-600 mb-6 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

    {{-- <div class="flex flex-wrap bg-black">
        {% for category in collections.category | reverse | limit(3) %}
        <a href="{{ category . url }}"
            class="bg-black relative w-full md:w-auto md:flex-1 flex items-center justify-center h-72 font-heading text-white uppercase tracking-widest hover:opacity-75">
            <div class="relative z-10">{{ category . data . title }}</div>
            <img src="{{ category . data . image }}" class="absolute inset-0 w-full h-full object-cover opacity-50" />
        </a>
        {% endfor %}
    </div> --}}



    {{-- {% for post in collections.blogs | reverse | limit(1, 1) %}
    <div class="grid grid-cols-1 md:grid-cols-2">

        <div class="bg-white p-12 md:p-24 flex justify-start items-center">
            <a href="{{ post . url }}">
                <img src="{{ post . data . image }}" class="w-full max-w-md" />
            </a>
        </div>

        <div class="md:order-first bg-gray-100 p-12 md:p-24 flex justify-end items-center">
            <div class="max-w-md">
                <div class="w-24 h-2 bg-yellow-800 mb-4"></div>
                <h2 class="font-display font-bold text-2xl md:text-3xl lg:text-4xl mb-6">{{ post . data . title }}</h2>
                <p class="font-light text-gray-600 text-sm md:text-base mb-6 leading-relaxed">
                    {{ post . data . description }}
                </p>
                <a href="{{ post . url }}"
                    class="inline-block border-2 border-yellow-800 font-light text-yellow-800 text-sm uppercase tracking-widest py-3 px-8 hover:bg-yellow-800 hover:text-white">Read
                    more</a>
            </div>
        </div>

    </div>
    {% endfor %} --}}

    <div class="relative w-full py-12 px-12">
        <div class="relative z-10 text-center py-12 md:py-24">
            <h1 class="text-white text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-display font-bold mb-6">
                Quality Wood</h1>
            <p class="text-white mb-10 text-base md:text-lg font-bold">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="/contact"
                class="inline-block bg-yellow-800 text-white uppercase text-sm tracking-widest font-heading px-8 py-4">Find
                out more</a>
        </div>

        <img src="https://images.unsplash.com/photo-1503516459261-40c66117780a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1949&q=80"
            class="w-full h-full absolute inset-0 object-cover" />
    </div>

@endsection
