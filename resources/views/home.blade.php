@extends('layouts/mainlayout')
@section('title', 'About')

@section('content')

    <div class="mt-16 relative w-full py-12 px-12 bg-jevon_ganteng_gila">
        <div class="relative z-10 text-center py-24 md:py-48">
            <h1 class="text-white text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-display font-bold mb-12">
                Source of quality wood</h1>
            <a href="/catalog"
                class="inline-block bg-jevon_ganteng_sekali hover:bg-jevon_ganteng_gila text-white uppercase text-sm tracking-widest font-heading px-8 py-4">Check
                catalog</a>
        </div>

        <div
            class="relative z-10 mx-auto max-w-4xl flex justify-between uppercase text-white font-heading tracking-widest text-sm">
            <a href="/contact" class="border-b border-white hover:border-transparent">Find out more</a>
            <a href="/contact" class="border-b border-white hover:border-transparent">Get in touch</a>
        </div>

        <img src="/images/wood-banner.jpeg" alt="home-image-1" class="w-full h-full absolute inset-0 object-cover" />
    </div>

    <img src="/images/wood-banner.jpeg" alt="home-image-2" class="w-full h-screen object-cover" />

    <div class="max-w-xl mx-auto text-center py-24 md:py-32">
        <div class="w-24 h-2 bg-jevon_ganteng_sekali mb-4 mx-auto"></div>
        <h2 class="font-display font-bold text-3xl md:text-4xl lg:text-5xl mb-6">We take pride in our product</h2>
        <p class="font-light text-gray-600 mb-6 leading-relaxed">We make sure to source the best quality of wood possible in
            order to keep our clients happy.</p>
    </div>

    <div class="relative w-full py-12 px-12">
        <div class="relative z-10 text-center py-12 md:py-24">
            <h1 class="text-white text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-display font-bold mb-6">
                Quality Wood</h1>
            <p class="text-white mb-10 text-base md:text-lg font-bold">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="/contact"
                class="inline-block bg-jevon_ganteng_sekali hover:bg-jevon_ganteng_gila text-white uppercase text-sm tracking-widest font-heading px-8 py-4">Find
                out more</a>
        </div>

        <img src="/images/wood-banner.jpeg" alt="home-image-3" class="w-full h-full absolute inset-0 object-cover" />
    </div>

@endsection
