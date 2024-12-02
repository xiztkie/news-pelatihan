<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full bg-white">
    <section class="flex items-center justify-center h-screen bg-gray-100">
        <div class="w-full max-w-md p-6 space-y-4 bg-white rounded">
            <div class="flex items-center justify-start">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-12" alt="Flowbite Logo">
                    <span class="self-center text-4xl font-semibold whitespace-nowrap">Flowbite</span>
                </a>
            </div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <p class="text-gray-600">Portal Website</p>
                    <h2 class="text-xl font-bold">Sign In For Dashboard</h2>
                </div>
                <div class="mb-4">
                    <label for="">Username / Email</label>
                    <input
                        class="w-full p-4 text-sm text-gray-600 border border-gray-200 rounded bg-gray-50 focus:outline-none"
                        name="login" type="text" placeholder="Username / Email ">
                </div>
                <div class="mb-4">
                    <label for="">Password</label>
                    <input
                        class="w-full p-4 text-sm text-gray-600 border border-gray-200 rounded bg-gray-50 focus:outline-none"
                        name="password" type="password" placeholder="Password">
                </div>
                <div class="mb-4">
                    <button
                        class="w-full py-4 text-sm font-bold transition duration-200 bg-blue-600 rounded hover:bg-blue-700 text-gray-50">Sign
                        In</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
