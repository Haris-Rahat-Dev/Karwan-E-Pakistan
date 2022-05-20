<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karwan-e-Pakistan Trust</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset("./favicon-32x32.png") }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/bde7c7e20a.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50">
<div class="h-screen flex flex-col justify-center items-center" >
    <div class="flex flex-col justify-evenly items-center p-16 space-y-6 rounded-lg shadow-2xl {{--w-[30rem]--}}">
        <div>
            <img src="{{ asset("./assets/logo.png")  }}" alt="" class="w-24 h-24">
        </div>
        <div>
            <h2 class="text-3xl text-center text-custom-green">Login</h2>
        </div>
        <div class="w-[18rem]">
            <form action="{{ route('Login') }}" method="post" class="space-y-6">
                @csrf
                <div class="relative">
                    <input type="text" placeholder="Email" name="email" class="border-2 border-custom-green bg-gray-00 pl-8 rounded-lg pt-4 pb-4 pr-4 w-full @error('email') border-red-500 @endError "/>
                    <i class="fas fa-lg fa-envelope absolute left-2 top-5 text-custom-green"></i>
                </div>
                @error('email')
                <div class="my-4">
                    <p class="text-lg text-red-500">{{ $message  }}</p>
                </div>
                @endError
                <div class="relative">
                    <input type="password" placeholder="Password" name="password" class="border-2 border-custom-green bg-gray-00 pl-8 rounded-lg pt-4 pb-4 pr-4 w-full @error('password') border-red-500 @endError "/>
                    <i class="fas fa-lock fa-lg absolute left-2 top-5 text-custom-green"></i>
                </div>
                @error('password')
                <div class="my-4">
                    <p class="text-lg text-red-500">{{ $message  }}</p>
                </div>
                @endError
                @error('error')
                <div class="my-4">
                    <p class="text-lg text-red-500">{{ $message  }}</p>
                </div>
                @endError
                <div>
                    <label>
                        Remember Me
                        <input type="checkbox" class=" border-2 border-custom-green custom-green" name="rememberMe">
                    </label>
                </div>
                <input type="submit" value="Login" class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 border border-custom-green"/>
            </form>
        </div>
        <div>Not Signed Up? Let's get you <a href="{{ route('RegisterView') }}" class="text-custom-green underline underline-offset-1">Registered</a></div>
    </div>
</div>
</body>
</html>
