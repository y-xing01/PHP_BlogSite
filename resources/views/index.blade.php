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
        <div class="sm:grid grid w-3/4 m-auto mt-11">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">

                    <h3 class="text-xl font-bold py-10">
                        How to stop drinking alcohol: 9 things I did that REALLY helped
                    </h3>

                    <a href="https://www.goodto.com/wellbeing/how-to-stop-drinking-alcohol-521760" target="parent"
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
            <div class="test">
                <img src="https://www.beveragedaily.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/beveragedaily.com/news/regulation-safety/low-alcohol-and-alcohol-free-eu-and-uk-regulations/10563888-3-eng-GB/Low-alcohol-and-alcohol-free-EU-and-UK-regulations.jpg"
                    alt="">
            </div>
        </div>

        <div class="sm:grid grid w-3/4 m-auto">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">

                    <h3 class="text-xl font-bold py-10">
                        How to stop drinking alcohol: 9 things I did that REALLY helped
                    </h3>

                    <a href=""
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
            <div>
                <img src="https://atlasbiomed.com/blog/content/images/2020/11/2020-10-08-1--Allergic-to-alcohol-201012-.png"
                    alt="">
            </div>
        </div>

        <div class="sm:grid grid w-3/4 m-auto pt-10">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">

                    <h3 class="text-xl font-bold py-10">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error
                        culpa
                        laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis
                        quasi
                        ex? Nemo hic placeat et?
                    </h3>

                    <a href=""
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
            <div>
                <img src="https://images.ctfassets.net/juauvlea4rbf/22n43pjzhesCmss2kMge8E/2da502354cac8218dbef84ba742282b8/Contenful__11_.svg"
                    alt="">
            </div>
        </div>

        <div class="sm:grid grid w-3/4 m-auto pt-10">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">

                    <h3 class="text-xl font-bold py-10">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error
                        culpa
                        laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis
                        quasi
                        ex? Nemo hic placeat et?
                    </h3>

                    <a href=""
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
            <div>
                <img src="https://www.mydr.com.au/wp-content/uploads/2018/11/AdobeStock_308594837-scaled-1210x700.jpeg"
                    alt="">
            </div>
        </div>
    </div>
@endsection
