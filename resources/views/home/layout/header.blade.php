<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('home/css/header.css')}}">
    <title>Registrio</title>
</head>
<body>
    <header>
        <div class="logo">
            <span style="padding-right: 15px;">☰</span>REGISTRIO
        </div>
        <nav>
            <ul class="menu">
                <li><a href="#"><b>Home</b></a></li>
                <li><a href="#"><b>About</b></a></li>
                <li><a href="{{ url('login') }}"><b>Admin</b></a></li>
                <li><a href="#"><b>Contact Us</b></a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
