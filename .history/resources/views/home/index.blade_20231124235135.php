<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontendcss/index.css">
    <title>Responsive Navbar</title>
</head>
<body>

    <div class="navbar">
        <a href="javascript:void(0);" class="icon" onclick="toggleNav()">&#9776;</a>
        <nav>
            <a href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About Us</a>
            <a href="#products">Products</a>
        </nav>
    </div>

    <!-- Your page content goes here -->

    <script>
        function toggleNav() {
            var nav = document.querySelector('nav');
            nav.classList.toggle('responsive');
        }
    </script>

</body>
</html>
