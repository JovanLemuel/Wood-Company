@extends('components/navbar')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>

    </x-slot>

    <div class="p-8 mx-auto">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <div class="flex justify-between items-center pb-4 bg-white bg-gray-200">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative my-5 mx-6 p-4">
                    <input type="text" id="table-search-products"
                        class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-white-500"
                        placeholder="Search for category">
                </div>
                <div class="flex justify-between items-center pb-4 bg-gray-200  ">
                    <a href="/createcategory"
                        class="mt-5 mr-14 font-sans text-zinc-50 bg-slate-900 hover:bg-slate-700
                        focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium
                        rounded-lg text-sm px-5 py-2 text-center inline-flex items-center">
                        <span class="self-center text-sm font-semibold whitespace-nowrap hidden md:block">New
                            Category</span>

                    </a>


                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center px-4 py-2 rounded-lg border-2 border-slate-900
                            md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <svg class="w-4 h-4 fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M416 224H31.1C14.33 224 0 238.3 0 256s14.33 32 31.1 32h384C433.7 288 448 273.7 448 256S433.7 224 416 224zM416 384H31.1C14.33 384 0 398.3 0 415.1S14.33 448 31.1 448h384C433.7 448 448 433.7 448 416S433.7 384 416 384zM416 64H31.1C14.33 64 0 78.33 0 95.1S14.33 128 31.1 128h384C433.7 128 448 113.7 448 96S433.7 64 416 64z" />
                        </svg>
                    </button>
                </div>
            </div>

            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="p-4">
                            ID
                        </th>
                        <th scope="col" class="p-4">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-12 text-center">
                            Edit
                        </th>
                        <th scope="col" class="py-3 px-12 text-center">
                            Delete
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @php($i = 0)
                    @foreach ($categories as $ca)
                        <tr class="bg-white border-b">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <kbd
                                        class="px-2 py-1.5 text-xs font-semibold bg-gray-100 border border-gray-200 rounded-lg">{{ $loop->iteration }}</kbd>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-gray-900">
                                {{ $ca->category_name}}
                            </td>


                            <td class="py-4 px-6 text-center">
                                <a href="{{ route('categories.edit', $ca->id) }}"
                                    class=" text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit
                                </a>
                            </td>



                            <td class="py-4 px-6 text-center">
                                <form action="{{ route('categories.destroy', $ca->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class=" text-white bg-red-800 hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Delete
                                        product</button>

                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
