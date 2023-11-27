<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file-->
    <link rel="stylesheet" href="{{asset('css/form.css')}}" />
    <link rel="stylesheet" href="{{asset('css/dash.css')}}" />
  </head>
  <body>
    <section class="sidebar">
        <a href="#" class="logo nav-link">
          <i class="fab fa-slack menu-btn"></i>
          <span class="text"></span>
        </a>
        <ul class="side-menu top">
          <li>
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="fas fa-border-all"></i>
              <span class="text">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="{{route('products.add')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <span class="text">Add Item</span>
            </a>
          </li>
          <li>
            <a href="{{route('products.index')}}" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
              <span class="text">My Store</span>
            </a>
          </li>
        </ul>
      
        <ul class="side-menu">
          <li>
            <a href="{{route('admin')}}">
              <i class="fas fa-cog"></i>
              <span class="text">Settings</span>
            </a>
          </li>
          <li>
            <a href="{{route('logout')}}" class="logout">
              <i class="fas fa-right-from-bracket"></i>
              <span class="text">Logout</span>
            </a>
          </li>
        </ul>
      </section>
      <section class="content">
        <nav>
          <form action="#">
            <div class="form-input">
              <input type="search" placeholder="search..." />
              <button class="search-btn">
                <i class="fas fa-search search-icon"></i>
              </button>
            </div>
          </form>
      
          <input type="checkbox" hidden id="switch-mode" />
          <label for="switch-mode" class="switch-mode"></label>
      
          <a href="#" class="profile">
            <img src="{{asset('img/client1.jpg')}}" alt="" />
          </a>
        </nav>
      
        <main>
          <div class="head-title">
            <div class="left">
              {{-- <h1>Dashboard</h1> --}}
              <ul class="breadcrumb">
                <li>
                  <a href="#">Dashboard</a>
                </li>
                <i class="fas fa-chevron-right"></i>
                <li>
                  <a href="#" class="active">@yield('title')</a>
                </li>
              </ul>
            </div>
      
            <a href="{{route('products.add')}}" class="download-btn">
              <i class="fas fa-plus"></i>
              <span class="text">Add Item</span>
            </a>
          </div>
@yield('content')
</main>
</section> 
<script src="{{asset('js/dash.js')}}"></script>
</body>
</html>