<!-- Header Begins -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Document')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">

    <!-- box icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=MuseoModerno:wght@200;300;400;500;600;700;800;900&family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header  -->
    <header>
        <a href="#" class="logo"><i class='bx bx-store'></i>Cake Shop</a>
        <ul class="navlist">
            <li><a href="{{route('home')}}" class="active">Home</a></li>
            <li><a href="{{route('home.about')}}">About Us</a></li>
            <li><a href="{{route('home.store')}}">Products</a></li>
            <li><a href="{{route('home.contact')}}">Contact Us</a></li>
        </ul>

        <div class="h-main">
            <a href="#" class="h-btn cart-icon" id="cart"><i class='bx bx-cart-alt'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <div class="bx bx-moon" id="darkmode"></div>
        </div>
    </header>
{{$slot}}
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><i class='bx bxl-facebook'></i></a>
                <a href=""><i class='bx bxl-instagram'></i></a>
                <a href=""><i class='bx bxl-youtube'></i></a>
                <a href=""><i class='bx bxl-telegram'></i></a>
                <a href=""><i class='bx bx-envelope'></i></a>
            </div>
            <div class="footerNav">
                <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('home.about')}}">About Us</a></li>
                <li><a href="{{route('home.contact')}}">Contact Us</a></li>
                <li><a href="">Our Team</a></li>
                </ul>
            </div>
            <div class="footer-info">
                <p>Copyright &copy;2023 Designed by <span class="designer">CS2 Designs</span></p>
            </div>
        </div>
    </footer>
    <!-- js file link -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>
</html>