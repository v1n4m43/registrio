{{-----------------------------------------------DO NOT REMOVE---------------------------------------------------}}
@include('employee.birthcertificate.layouts.header')
@include('employee.birthcertificate.layouts.sidebar')

@section('content')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
            @include('employee.birthcertificate.layouts.navbar')

          <!-- Content wrapper -->
          <div class="content-wrapper">
{{----------------------------------------------//DO NOT REMOVE--------------------------------------------------}}





{{--------------------------------------------YOUR CONTENT HERE--------------------------------------------------}}
    <script>
        function updateTimeAndDate() {
            const now = new Date();
            const time = now.toLocaleTimeString();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const date = now.toLocaleDateString('en-US', options);
            document.getElementById('time').textContent = time;
            document.getElementById('date').textContent = date;
            setTimeout(updateTimeAndDate, 1000);
        }
        window.onload = updateTimeAndDate;
    </script>
            <div class="container-fluid pt-4 px-4">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <h1 style="font-size: 20px; margin-bottom: 10px;">Overview Dashboard</h1>
                        <h2 style="font-size: 15px; margin-top: 0;">General Dashboard</h2>
                    </div>
                    <div style="text-align: right;">
                        <span id="time" style="font-size: 18px;"></span><br>
                        <span id="date" style="font-size: 16px;"></span>
                    </div>
                </div>
                <hr>
                <h3></i></i><center>REGISTERED</center></h3>
                <div class="row g-4">

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class='bx bxs-baby-carriage'></i>
                            <div class="ms-3">
                                <p class="mb-2">Total&nbsp;Birth</p>
                                <h6 class="mb-0">{{ $totalBirthRegistered }}</h6>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <h3></i></i><center>REQUEST</center></h3>
                <div class="row g-4">

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class='bx bxs-baby-carriage'></i>
                            <div class="ms-3">
                                <p class="mb-2">Total&nbsp;Birth</p>
                                <h6 class="mb-0">{{ $totalBirthCount }}</h6>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Insert Here --}}

                </div>
            </div>

{{---------------------------------------------//END CONTENT-----------------------------------------------------}}



{{-----------------------------------------------DO NOT REMOVE---------------------------------------------------}}

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

@show

@include('employee.birthcertificate.layouts.footer')

{{----------------------------------------------//DO NOT REMOVE--------------------------------------------------}}
