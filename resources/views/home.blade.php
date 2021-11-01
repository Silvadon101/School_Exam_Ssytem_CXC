<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CXC | Home</title>
    {{-- -----Tailwind Css----- --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    {{-- ------navbar------ --}}
    @include('layouts.includes.nav')

    
    <div class="flex justify-center">
        <h1 class="text-red-800 text-7xl">Welcome</h1>
    </div>
</body>
</html>