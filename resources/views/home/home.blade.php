<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('home/css/homestyle.css')}}">
    <title>Registrio</title>
</head>
<body>
    <body>
        <div class="container">
            <div class="left-side">
                <img src="{{ asset('home/css/logo.png') }}" alt="Logo" class="logo">
                <div class="time-date" id="timeDateContainer">

                </div>
            </div>
            <div class="right-side">
                <div class="welcome-text">WELCOME <br>TO<br> REGISTRIO</div>
                <div class="description-text">IRIGA CITY LOCAL CIVIL REGISTRAR WEBSITE</div>
                <a href="{{ route('info') }}">
                <button class="start-button">Let's Get Started</button>
                </a>
            </div>
        </div>
    <script src="{{ asset('script/script.js') }}"></script>
    <script>
        // JavaScript to display the time and date
        function updateTimeDate() {
            const timeDateContainer = document.getElementById("timeDateContainer");
            const currentDate = new Date();
            const time = currentDate.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
            const date = currentDate.toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric', year: 'numeric' });
            timeDateContainer.innerHTML = `<p>${time}</p><p>${date}</p>`;
        }

        // Call the function initially and update every second
        updateTimeDate();
        setInterval(updateTimeDate, 1000);
    </script>
</body>
</html>
