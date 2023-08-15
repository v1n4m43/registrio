<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('login/style.css')}}">
    <title>Registrio</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="{{ asset('login/logo.png') }}" alt="logo" style="max-width: 150px; height: auto;">
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="{{ route('dashboard') }}" class="link active">ADMIN PANEL</a></li>
                <li><a href="{{ route('ebdashboard') }}" class="link active">EMPLOYEE BIRTH</a></li>
                <li><a href="{{ route('emdashboard') }}" class="link active">EMPLOYEE MARRIAGE</a></li>
                <li><a href="{{ route('eddashboard') }}" class="link active">EMPLOYEE DEATH</a></li>
            </ul>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->
    <div class="form-box">

        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <header>LOGIN</header>
            </div>

            {{-- <form method="POST" action="{{ route('login') }}"> --}}
                @csrf

                <div class="input-box">
                    <input type="text" class="input-field" name="email" placeholder="Username or Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <i class="bx bx-user"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password" required autocomplete="current-password">
                    <i class="bx bx-lock-alt"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-box">
                    <input type="submit" class="submit" value="Sign In">
                </div>
            </form>
        </div>

</div>

</body>
</html>
