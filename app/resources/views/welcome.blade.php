@extends('layouts.app')
@section('content')
    <section>
        <div class="slideshow-container w-full relative ">
            <div class="mySlides fade">
                <img src="{{ asset("./assets/slide1.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
                {{--<div class="text">Welcome to Karwan-E-Pakistan Trust</div>--}}
            </div>
            <div class="mySlides fade">
                <img src="{{asset("./assets/slide2.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset("./assets/slide3.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset("./assets/slide4.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset("./assets/slide5.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
            </div>
            {{--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>--}}
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </section>
    <section class="mt-8 gradient-one overflow-hidden" data-aos="zoom-in" data-aos-duration="2000">
        <div class="text-center flex flex-col justify-center md:flex md:flex-row md:justify-around md:items-center lg:flex lg:flex-row lg:justify-around lg:items-center">
            <div class="w-full px-2 pb-2 text-custom-green md:pr-6 lg:w-2/3" data-aos="fade-right" data-aos-duration="2000">
                <h1 class="text-lg text-center text-white pt-10 md:text-4xl md:text-custom-green md:mb-8 lg:text-4xl lg:text-custom-green lg:mb-8">Our mission is to uplift orphan children and youth in every aspect or field of their life despite their religion, caste, area</h1>
                <p class="text-md text-white text-center md:text-xl md:text-custom-green lg:text-xl lg:text-custom-green">This noble initiative was taken to make the youth independent and to uplift the orphan children of a society that is always being the backend. This step helps to bring positivity and unity in the society which is the need of the hour.</p>
            </div>
            <div class="md:w-2/4 lg:w-2/3 lg:h-[35rem] {{--bg-img1--}}" data-aos="fade-left" data-aos-duration="3000">
                <img src="{{ asset("/assets/main1.jpeg") }}" alt="">
                <div class="p-10 ml-6 fixed top-5 left-0 right-0">
                    <h2 class="text-white my-4 md:text-xl md:my-4 md:text-white lg:text-2xl lg:my-8 lg:text-white font-bold">Join the Cause!</h2>
                    <a href="{{ route('register') }}" class="mb-8"><button class="px-4 py-3 text-lg border-2 rounded text-custom-green bg-white hover:text-white hover:border-white hover:bg-custom-green">Register</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="md:my-8 lg:my-8 gradient-two overflow-hidden" data-aos="zoom-out" data-aos-duration="2000">
            <div class="flex flex-col-reverse md:flex md:flex-row md:justify-around md:items-center md:w-3/4 lg:w-full lg:flex lg:flex-row lg:justify-between lg:items-center">
                <div class="{{--bg-img2--}}md:w-2/3 lg:w-[60%] lg:h-[35rem]" data-aos="fade-right" data-aos-duration="2000"><img src="{{ asset("/assets/main2.jpeg") }}" alt=""></div>
                <div class="pt-4 md:w-2/4 lg:w-3/5" data-aos="fade-left" data-aos-duration="3000">
                    <h1 class="text-3xl text-center text-white lg:text-5xl lg:text-custom-green lg:mb-8 md:text-5xl md:mb-8 md:pr-2">Our Mission</h1>
                    <p class="text-xl text-center py-4 text-white md:text-3xl md:text-custom-green lg:text-3xl lg:text-custom-green">"We are here to promote positivity and to bring youth together for one mission."</p>
                </div>
            </div>
    </section>
    <section class="md:my-8 lg:my-8 gradient-three overflow-hidden" data-aos="zoom-out" data-aos-duration="2000">
        <div class="flex flex-col-reverse md:flex md:flex-row md:justify-around md:items-center md:w-3/4 lg:w-full lg:flex lg:flex-row-reverse lg:justify-between lg:items-center">
            <div class="{{--bg-img3--}}md:w-2/3 lg:w-[60%] lg:h-[35rem]" data-aos="fade-right" data-aos-duration="2000"><img src="{{ asset("/assets/main3.jpeg") }}" alt=""></div>
            <div class="pt-4 md:w-2/4 lg:w-3/5 lg:p-4" data-aos="fade-left" data-aos-duration="3000">
                <h1 class="text-3xl text-center text-white lg:text-5xl lg:text-custom-green lg:mb-8 md:text-5xl md:mb-8 md:pr-2">Our Vision</h1>
                <p class="text-white text-xl text-center my-8 md:text-3xl md:text-white lg:text-3xl lg:text-custom-green">"We promote education, health and self-confidence among youth specifically orphans, and to keep them active to make them able to be successful in every field of life."</p>
            </div>
        </div>
    </section>
    <section class="my-8">
        <h1 class="text-4xl py-10 text-center text-custom-green" data-aos="fade-up" data-aos-duration="1000">Major Working Areas</h1>
        <div class="grid grid-cols-1 gap-x-32 gap-y-16 lg:grid-cols-3 lg:gap-x-36 lg:gap-y-24 md:grid-cols-2 md:gap-x-32 md:gap-y-24 p-12">
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-down-right" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green mb-4">Capacity Building</h1>
                <p class="text-lg">Engaging youth in public speaking by organizing different activities like live sessions and workshops that helps them to gain enough confidence to speak in front of public gathering.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green mb-4">Youth Meetups</h1>
                <p class="text-lg">Meetups are arranged to provide an opportunity to youth to meet with the experts of their respective field.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-down-left" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green mb-4">Medical Camps</h1>
                <p class="text-lg">Medical Camps are arranged in different areas of Pakistan to provide free of cost medical facilities to the needy people in the locality.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-up-right" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green mb-4">Food Drives</h1>
                <p class="text-lg">Food Drives are also arranged by Karwan E Pakistan Trust Team in the backward areas to provide food to ones who can't afford it.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green mb-4">Orphanage Visits</h1>
                <p class="text-lg">Different orphanage visits are done along with the youth to acknowledge and to uplift orphan children. Food, Education and Clothes are also given to orphans during these visits.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-up-left" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green mb-4">Social Issues Awareness</h1>
                <p class="text-lg">Working on awareness of social issues by bringing it in the knowledge of Government officials and to find a way out of it. We also have a team of well known respected lawyers to take quick action where needed in these issues.</p>
            </div>
        </div>
    </section>
@endsection

