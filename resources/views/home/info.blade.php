@include('home.layout.header')
<link rel="stylesheet" href="{{ asset('home/css/infostyle.css')}}">
    <div class="container">
        <div class="column">
            <div class="logo-container">
                <img src="{{ asset('home/css/logo.png') }}" alt="REGISTRIO Logo" class="logo-img">
                <div class="logotext">REGISTRIO</div>
            </div>
            <p align="justify" class="description">
                Need <b>Registration</b> or <b>Request</b> a Copy of <b>Birth, Marriage,</b> and <b>Death?</b> <br> <br>
                There is no need to fill out forms manually, just fill in all the necessary information for registration. <br> <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus varius risus, vel lobortis sapien efficitur lacinia. Mauris vitae ante venenatis, tincidunt sapien et, consequat augue. Etiam aliquet orci vel felis interdum gravida. Etiam semper posuere felis quis fringilla. Sed ac tincidunt ex, at viverra est. Maecenas volutpat, elit vitae gravida fringilla, dui nibh mattis purus, eget hendrerit enim massa non urna. Nullam risus leo, posuere vel accumsan vitae, dapibus convallis mi.
            </p>
        </div>
        <div class="column2">
            <img src="{{ asset('home/css/docs.png') }}" alt="Big Logo" class="big-logo-img">
            <div class="what-text">What do you need?</div>
            <div class="button-container">
                <a href="{{ route('registration.index') }}"><button class="button">Registration</button>
            </div>
            <div class="button-container">
                <a href="{{ route('request.index') }}"><button class="buttons">Request of Copy</button>
            </div>
        </div>
    </div>
</body>
</html>
