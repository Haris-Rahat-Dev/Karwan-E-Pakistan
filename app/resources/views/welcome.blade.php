@extends('layouts.app')
@section('content')
    <section>
    {{--<div class="sliderAx w-auto h-auto pb-3">
        <div id="slider-1" class="w-auto h-auto">
            <div class="w-[28rem] bg-cover bg-center lg:bg-cover lg:bg-center lg:h-[60rem] lg:w-full md:bg-cover md:bg-center md:h-[55rem] md:w-full text-white py-24 px-10 object-fill" style="background-image: url({{ asset("./assets/slide1.jpeg")}})">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#" class="bg-purple-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                </div>
            </div>
            <br>
        </div>
        <div id="slider-2" class="w-auto h-auto">
            <div class="w-[28rem] bg-cover bg-center lg:bg-cover lg:bg-top lg:h-[60rem] lg:w-full md:bg-cover md:bg-center md:h-[55rem] md:w-full text-white py-24 px-10 object-fill" style="background-image: url({{asset("./assets/slide2.jpeg")}})">
                <p class="font-bold text-sm uppercase">Services</p>
                <p class="text-3xl font-bold">Hello world</p>
                <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                <a href="#" class="bg-purple-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
            </div>
            <br>
        </div>
    </div>
    <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="border-2 border-custom-green bg-custom-green rounded-full w-4 p-2 "></button>
        <button id="sButton2" onclick="sliderButton2() " class="border-2 border-custom-green rounded-full w-4 p-2"></button>
    </div>--}}
        <div class="slideshow-container w-full relative ">
            <div class="mySlides fade">
                <img src="{{ asset("./assets/slide1.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
                <div class="text">Caption Text</div>
            </div>
            <div class="mySlides fade">
                <img src="{{asset("./assets/slide2.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
                <div class="text">Caption Two</div>
            </div>
            <div class="mySlides fade">
                <img src="{{asset("./assets/slide3.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
                <div class="text">Caption Three</div>
            </div>
            <div class="mySlides fade">
                <img src="{{asset("./assets/slide4.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
                <div class="text">Caption four</div>
            </div>
            <div class="mySlides fade">
                <img src="{{asset("./assets/slide5.jpeg")}}" class="h-[35rem] md:h-[55rem] lg:h-[60rem]" style="width:100%">
                <div class="text">Caption five</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
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
    <section class="py-24 my-8 gradient-one overflow-hidden" data-aos="zoom-in" data-aos-duration="2000">
        <div class="flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center items-center md:flex md:flex-row md:justify-around md:items-center lg:flex lg:flex-row lg:justify-around lg:items-center px-8">
                <div class="w-2/3 text-custom-green md:pr-6" data-aos="fade-right" data-aos-duration="2000">
                    <h1 class="text-lg text-center text-white md:text-4xl md:text-custom-green md:mb-8 lg:text-4xl lg:text-custom-green lg:mb-8">Our mission is to uplift orphan children and youth in every aspect or field of their life despite their religion, caste, area</h1>
                    <p class="text-md text-white text-center md:text-xl md:text-custom-green lg:text-xl lg:text-custom-green">This noble initiative was taken to make the youth independent and to uplift the orphan children of a society that is always being the backend. This step helps to bring positivity and unity in the society which is the need of the hour.</p>
                </div>
                <div class="pt-10 md:w-2/4 md:pl-10 lg:w-2/3 lg:pl-10" data-aos="fade-left" data-aos-duration="3000">
                    <p class="text-custom-green text-md w-[20rem] pt-10 md:text-xl md:text-white lg:text-xl lg:text-white lg:w-[40rem]">Karwan E Pakistan mainly aims to promote education, health, self-confidence, to arrange sponsorship and education expenses for orphans and needy ones and to keep them active in the modern technical and military field, to bring street children and orphans into the national mainstream, to make a network of youth in Pakistan and outside Pakistan who is active in the national interest and to bring the positive side of Pakistan to the world.</p>
                    <h2 class="text-custom-green my-4 md:text-xl md:my-4 md:text-white lg:text-2xl lg:my-8 lg:text-white font-bold">Join the Cause!</h2>
                    <a href="" class="mb-8"><button class="px-4 py-3 text-lg border-2 rounded text-custom-green bg-white hover:text-white hover:border-white hover:bg-custom-green">Register</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-22 my-8 md:py-36 md:my-8 lg:py-36 lg:my-8 gradient-two overflow-hidden" data-aos="zoom-out" data-aos-duration="2000">
            <div class="md:flex md:flex-col md:justify-center md:items-center lg:flex lg:flex-col lg:justify-center lg:items-center">
                <div class="flex flex-col justify-center items-center md:flex md:flex-row md:justify-around md:items-center md:w-3/4 lg:w-3/4 lg:flex lg:flex-row lg:justify-around lg:items-center px-8">
                    <div class="w-1/2 text-custom-green py-12 md:w-2/3 md:text-center md:text-white lg:w-2/3 lg:text-center lg:text-white" data-aos="fade-right" data-aos-duration="2000">
                        <h1 class="text-3xl text-center lg:text-5xl lg:mb-8 md:text-5xl md:mb-8 md:pr-2">Our Mission</h1>
                    </div>
                    <div class="w-1/2 md:w-2/3 md:pl-10 lg:w-2/3 lg:pl-10" data-aos="fade-left" data-aos-duration="3000">
                        <p class="text-xl text-center py-4 text-white md:text-3xl md:text-custom-green lg:text-3xl lg:text-custom-green">"We are here to promote positivity and to bring youth together for one mission."</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="py-22 my-8 md:py-36 md:my-8 lg:py-36 lg:my-8 gradient-three overflow-hidden" data-aos="zoom-out" data-aos-duration="2000">
        <div class="flex flex-col justify-center items-center ">
            <div class="flex flex-col justify-center items-center md:w-3/4 md:flex md:flex-row md:justify-around md:items-center lg:w-3/4 lg:flex lg:flex-row lg:justify-around lg:items-center px-8">
                <div class="text-center text-white md:w-2/3 md:text-center md:text-custom-green lg:w-2/3 lg:text-center lg:text-custom-green" data-aos="fade-right" data-aos-duration="2000">
                    <h1 class="text-3xl text-custom-green mt-12 mb-12 md:text-5xl md:mb-8 lg:text-5xl lg:mb-8">Our Vision</h1>
                </div>
                <div class="mt-6 md:w-2/3 md:pl-10 lg:w-2/3 lg:pl-10" data-aos="fade-left" data-aos-duration="3000">
                    <p class="text-white text-xl text-center my-12 md:text-3xl md:text-white lg:text-3xl lg:text-white">"We promote education, health and self-confidence among youth specifically orphans, and to keep them active to make them able to be successful in every field of life."</p>
                </div>
            </div>
        </div>
    </section>
    <section class="my-8">
        <h1 class="text-4xl py-10 text-center text-custom-green" data-aos="fade-up" data-aos-duration="1000">Major Working Areas</h1>
        <div class="grid grid-cols-1 gap-x-32 gap-y-16 lg:grid-cols-3 lg:gap-x-36 lg:gap-y-24 md:grid-cols-2 md:gap-x-32 md:gap-y-24 p-12">
            <div class="border border2 border-custom-green shadow-xl p-8" data-aos="fade-down-right" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green">Capacity Building</h1>
                <p class="text-lg">Engaging youth in public speaking by organizing different activities like live sessions and workshops that helps them to gain enough confidence to speak in front of public gathering.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green">Youth Meetups</h1>
                <p class="text-lg">Meetups are arranged to provide an opportunity to youth to meet with the experts of their respective field.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-down-left" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green">Medical Camps</h1>
                <p class="text-lg">Medical Camps are arranged in different areas of Pakistan to provide free of cost medical facilities to the needy people in the locality.</p>
            </div>
            <div class="border border2 border-custom-green shadow-xl p-8" data-aos="fade-up-right" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green">Food Drives</h1>
                <p class="text-lg">Food Drives are also arranged by Karwan E Pakistan Trust Team in the backward areas to provide food to ones who can't afford it.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green">Orphanage Visits</h1>
                <p class="text-lg">Different orphanage visits are done along with the youth to acknowledge and to uplift orphan children. Food, Education and Clothes are also given to orphans during these visits.</p>
            </div>
            <div class="border border-2 border-custom-green shadow-xl p-8" data-aos="fade-up-left" data-aos-duration="1000">
                <h1 class="text-2xl font-bold text-custom-green">Social Issues Awareness</h1>
                <p class="text-lg">Working on awareness of social issues by bringing it in the knowledge of Government officials and to find a way out of it. We also have a team of well known respected lawyers to take quick action where needed in these issues.</p>
            </div>
        </div>
    </section>
@endsection
