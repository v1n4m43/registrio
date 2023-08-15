{{-----------------------------------------------DO NOT REMOVE---------------------------------------------------}}
@include('admin.layouts.header')
@include('admin.layouts.sidebar')

@section('content')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
            @include('admin.layouts.navbar')

          <!-- Content wrapper -->
          <div class="content-wrapper">
{{----------------------------------------------//DO NOT REMOVE--------------------------------------------------}}





{{--------------------------------------------YOUR CONTENT HERE--------------------------------------------------}}
{{-- @include('admin.registers.birth.create') --}}

   <div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-12">

         <div class="col-sm-12 col-xl-12">
             <div class="bg-light rounded h-100 p-4">
                 <div class="row">
                     <div class="col-9">
                   <h6 class="mb-4">Reports</h6>
               </div>
                 <hr></hr>
                    {{-- Insert here --}}
             </div>
         </div>
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

@include('admin.layouts.footer')

{{----------------------------------------------//DO NOT REMOVE--------------------------------------------------}}
