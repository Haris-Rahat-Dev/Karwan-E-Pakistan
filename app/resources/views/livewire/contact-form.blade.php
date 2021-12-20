<div class="w-full flex flex-col justify-center items-center my-8 md:w-[90%] md:py-24 lg:w-[90%] lg:py-24" >
    @if($show)
        <div class="py-6 text-custom-green text-center text-2xl flex flex-row justify-center items-center" data-aos="fade-left" data-aos-duration="2000">
            <div class="w-[21rem] bg-white rounded flex flex-row justify-between items-center">
                <p class="pl-4">{{ session('message') }}</p>
                <span class="material-icons md-24 p-4 cursor-pointer hover:bg-custom-green hover:text-white hover:border hover:border-white" wire:click="showFalse">close</span>
            </div>
        </div>
    @endif
    <form wire:submit.prevent="submitForm" action="" class="bg-white border-1 border-custom-green shadow-2xl rounded p-12" style="z-index: 99">
        <h1 class="md:text-xl lg:text-3xl text-custom-green text-center mb-10">Don't feel like registering? Send us a Message, and we'll get back to you as soon as possible!</h1>
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
            <textarea type="text" placeholder="Message" wire:model.defer="message" name="message" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
            @error('message')
            <div class="my-4">
                <p class="text-xl text-red-500">{{ $message  }}</p>
            </div>
            @endError
        </div>
        <div wire:loading wire:target="submitForm" class="pb-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(255, 255, 255) none repeat scroll 0% 0%; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="50" cy="50" fill="none" stroke="#06713b" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                </circle></svg></div>
        <div class="mb-4 flex flex-col justify-center ">
            <button type="submit" class="flex flex-row justify-center items-center text-xl rounded text-custom-green border border-2 border-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3">
                <span class="material-icons md-24 pr-2">send</span>
                Message
            </button>
        </div>
    </form>
</div>
