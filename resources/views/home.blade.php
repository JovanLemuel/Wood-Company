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

    <div class="bg-jevon_ganteng text-white text-opacity-40 font-semibold uppercase text-xs tracking-widest px-12">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-4 gap-12 text-center lg:text-left py-24">
            <div>
                <div class="text-white opacity-50 text-4xl font-display">Trusted for years.</div>
            </div>
            <div>
                <p class="block mb-4">Thousands of clients worldwide</p>
                <p class="block mb-4">Operating in multiple countries</p>
                <p class="block mb-4">Wide range of suppliers</p>
            </div>
            <div>
                <p class="block mb-4">Responsible partners</p>
                <p class="block mb-4">Hundreds of employees</p>
                <p class="block mb-4">Multiple selections of wood</p>
            </div>
            <div>
                <div class="font-display text-white uppercase text-sm tracking-widest mb-6">Got any questions?
                </div>
                <a href="/contact"
                    class="inline-block bg-jevon_ganteng_sekali hover:bg-jevon_ganteng_gila text-white uppercase text-sm tracking-widest font-heading px-8 py-4">Contact
                    Us</a>
            </div>
        </div>
    </div>


    <div class="max-w-xl mx-auto text-center py-24 md:py-32">
        <div class="w-24 h-2 bg-jevon_ganteng_sekali mb-4 mx-auto"></div>
        <h2 class="font-display font-bold text-3xl md:text-4xl lg:text-5xl mb-6">We take pride in our product</h2>
        <p class="font-light text-gray-600 mb-6 leading-relaxed">We make sure to source the best quality of wood possible in
            order to keep our clients happy.</p>
    </div>

    <div class="relative w-full py-12 px-12">
        <div class="relative z-10 text-center py-12 md:py-24">
            <h1 class="text-white text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-display font-bold mb-6">
                Wood News</h1>
            <p class="text-white mb-10 text-base md:text-lg font-bold">See the latest news around the wood industry in our
                blog right now.</p>
            <a href="/blog"
                class="inline-block bg-jevon_ganteng_sekali hover:bg-jevon_ganteng_gila text-white uppercase text-sm tracking-widest font-heading px-8 py-4">Find
                out more</a>
        </div>

        <img src="/images/wood_banner2.jpeg" alt="home-image-3" class="w-full h-full absolute inset-0 object-cover" />
    </div>

@endsection
