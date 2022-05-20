@extends('layouts.app')
@section('content')
    <div>
        <div class="flex flex-row justify-center items-center">
            <h1 class="my-8 p-4 text-2xl md:my-8 md:text-3xl lg:my-8 lg:text-4xl text-white border-2 border-custom-green bg-custom-green w-[25rem] rounded text-center">KEP Supreme Council</h1>
        </div>
        <div class="grid grid-cols-1 gap-y-8 md:grid-cols-3 md:gap-x-11 md:gap-y-12 lg:grid-cols-5 lg:gap-x-32 lg:gap-y-16 p-12">
            @foreach($team as $one)
                <div class="border border-custom-green shadow-2xl text-center rounded" data-aos="fade-up" data-aos-duration="{{ 600+($loop->index*100) }}">
                    <img src="{{ asset('storage/'.$one->picture)  }}" class="w-full h-64" alt="">
                    <div class="p-4">
                        <p class="text-lg">{{ $one->name }}</p>
                        <p class="font-bold text-xl text-custom-green">{{ $one->role }}</p>
                        <p class="text-xl">Karwan E Pakistan Trust</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
