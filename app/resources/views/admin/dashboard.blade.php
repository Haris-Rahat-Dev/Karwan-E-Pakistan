@extends('layouts.admin')
@section('content')
<div class="h-[85vh]">
    <div class="py-12">
        <div class="w-auto mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-lg">
                <h5 class="text-center text-3xl text-custom-green mt-8 mb-6">Welcome {{ auth()->user()->name }}</h5>
                <div class="flex flex-row justify-evenly items-center">
                    <div>
                        <div class="bg-gray-100 flex justify-evenly items-center">
                            <a href="{{ route('team') }}">
                                <div class="rounded-md shadow-lg overflow-hidden hover:shadow-xl transform hover:scale-105 duration-500">
                                    <i class="fas fa-user text-[10rem] text-custom-green p-6"></i>
                                    <div class="p-4 bg-white">
                                        <h2 class="mt-4 font-bold text-custom-green text-center">Add Team</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=" bg-gray-100 flex justify-center items-center">
                            <a href="{{ route('activities') }}">
                                <div class="rounded-md shadow-lg overflow-hidden hover:shadow-xl transform hover:scale-105 duration-500">
                                    <i class="fas fa-briefcase text-[10rem] text-custom-green p-6"></i>
                                    <div class="p-4 bg-white">
                                        <h2 class="mt-4 font-bold text-custom-green text-center">Add Activity</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center py-8">
                    <div class="bg-gray-100 flex justify-center items-center">
                        <a href="{{ route('volunteers') }}">
                            <div class="rounded-md shadow-lg overflow-hidden hover:shadow-xl transform hover:scale-105 duration-500">
                                <i class="fas fa-hands-helping text-[10rem] text-custom-green p-6"></i>
                                <div class="p-4 bg-white">
                                    <h2 class="mt-4 font-bold text-custom-green text-center">View Volunteers</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
