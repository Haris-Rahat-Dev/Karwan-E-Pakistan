<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karwan-e-Pakistan Trust</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset("./favicon-32x32.png") }}" type="image/x-icon">
    @livewireStyles
</head>
<body>
<div class="flex flex-row justify-center">
    <div id="panel2" class="py-6 px-4 w-80 h-screen bg-gray-100">
        <a  href="{{ route('dashboard') }}">
            <img src="{{ asset("./assets/logo.png")  }}" alt="" class="w-24 h-24 mt-4 mb-12">
        </a>
            <ul class="space-y-8 mt-6">
                <li><a href="{{ route('dashboard') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 hover:ml-4 transition ease-in-out delay-100 {{ (request()->is('dashboard')) ? 'border-2 border-custom-green' : '' }}">Home</a></li>
                <li><a href="{{ route('team') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 hover:ml-4 transition ease-in-out delay-100 {{ (request()->is('team')) ? 'border-2 border-custom-green' : '' }}">Manage Team Members</a></li>
                <li><a href="{{ route('activities') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 hover:ml-4 transition ease-in-out delay-100 {{ (request()->is('activities')) ? 'border-2 border-custom-green' : '' }}">Manage Activity</a></li>
                <li><a href="{{ route('events') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 hover:ml-4 transition ease-in-out delay-100 {{ (request()->is('events')) ? 'border-2 border-custom-green' : '' }}">Manage Event</a></li>
                <li><a href="{{ route('volunteers') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 hover:ml-4 transition ease-in-out delay-100 {{ (request()->is('volunteers')) ? 'border-2 border-custom-green' : '' }}">Manage Volunteers</a></li>
            </ul>
    </div>
    <div class="flex-1 h-[100vh] overflow-y-scroll">
        <nav class="p-4 bg-gray-100">
            <div class="flex flex-row justify-end items-center">
                <ul class="flex flex-row justify-evenly items-center space-x-4">
                    <li><a href="{{ route('dashboard') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 {{ (request()->is('dashboard')) ? 'border-2 border-custom-green' : '' }}">Home</a></li>
                    <li><a href="{{ route('team') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 {{ (request()->is('team')) ? 'border-2 border-custom-green' : '' }}">Manage Team Members</a></li>
                    <li><a href="{{ route('activities') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 {{ (request()->is('activities')) ? 'border-2 border-custom-green' : '' }}">Manage Activity</a></li>
                    <li><a href="{{ route('events') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 {{ (request()->is('events')) ? 'border-2 border-custom-green' : '' }}">Manage Event</a></li>
                    <li><a href="{{ route('volunteers') }}" class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 {{ (request()->is('volunteers')) ? 'border-2 border-custom-green' : '' }}">Manage Volunteers</a></li>
                    <li><form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"  class="text-xl rounded text-custom-green hover:text-white hover:bg-custom-green p-3 ">Logout</button>
                    </form></li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <footer class="py-6 bg-gray-100">
            <div class="flex flex-row justify-evenly items-center text-center pr-4 md:flex md:flex-row md:justify-between md:items-center lg:flex lg:flex-row lg:justify-between lg:items-center px-8">
                <div class="text-custom-green">
                    2021 ©; Copyrights Neural Age
                </div>
                <div>
                    <a href="{{ route('contactUs') }}" class="text-custom-green">Contact Us</a>
                </div>
                <div class="flex flex-col md:flex md:flex-row md:items-center lg:flex lg:flex-row lg:items-center space-x-2">
                    <p class="text-custom-green text-lg">Connect with Us</p>
                    <div class="flex flex-row space-x-2">
                        <a target="_blank" href="https://www.facebook.com/Karwaanepakistan1/"><i class="fab fa-facebook-f fa-lg p-2 rounded bg-[#1877F2] text-white hover:bg-custom-green"></i></a>
                        <a target="_blank" href="https://twitter.com/KarwanePakistan?t=Yzf65s-XwpVcthbLAOjJ9w&s=09"><i class="fab fa-twitter fa-lg p-2 rounded bg-[#1DA1F2] text-white hover:bg-custom-green"></i></a>
                        <a target="_blank" href=""><i class="fab fa-instagram fa-lg p-2 rounded bg-[#E4405F] text-white hover:bg-custom-green"></i></a>
                        <a target="_blank" href="https://youtube.com/channel/UCj-o5u7HtAqyaEJQFSuzWcw"><i class="fab fa-youtube fa-lg p-2 rounded bg-[#FF0000] text-white hover:bg-custom-green"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://kit.fontawesome.com/bde7c7e20a.js" crossorigin="anonymous"></script>
<script type="text/javascript"  src="{{asset("js/effects.js")}}" defer></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
@livewireScripts
</body>
</html>
