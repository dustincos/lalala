{{-- login and sign page --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'login signup')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    @livewireStyles
</head>
<body>
    @yield('content')
    @livewireScripts
</body>
</html>
