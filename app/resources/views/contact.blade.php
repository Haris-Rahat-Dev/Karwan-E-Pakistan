@extends('layouts.app')
@section('content')

<div>
    <div class="flex flex-col justify-center items-center space-y-4 md:flex md:flex-row md:justify-around md:items-center lg:flex lg:flex-row lg:justify-evenly lg:items-center py-12">
        <div>
            <p class="text-center text-lg md:text-xl lg:text-2xl text-custom-green font-bold">Number:</p>
            <p class="text-center md:text-md lg:text-lg">+923447787076</p>
        </div>
        <div>
            <p class="text-center text-lg md:text-xl lg:text-2xl text-custom-green font-bold">Email:</p>
            <p class="text-center md:text-md lg:text-lg">info@karwanepakistan.org</p>
        </div>
        <div class="md:w-2/5 ">
            <p class="text-center text-lg md:text-xl text-2xl text-custom-green font-bold">Office Location:</p>
            <p class="text-center md:text-md text-lg">KEP Trust HQ, Dodhay Plaza, Jinnah Avenue, Blue Area, Islamabad</p>
        </div>
        <div>
            <p class="text-center text-lg md:text-xl lg:text-2xl text-custom-green font-bold">Work Timings:</p>
            <p class="text-center md:text-md lg:text-lg">Sunday OFF<br>Monday to Saturday 10:00 AM-5:00 PM</p>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center md:flex md:flex-row md:justify-start md:items-center lg:flex lg:flex-row lg:justify-start lg:items-center gradient-four" data-aos="zoom-in" data-aos-duration="2000">
        <div class="md:flex-1 md:bg-center md:bg-cover md:w-full md:h-[36.5rem] lg:flex-1 lg:bg-center lg:bg-cover lg:h-[36.5rem] lg:w-full" style="background-image: url({{asset("./assets/contactUs-pic.webp")}})" data-aos="fade-right" data-aos-duration="2000">
        </div>
        <div class="w-full md:68 md:w-96 lg:w-2/5" {{--style="width: 60rem"--}} data-aos="fade-left" data-aos-duration="2000">
            <livewire:contact-form/>
        </div>
    </div>
</div>
@endsection
