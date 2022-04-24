@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto ">
        <div class="py-15">
            <h1 class="text-6xl font-serif italic text-center">
                Create Post
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-2/5 m-auto text-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-full mb-4 text-gray-50 bg-red-700 py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-2/5 m-auto">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="title" placeholder="Enter the title"
                class="py-10 bg-transparent block border-b-2 w-full h-30 text-3xl outline-none">

            <textarea name="description" placeholder="Description"
                class="py-10 bg-transparent block border-b-2 w-full h-30 text-lg outline-none"></textarea>

            {{-- <div class="bg-grey-lighter pt-15">
                <label
                    class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div> --}}

            <div x-data="showImage()" class="bg-transparent rounded-lg shadow-xl text-center mt-10">
                <div class="m-4 text-center">

                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col w-full h-40 hover:bg-red-50">
                            <div class="relative flex flex-col items-center justify-center pt-7">
                                <img id="preview" class="absolute object-cover h-40 mt-10">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                    Select a photo</p>
                            </div>
                            <input type="file" name="image" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                        </label>
                    </div>
                </div>
                <label class="inline-block mb-2 text-gray-500 py-2">Upload Image ( jpg , png )</label>
            </div>

            <script>
                function showImage() {
                    return {
                        showPreview(event) {
                            if (event.target.files.length > 0) {
                                var src = URL.createObjectURL(event.target.files[0]);
                                var preview = document.getElementById("preview");
                                preview.src = src;
                                preview.style.display = "block";
                            }
                        }
                    }
                }
            </script>

            <button type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Post
            </button>
        </form>
    </div>

@endsection
