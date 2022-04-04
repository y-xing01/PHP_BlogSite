@extends('layouts.app')
@section('content')
    <div class="container-2xl">
        <div class="mb-20">
            <p class="text-center uppercase font-serif text-3xl p-15">About us</p>
            <img class="m-auto" src="https://hensley.com/wp-content/uploads/2021/03/JB-Top-3-800x400-1.jpg" alt="">
        </div>


        <div class="text-center p-15 bg-black text-white font-serif">
            <div class="grid grid-rows-2 grid-flow-col gap-4">
                <div class="row-span-3 ml-3"><img class="m-auto"
                        src="https://hensley.com/wp-content/uploads/2021/03/JB-Top-3-800x400-1.jpg" alt=""></div>
                <div class="col-span-2">
                    <p>Alcohol is a part of many of our lives. We use it for celebration, for comfort, to socialise, to wind
                        down, to cope. We treat it differently to other drugs; it’s legal, socially acceptable, even
                        encouraged.</p>
                </div>
                <div class="row-span-2 col-span-2">
                    <p>Yet in the UK one person every hour dies as a result of alcohol. Alcohol harm – mental health
                        problems, liver disease, one of seven forms of cancer, economic difficulties, and so much more – can
                        affect any one of us, from any walk of life.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-rows-3 grid-flow-col gap-4">

            <div class="col-span-2 ...">02</div>
            <div class="row-span-2 col-span-2 ...">03</div>
            <div class="w-96 pl-20 row-span-3 ">
                <div class="float-right">
                    <p class="text-center text-3xl">Latest article</p>
                    <div class="flex ">
                        <a class="inline-block" href="https://www.recoveryspeakers.com/rs-our-story/" target="parent">
                            <p class="inline-block">Alcohol is a part of many of our lives.</p>
                            <p class="inline-block">We use it for celebration, for comfort, to socialise, to wind down, to cope.</p>
                            <p class="inline-block">We treat it differently to other drugs; its legal, socially acceptable, even encouraged.</p>
                                
                            <img class="h-20 w-20 float-right mr-3"
                                src="https://i.pinimg.com/originals/5a/39/48/5a3948b70d4d0212635282f44ae613a4.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
