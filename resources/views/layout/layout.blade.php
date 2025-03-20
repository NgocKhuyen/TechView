<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | TechView</title>
    
    <!-- Embed fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo2.png')}}">
    <!-- Nhúng font awesome  -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('/css/grid.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/product.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css')}}">

</head>
<body>
    @include('layout.header')

    <main>
        <div class="container">@yield('body')</div>
    </main>

    @include('layout.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/responsive.js') }}"></script>
</body>
</html>