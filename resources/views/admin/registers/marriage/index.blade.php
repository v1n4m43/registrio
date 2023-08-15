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
@include('admin.registers.marriage.create')

   <div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-12">

         <div class="col-sm-12 col-xl-12">
             <div class="bg-light rounded h-100 p-4">
                 <div class="row">
                     <div class="col-9">
                   <h6 class="mb-4">Registration Marriage Certificate/License</h6>
               </div>
                 <div class="col-3">
                     <button type="button" class="btn btn-outline-warning m-2" data-bs-toggle="modal" data-bs-target="#MarriageRegisterModal">Marriage Registration</button>
                 </div>
                </div>
                 <hr></hr>
                  <div class="table-responsive">
                  <table class="table table-border" id="myDataTable">
                     <thead>
                         <tr>
                             <th scope="col">No</th>
                             <th scope="col">Last Name</th>
                             <th scope="col">First Name</th>
                             <th scope="col">Middle Name</th>
                             <th scope="col">Informant Name</th>
                             <th scope="col">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        {{-- @foreach($birthcerts as $birth)
                         <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $birth->child_lastname }}</td>
                          <td>{{ $birth->child_firstname }}</td>
                          <td>{{ $birth->child_middlename }}</td>
                          <td>{{ $birth->informant_name }}</td>

                          <td width="14%"><center><button class="btn btn-outline-primary btn-sm btn-edit" data-edit="{{ $birth->id }}" data-bs-toggle="modal" data-bs-target="#BirthEditModal"><i class="bi bi-plus-edit"></i> Edit</button>
                            @include('admin.registers.birth.edit')

                            <form onclick="return confirm('Are you sure? ')" class="d-inline" action="{{ route('birth.delete', $birth->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger btn-sm btn-del"><i class="bi bi-plus-trash"></i>Delete</button></center></td>
                         </tr>

                         @endforeach --}}
                     </tbody>
                 </table>
               </div>
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
