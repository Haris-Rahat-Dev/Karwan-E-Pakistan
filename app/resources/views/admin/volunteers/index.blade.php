@extends('layouts.admin')
@section('content')
<div>
    <h1 class="text-4xl text-custom-green text-center my-12">List of Volunteers</h1>
    <div class="w-full px-24 my-8">
        @if($volunteers->isNotEmpty())
            <table class="table-auto w-full my-24">
                <thead class="text-md tracking-wide font-semibold uppercase text-gray-400 bg-gray-50">
                <tr>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Name</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Email</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Address</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">University/Institute</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Degree</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">WhatsApp No.</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">State</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">City</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Interested Department</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Profile Pic</div>
                    </th>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Action</div>
                    </th>
                </tr>
                </thead>
                <tbody class="text-md  tracking-normal divide-y divide-gray-100">
                @foreach($volunteers as $volunteer)
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->name }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->email }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->residence_hostel_address }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->university_or_institute }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->degree }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->whatsapp_no }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->state->name }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->city->name }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center py-4">
                                <div class="font-medium text-gray-800">{{ $volunteer->interested_department }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full w-24 h-24" src="{{ asset('storage/'.$volunteer->profile_pic) }}" alt=""></div>
                        </td>
                        <td class="p-2 whitespace-nowrap flex flex-row justify-center items-center">
                            <form action="{{ route('deleteVolunteer', $volunteer) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xl rounded text-red-500 border border-red-500 bg-gray-50 hover:text-white hover:bg-red-500 p-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <span>
                {{$volunteers->links() }}
            </span>
        @else
            <div class="h-[70vh]">
                <h1 class="text-2xl text-custom-green text-center my-12">No Volunteers Available to show</h1>
            </div>
        @endif
    </div>
</div>
@endsection
