@extends('layouts.app')
@section('content')
    <div class="pt-6 pb-12">
        <div id="card" class="">
            <h2 class="text-center font-serif mb-3 uppercase text-4xl xl:text-5xl">Support and Help</h2>
            <!-- container for all cards -->
            <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                <!-- card -->
                <div v-for="card in cards"
                    class="flex flex-col md:flex-row overflow-hidden
                                              bg-white rounded-lg shadow-xl  mt-4 w-100 mx-2">
                    <!-- media -->
                    <div class="h-64 w-auto md:w-1/2">
                        <img class="inset-0 h-full w-full object-cover object-center"
                            src="https://faceswaponline.com/wp-content/uploads/2019/07/BlackPanthermask-574adcf93c85e50262ba322e228958d9.jpg" />
                    </div>
                    <!-- content -->
                    <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                        <h3 class="font-semibold text-lg leading-tight truncate">Jeremy Soh Hong Shi (Front-end Developer)</h3>
                        <p class="mt-2">
                            Hi, my name is Jeremy Soh, I'm a 2nd year software engineering student in DKIT. I'm the main creator of
                            Summer Vibecohol in the Department of Alcohol Development.
                        </p>
                        <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            Jeremy Soh &bull; 2021-12-01
                        </p>
                    </div>
                </div>
                <!--/ card-->
            </div>
            <!--/ flex-->

            <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                <!-- card -->
                <div v-for="card in cards"
                    class="flex flex-col md:flex-row overflow-hidden
                                              bg-white rounded-lg shadow-xl  mt-4 w-100 mx-2">
                    <!-- media -->
                    <div class="h-64 w-auto md:w-1/2">
                        <img class="inset-0 h-full w-full object-cover object-center"
                            src="https://images.entertainment.ie/storage/images_content/rectangle/620x372/Thor-Ragnarok-Chris-Hemsworth-0c93964.jpg?w=640&h=384&q=high" />
                    </div>
                    <!-- content -->
                    <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                        <h3 class="font-semibold text-lg leading-tight truncate">Yue Xing Tong (Back-end Developer)</h3>
                        <p class="mt-2">
                            Yue Xing recently join in the Department of Alcohol Development. 
                            He studied Software Development at the Dundalk Institute of Technology, Ireland, and was kind enough to provide his help in this project :P
                            Welcome to Summer Vibecohol, Yue Xing!
                        </p>
                        <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            Yue Xing Tong &bull; 2021-12-01
                        </p>
                    </div>
                </div>
                <!--/ card-->
            </div>
        </div>
    </div>
@endsection
