@extends('layouts.app')
<link href="main.css" rel="stylesheet">

@section('content')
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img id="test" class="hover:shadow-2xl rounded-xl"
                src="https://mshanken.imgix.net/wso/Articles/2018/NS_health112817_1600.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/4 block">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-5 font-serif">
                Looking for a blog for alcohol?
            </h2>

            <p class="py-8 text-gray-700 text-xl mb-4 font-serif">
                Welcome to the Alcohol blog, where you can find the latest alcohol research and news, tips to help you cut
                down, stories from people who have experienced alcohol harm, low and no-alcohol reviews and much more.
            </p>

            <a href="/blog"
                class="uppercase bg-gray-800 text-gray-100 text-s font-extrabold py-4 px-8 font-serif transition duration-300 ease-in-out">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white font-serif">

        <span class="font-extrabold block text-2xl py-2 italic ">
            Many of us drink too much without realising it.
        </span>
        <span class="font-extrabold block text-2xl py-2 italic ">
            This could be having a big effect on us both now and in the future.
        </span>
        <span class="font-extrabold block text-4xl py-7 ">
            Continue scroll down to see recent blogs
        </span>
    </div>

    <div class="text-center py-5">
        <h2 class="text-4xl font-bold py-10 font-serif">
            These Are The 4 Latest Posts
        </h2>
    </div>
    <div class="sm:grid grid-cols-2">
        @foreach ($posts as $post)
            <div class="sm:grid grid w-3/4 m-auto mt-11">
                <div class="flex bg-orange-800 text-gray-100 pt-10 h-80">
                    <div class="m-auto pt-1 pb-16 sm:m-auto w-4/5 block">

                        <h3 class="text-xl font-bold py-10">
                            {{ $post->title }}
                        </h3>
                        <h5 class="object-cover h-20 w-96 truncate ">
                            {{ $post->description }}
                        </h5>
                        <div class="mt-10">
                            <a href="/blog/{{ $post->slug }}"
                                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                                Find Out More
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" h-96 w-full ">
                    <img class=" h-96 w-full object-fill" src="{{ asset('images/' . $post->image_path) }}" alt="">
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection
