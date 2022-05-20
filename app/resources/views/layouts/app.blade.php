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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body>
<nav class="flex flex-col md:flex md:flex-row md:justify-between md:items-center md:p-3 lg:flex lg:flex-row lg:justify-between lg:items-center lg:p-3 text-xl bg-gray-50 sticky z-50 top-0">
    <div class="flex flex-row justify-between items-center px-4 md:flex md:flex-row md:justify-center md:items-center lg:flex lg:flex-row lg:justify-center lg:items-center lg:pr-3">
        <a href="{{ route('home') }}"><img  src="{{ asset("./assets/logo.png")  }}" class="w-28 h-28" alt=""></a>
        <button class="lg:hidden md:hidden" id="flip" onclick="mobileNav()"><span class="material-icons md-36 rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3" style="font-size: 36px">menu</span></button>
    </div>
    <div id="panel" class="flex flex-col justify-start md:flex md:flex-row md:justify-between md:items-center lg:flex lg:flex-row lg:justify-between lg:items-center ">
        <ul class="flex flex-col justify-start p-3 md:flex md:flex-row md:items-center md:space-x-2 lg:flex lg:flex-row lg:justify-start lg:items-center lg:space-x-4">
            <li class="my-4 md:my-0 lg:my-0"><a href="{{ route('home') }}" class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 {{ (request()->is('/')) ? 'border-2 border-custom-green' : '' }}"><button>Home</button></a></li>
            <li class="my-4 lg:my-0 md:my-0"><a href="{{ route('ourTeam') }}" class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 {{ (request()->is('OurTeam')) ? 'border-2 border-custom-green' : '' }}"><button>Our Team</button></a></li>
            <li class="my-4 lg:my-0 md:my-0"><a href="{{ route('magazine') }}" class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 {{ (request()->is('magazine')) ? 'border-2 border-custom-green' : '' }}"><button>Magazine Corner</button></a></li>
            <li class="my-4 lg:my-0 md:my-0"><a href="{{ route('Activities') }}" class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 {{ (request()->is('Activities')) ? 'border-2 border-custom-green' : '' }}"><button>Activities</button></a></li>
            <li class="my-4 lg:my-0 md:my-0"><a href="{{ route('Events') }}" class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 {{ (request()->is('Events')) ? 'border-2 border-custom-green' : '' }}"><button>Events</button></a></li>
            <li class="my-4 md:my-0 lg:my-0"><a href="{{ route('contactUs') }}" class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 {{ (request()->is('contactUs')) ? 'border-2 border-custom-green' : '' }}"><button>Contact Us</button></a></li>
        </ul>
        <ul class="pl-3">
            <li class="my-4 lg:my-0 md:my-0"><a href="{{ route('register') }}"><button class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 {{ (request()->is('register')) ? 'border-2 border-custom-green' : '' }}">Register</button></a></li>
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
<script type="text/javascript"  src="{{asset("js/effects.js")}}" defer></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://kit.fontawesome.com/bde7c7e20a.js" crossorigin="anonymous"></script>
<script>
    AOS.init();
</script>
@livewireScripts
</body>
</html>
