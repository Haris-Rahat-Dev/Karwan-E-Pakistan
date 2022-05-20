<div>
    @if($show)
        <div class="py-6 text-white text-center text-2xl flex flex-row justify-center items-center" data-aos="fade-bottom" data-aos-duration="3000">
            <div class="w-96 bg-custom-green rounded flex flex-row justify-between items-center">
                <p class="pl-4">{{ session('message') }}</p>
                <span class="material-icons md-24 p-4 cursor-pointer border border-custom-green hover:bg-white hover:text-custom-green hover:border hover:border-custom-green" wire:click="showFalse">close</span>
            </div>
        </div>
    @endif
    <h1 class="text-2xl text-center my-12 md:text-4xl md:text-center md:my-8 md:text-custom-green lg:text-4xl lg:text-center lg:my-8 text-custom-green">Join Us Now!</h1>
    <div class="flex flex-col justify-center items-center my-6">
        <form wire:submit.prevent="submitForm" method="post" class="w-3/5 h-auto md:w-3/12 md:h-auto lg:w-3/12 lg:h-auto">
            @csrf
            <div class="mb-4">
                <input type="text" placeholder="Name" wire:model.defer="name" name="name" value="{{ old('name') }}" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('name') border-red-500 @enderror">
                @error('name')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>
            <div class="mb-4">
                <input type="email" placeholder="Email" wire:model.defer="email" name="email" value="{{ old('email') }}" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('email') border-red-500 @enderror">
                @error('email')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Residence/Hostel Address" wire:model.defer="residence_hostel_address" value="{{ old('residence_hostel_address') }}" name="residence_hostel_address" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('residence_hostel_address') border-red-500 @enderror">
                @error('residence_hostel_address')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>
            <div class="mb-4">
                <input type="text" placeholder="University/Institute" wire:model.defer="university_or_institute" value="{{ old('university_or_institute') }}"  name="university_or_institute" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('university_or_institute') border-red-500 @enderror">
                @error('university_or_institute')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Degree" name="degree" wire:model.defer="degree" value="{{ old('degree') }}" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('degree') border-red-500 @enderror">
                @error('degree')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>
            <div class="mb-4">
                <input type="text" placeholder="Whatsapp No." wire:model.defer="whatsapp_no" value="{{ old('whatsapp_no') }}" name="whatsappNo" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('whatsapp_no') border-red-500 @enderror">
                @error('whatsapp_no')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>
            <div class="mb-4">
                <select name="state"  wire:model="state" value="{{ old('state') }}" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('state') border-red-500 @enderror">
                    <option value="">Select Province</option>
                    @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name  }}</option>
                    @endforeach
                </select>
                @error('state')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>
            {{--<div class="mb-4">
                <select name="city"  wire:model="city" value="{{ old('city') }}" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('city') border-red-500 @enderror">
                    <option value="">Select City</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name  }}</option>
                    @endforeach
                </select>
                @error('city')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>--}}
            <div class="mb-4">
                <select  name="interested_department" wire:model.defer="interested_department" class="bg-gray-00 border-2  border-custom-green w-full p-4 rounded-lg @error('interested_department') border-red-500 @enderror">
                    <option value="">Your Department of Interest</option>
                    <option value="Social Media Department">Social Media Department</option>
                    <option value="IT Department">IT Department</option>
                    <option value="Graphic Designing">Graphic Designing</option>
                    <option value="Hosting">Hosting</option>
                    <option value="Event Management">Event Management</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Social Services">Social Services</option>
                    <option value="Law Department">Law Department</option>
                    <option value="Medical Department">Medical Department</option>
                </select>
                @error('interested_department')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
            </div>
            <div class="mb-4">
                <label for="file" class="pl-2 text-xl text-custom-green">Upload Profile Pic</label>
                <input type="file" id="file" name="profile_pic" wire:model="profile_pic" placeholder="Upload Profile Pic" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg mt-4 @error('profile_pic') border-red-500 @enderror" >
                @error('profile_pic')
                <div class="my-4">
                    <p class="text-xl text-red-500">{{ $message  }}</p>
                </div>
                @endError
                <div wire:loading wire:target="profile_pic" class="pt-4"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(255, 255, 255) none repeat scroll 0% 0%; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <circle cx="50" cy="50" fill="none" stroke="#06713b" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                    </circle></svg></div>
            </div>
            <div class="mb-4 flex flex-col justify-center">
                <button type="submit" class="flex flex-row justify-center items-center text-xl rounded text-white border border-2 border-custom-green bg-custom-green hover:bg-green-700 p-3">
                    <div wire:loading wire:target="submitForm"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                </circle></svg></div>Register</button>
            </div>
        </form>
    </div>
</div>
