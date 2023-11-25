<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <!-- hero section -->

    <section class="hero">
        <div class="hero-text">
            <h1>Our fresh Cakes</h1>
            <h4>Cake Series</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic</p>

            <div class="hero-in">
                
                <div class="box">
                    <h3>Choco</h3>
                    <h5>499rs</h5>
                    <img src="{{asset('img/heroo.png')}}">
                </div>
          
                    <div class="box">
                        <h3>Choco</h3>
                        <h5>499rs</h5>
                        <img src="{{asset('img/heroo.png')}}">
                </div>
                <div class="box">
                    <h3>Choco</h3>
                    <h5>499rs</h5>
                    <img src="{{asset('img/heroo.png')}}">
                </div>
            </div>
        </div>

        <div class="hero-img">
            <img src="{{URL('img/heroo.png')}}">
        </div>
    </section>

        <div class="down-arrow">
            <i class='bx bx-down-arrow-alt'></i>
        </div>


    <section class="footer">
        <div class="bottom-container">
            <a class="footer-link" href="">LinkedIn</a>
            <a class="footer-link" href="">Twitter</a>
            <a class="footer-link" href="">Website</a>
            <p class="pclass">© 2010-2022 Menhaz<p>
          </div>
    </section>

    <!-- js file link -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="{{asset('js/index.js')}}"></script>


</body>

</html>