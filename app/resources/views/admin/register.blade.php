<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Karwan-e-Pakistan Trust</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset("./favicon-32x32.png") }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/bde7c7e20a.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50">
<div class="flex flex-col justify-center items-center mt-32">
    <div class="w-3/12 bg-white p-6 rounded-lg shadow-2xl">
        <div class="flex flex-row justify-center items-center">
            <img src="{{ asset("./assets/logo.png")  }}" alt="" class="w-24 h-24">
        </div>
        <h1 class="text-2xl text-custom-green text-center mb-4">Register</h1>
        <form action="{{ route('Register')}}" method="post">
            @csrf
            <div class="mb-4">
                <input type="text" name="name" placeholder="Your Name" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('name') border-red-500 @endError">
            </div>
            @error('name')
            <div class="my-4">
                <p class="text-lg text-red-500">{{ $message  }}</p>
            </div>
            @endError
            <div class="mb-4">
                <input type="text" name="email" placeholder="Your Email" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('email') border-red-500 @endError ">
            </div>
            @error('email')
            <div class="my-4">
                <p class="text-lg text-red-500">{{ $message  }}</p>
            </div>
            @endError
            <div class="mb-4">
                <input type="password" name="password" placeholder="Password" class="bg-gray-00 border-2 border-custom-green w-full p-4 rounded-lg @error('password') border-red-500 @endError">
            </div>
            @error('password')
            <div class="my-4">
                <p class="text-lg text-red-500">{{ $message  }}</p>
            </div>
            @endError
            <div>
                <button type="submit" class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 border border-custom-green">Register</button>
            </div>
        </form>
    </div>
    <div class="m-6">
        <a href="{{ route('LoginView') }}"><button class="text-xl rounded text-custom-green bg-gray-50 hover:text-white hover:bg-custom-green p-3 border border-custom-green">Back to Login</button></a>
    </div>
</div>
</body>
</html>
