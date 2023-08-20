<div class="modal fade" id="MarriageRegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-plus-circle"></i> MARRIAGE REGISTRATION</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="col-lg-11 mb-2 mt-1" id="mgs-marriage" style="margin-left: 4%"></div>
        <div class="modal-body">

          <form method="POST" enctype="multipart/form-data">

                       <div class="row justify-content-md-center">
                          <div id="msg-marriage" style=""></div>
                          <div class="col-sm-12 col-md-12 col-lg-10">
                               <hr>
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce; color: black;font-size: 1.2rem;margin-top: 2%"><center><b>GROOM INFORMATION</b></center></div>

                                    <div class="row">

                                        <div class="col-lg-4 col-md-6 col-sm-12" >
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input type="text" class="form-control" name="groom_lastname" id="groom_lastname" autocomplete="off">
                                                <span class="groom_lastname-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12" >
                                            <div class="form-group">
                                                <label>First Name:</label>
                                                <input type="text" class="form-control" name="groom_firstname" id="groom_firstname" autocomplete="off">
                                                <span class="groom_firstname-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="text" class="form-control" name="groom_middlename" id="groom_middlename" minlength="10" maxlength="10" autocomplete="off">
                                            <span class="groom_middlename-error"></span>
                                        </div>
                                        </div>

                                    </div>

                                <div class="row mb-3 mt-1">
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label>Date of Birth:</label>
                                            <input type="date" class="form-control" name="groom_dob" id="groom_dob" autocomplete="off">
                                            <span class="groom_dob-error"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input type="text" class="form-control" name="groom_age" id="groom_age" placeholder="" autocomplete="off">
                                            <span class="groom_age-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label>Sex:</label>
                                            <select class="form-control" name="groom_sex" id="groom_sex">
                                                <option value="">&larr; Please Select &rarr;</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="groom_sex-error"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="groom_citizenship" id="groom_citizenship" autocomplete="off">
                                            <span class="groom_citizenship"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Residence:</label>
                                            <input type="text" class="form-control" name="groom_residence" id="groom_residence" autocomplete="off">
                                            <span class="groom_residence-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12" >
                                        <div class="form-group">
                                            <label>Place of Birth:</label>
                                            <input type="text" class="form-control" name="groom_place_of_birth" id="groom_place_of_birth" placeholder="City/Municipality-province-Country" autocomplete="off">
                                            <span class="groom_place_of_birth-error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <input type="text" class="form-control" name="groom_religion" id="groom_religion" autocomplete="off">
                                            <span class="groom_religion-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Civil Status:</label>
                                            <input type="text" class="form-control" name="groom_civil_status" id="groom_civil_status" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_civil_status-error"></span>
                                        </div>
                                    </div>

                                </div>

                              <br>
                              <hr>

                              <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>GROOM'S FATHER DETAILS</b></center></div>

                                    <div class="row">

                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input type="text" class="form-control" name="groom_father_lastname" id="groom_father_lastname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                                <span class="groom_father_lastname-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name:</label>
                                                <input type="text" class="form-control" name="groom_father_firstname" id="groom_father_firstname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                                <span class="groom_father_firstname-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Middle Name:</label>
                                                <input type="email" class="form-control" name="groom_father_middlename" id="groom_father_middlename" placeholder=""  autocomplete="off">
                                                <span class="groom_father_middlename-error"></span>
                                            </div>
                                        </div>

                                    </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="groom_father_citizenship" id="groom_father_citizenship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_father_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Residence:</label>
                                            <input type="text" class="form-control" name="groom_father_residence" id="groom_father_residence" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_father_residence-error"></span>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <hr>


                              <!-- ////////////////////////////////GAP//////////////////////// -->
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>GROOM'S MOTHER DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" name="groom_mother_lastname" id="groom_mother_lastname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_mother_lastname-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" name="groom_mother_firstname" id="groom_mother_firstname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_mother_firstname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="email" class="form-control" name="groom_mother_middlename" id="groom_mother_middlename" placeholder=""  autocomplete="off">
                                            <span class="groom_mother_middlename-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="groom_mother_citizenship" id="groom_mother_citizenship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_mother_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Residence:</label>
                                            <input type="text" class="form-control" name="groom_mother_residence" id="groom_mother_residence" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_mother_residence-error"></span>
                                        </div>
                                    </div>

                                </div>


                                <br>
                                <hr>


                              <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>GROOM PARENTAL CONSENT DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Person who gave consent and advise:</label>
                                            <input type="text" class="form-control" name="groom_parental_consent_advice" id="groom_parental_consent_advice" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_parental_consent_advice-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Relationship:</label>
                                            <input type="text" class="form-control" name="groom_relationship" id="groom_relationship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_relationship-error"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="groom_consent_giver_residence" id="groom_consent_giver_residence" placeholder=""  autocomplete="off">
                                            <span class="groom_consent_giver_residence-error"></span>
                                        </div>
                                    </div>

                                </div>


                                <br>
                                <hr>

                                <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>GROOM PREVIOUS MARRIAGE DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>How was it dissolved:</label>
                                            <input type="text" class="form-control" name="groom_previous_marriage_dissolution_method" id="groom_previous_marriage_dissolution_method" placeholder=""  autocomplete="off">
                                            <span class="groom_previous_marriage_dissolution_method-error"></span>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Place where Dissolved:</label>
                                            <input type="text" class="form-control" name="groom_place_dissolution" id="groom_place_dissolution" placeholder=""  autocomplete="off">
                                            <span class="groom_place_dissolution-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    
                                    
                            
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Date when dissolved:</label>
                                        <input type="date" class="form-control" name="groom_date_dissolution" id="groom_date_dissolution" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                        <span class="groom_date_dissolution-error"></span>
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Degree of reltionship of contracting parties:</label>
                                            <input type="text" class="form-control" name="groom_degree_of_relationship" id="groom_degree_of_relationship" placeholder=""  autocomplete="off">
                                            <span class="groom_degree_of_relationship-error"></span>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <hr>

    {{-- BRIDE INFORMATION --}}

            <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce; color: black;font-size: 1.2rem;margin-top: 2%"><center><b>BRIDE INFORMATION</b></center></div>

                                    <div class="row">

                                        <div class="col-lg-4 col-md-6 col-sm-12" >
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input type="text" class="form-control" name="bride_lastname" id="bride_lastname" autocomplete="off">
                                                <span class="bride_lastname-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name:</label>
                                                <input type="text" class="form-control" name="bride_firstname" id="bride_firstname" autocomplete="off">
                                                <span class="bride_firstname-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="text" class="form-control" name="bride_middlename" id="bride_middlename" minlength="10" maxlength="10" autocomplete="off">
                                            <span class="bride_middlename-error"></span>
                                        </div>
                                        </div>

                                    </div>

                                <div class="row mb-3 mt-1">
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label>Date of Birth:</label>
                                            <input type="date" class="form-control" name="bride_dob" id="bride_dob" autocomplete="off">
                                            <span class="bride_dob-error"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input type="text" class="form-control" name="bride_age" id="bride_age" placeholder="" autocomplete="off">
                                            <span class="bride_age-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label>Sex:</label>
                                            <select class="form-control" name="bride_sex" id="bride_sex">
                                                <option value="">&larr; Please Select &rarr;</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <span class="bride_sex-error"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="bride_citizenship" id="bride_citizenship" autocomplete="off">
                                            <span class="bride_citizenship"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Residence:</label>
                                            <input type="text" class="form-control" name="bride_residence" id="bride_residence" autocomplete="off">
                                            <span class="bride_residence-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12" >
                                        <div class="form-group">
                                            <label>Place of Birth:</label>
                                            <input type="text" class="form-control" name="bride_place_of_birth" id="bride_place_of_birth" placeholder="City/Municipality-province-Country" autocomplete="off">
                                            <span class="bride_place_of_birth-error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <input type="text" class="form-control" name="bride_religion" id="bride_religion" autocomplete="off">
                                            <span class="bride_religion-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Civil Status:</label>
                                            <input type="text" class="form-control" name="bride_civil_status" id="bride_civil_status" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_civil_status-error"></span>
                                        </div>
                                    </div>

                                </div>

                              <br>
                              <hr>

                              <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>BRIDE'S FATHER DETAILS</b></center></div>

                                    <div class="row">

                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name:</label>
                                                <input type="text" class="form-control" name="bride_father_firstname" id="bride_father_firstname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                                <span class="bride_father_firstname-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Middle Name:</label>
                                                <input type="text" class="form-control" name="bride_father_middlename" id="bride_father_middlename" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                                <span class="bride_father_middlename-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input type="email" class="form-control" name="bride_father_lastname" id="bride_father_lastname" placeholder=""  autocomplete="off">
                                                <span class="bride_father_lastname-error"></span>
                                            </div>
                                        </div>

                                    </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="bride_father_citizenship" id="bride_father_citizenship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_father_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Residence:</label>
                                            <input type="text" class="form-control" name="bride_father_residence" id="bride_father_residence" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_father_residence-error"></span>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <hr>


                              <!-- ////////////////////////////////GAP//////////////////////// -->
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>BRIDE'S MOTHER DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" name="bride_mother_firstname" id="bride_mother_firstname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_mother_firstname-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="text" class="form-control" name="bride_mother_middlename" id="bride_mother_middlename" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_mother_middlename-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="email" class="form-control" name="bride_mother_lastname" id="bride_mother_lastname" placeholder=""  autocomplete="off">
                                            <span class="bride_mother_lastname-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="bride_mother_citizenship" id="bride_mother_citizenship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_mother_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Residence:</label>
                                            <input type="text" class="form-control" name="bride_mother_residence" id="bride_mother_residence" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_mother_residence-error"></span>
                                        </div>
                                    </div>

                                </div>


                                <br>
                                <hr>


                              <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>BRIDE PARENTAL CONSENT DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Person who gave consent and advise:</label>
                                            <input type="text" class="form-control" name="bride_parental_consent_advice" id="bride_parental_consent_advice" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_parental_consent_advice-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Relationship:</label>
                                            <input type="text" class="form-control" name="bride_relationship" id="bride_relationship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="bride_relationship-error"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="bride_consent_giver_residence" id="bride_consent_giver_residence" placeholder=""  autocomplete="off">
                                            <span class="bride_consent_giver_residence-error"></span>
                                        </div>
                                    </div>


                                    {{-- THIS LINE IS LACK OF DATABASE MIGRATION OF CITIZENSHIP --}}
                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Giver's Residence:</label>
                                            <input type="text" class="form-control" name="groom_consent_giver_residence" id="groom_consent_giver_residence" placeholder=""  autocomplete="off">
                                            <span class="groom_consent_giver_residence-error"></span>
                                        </div>
                                    </div> --}}

                                </div>


                                <br>
                                <hr>

                                <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>BRRDE PREVIOUS MARRIAGE DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>How was it dissolved:</label>
                                            <input type="text" class="form-control" name="bride_previous_marriage_dissolution_method" id="bride_previous_marriage_dissolution_method" placeholder=""  autocomplete="off">
                                            <span class="bride_previous_marriage_dissolution_method-error"></span>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Place where Dissolved:</label>
                                            <input type="text" class="form-control" name="bride_place_dissolution" id="bride_place_dissolution" placeholder=""  autocomplete="off">
                                            <span class="bride_place_dissolution-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    
                                    
                            
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Date when dissolved:</label>
                                        <input type="date" class="form-control" name="bride_date_dissolution" id="bride_date_dissolution" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                        <span class="bride_date_dissolution-error"></span>
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Degree of reltionship of contracting parties:</label>
                                            <input type="text" class="form-control" name="bride_degree_of_relationship" id="bride_degree_of_relationship" placeholder=""  autocomplete="off">
                                            <span class="bride_degree_of_relationship-error"></span>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <hr>

          {{-- END OF BRIDE'S INFO --}}
                                <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>REGISTERED BY THE CIVIL REGISTRAR:</b></center></div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Signature:</label>
                                            <input type="text" class="form-control" name="registered_by_signature" id="registered_by_signature" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="registered_by_signature-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control" name="registered_by_name" id="registered_by_name" placeholder=""  autocomplete="off">
                                            <span class="registered_by_name-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" class="form-control" name="registered_by_date" id="registered_by_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="registered_by_date-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>

                      </div>
                    </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" id="submit_marriage" class="btn btn-outline-warning">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){

              $('#submit_marriage').on('click', function(e){
                 e.preventDefault();
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                     const groom_firstname = document.querySelector('input[id=groom_firstname]').value;
                     console.log(groom_firstname);

                     const groom_middlename = document.querySelector('input[id=groom_middlename]').value;
                     console.log(groom_middlename);

                     const groom_lastname = document.querySelector('input[id=groom_lastname]').value;
                     console.log(groom_lastname);

                     const groom_sex = $('#groom_sex option:selected').val();
                     console.log(groom_sex);

                     const groom_dob = document.querySelector('input[id=groom_dob]').value;
                     console.log(groom_dob);

                     const groom_place_of_birth = document.querySelector('input[id=groom_place_of_birth]').value;
                     console.log(groom_place_of_birth);

                     const groom_citizenship = document.querySelector('input[id=groom_citizenship]').value;
                     console.log(groom_citizenship);

                     const groom_religion = document.querySelector('input[id=groom_religion]').value;
                     console.log(groom_religion);

                     const groom_civil_status = document.querySelector('input[id=groom_civil_status]').value;
                     console.log(groom_civil_status);

                    //Groom's Parent's Details

                     const groom_father_firstname = document.querySelector('input[id=groom_father_firstname]').value;
                     console.log(groom_father_firstname);

                     const groom_father_middlename = document.querySelector('input[id=groom_father_middlename]').value;
                     console.log(groom_father_middlename);

                     const groom_father_lastname = document.querySelector('input[id=groom_father_lastname]').value;
                     console.log(groom_father_lastname);

                     const groom_father_citizenship = document.querySelector('input[id=groom_father_citizenship]').value;
                     console.log(groom_father_citizenship);

                     const groom_father_residence = document.querySelector('input[id=groom_father_residence]').value;
                     console.log(groom_father_residence);

                     const groom_mother_firstname = document.querySelector('input[id=groom_mother_firstname]').value;
                     console.log(groom_mother_firstname);

                     const groom_mother_middlename = document.querySelector('input[id=groom_mother_middlename]').value;
                     console.log(groom_mother_middlename);

                     const groom_mother_lastname = document.querySelector('input[id=groom_mother_lastname]').value;
                     console.log(groom_mother_lastname);

                     const groom_mother_citizenship = document.querySelector('input[id=groom_mother_citizenship]').value;
                     console.log(groom_mother_citizenship);

                     const groom_mother_residence = document.querySelector('input[id=groom_mother_residence]').value;
                     console.log(groom_mother_residence);

                     const groom_parental_consent_advice = document.querySelector('input[id=groom_parental_consent_advice]').value;
                     console.log(groom_parental_consent_advice);

                     const groom_relationship = document.querySelector('input[id=groom_relationship]').value;
                     console.log(groom_relationship);

                     const groom_consent_giver_residence = document.querySelector('input[id=groom_consent_giver_residence]').value;
                     console.log(groom_consent_giver_residence);


                     //Groom's Previous marriage details
                     const groom_previous_marriage_dissolution_method = document.querySelector('input[id=groom_previous_marriage_dissolution_method]').value;
                     console.log(groom_previous_marriage_dissolution_method);

                     const groom_place_dissolution = document.querySelector('input[id=groom_place_dissolution]').value;
                     console.log(groom_place_dissolution);

                     const groom_date_dissolution = document.querySelector('input[id=groom_date_dissolution]').value;
                     console.log(groom_date_dissolution);

                     const groom_degree_of_relationship = document.querySelector('input[id=groom_degree_of_relationship]').value;
                     console.log(groom_degree_of_relationship);


                     //Bride info

                     const bride_firstname = document.querySelector('input[id=bride_firstname]').value;
                     console.log(bride_firstname);

                     const bride_middlename = document.querySelector('input[id=bride_middlename]').value;
                     console.log(bride_middlename);

                     const bride_lastname = document.querySelector('input[id=bride_lastname]').value;
                     console.log(bride_lastname);

                     const bride_sex = $('#bride_sex option:selected').val();
                     console.log(bride_sex);

                     const bride_dob = document.querySelector('input[id=bride_dob]').value;
                     console.log(bride_dob);

                     const bride_age = document.querySelector('input[id=bride_age]').value;
                     console.log(bride_age);

                     const bride_place_of_birth = document.querySelector('input[id=bride_place_of_birth]').value;
                     console.log(bride_place_of_birth);

                     const bride_citizenship = document.querySelector('input[id=bride_citizenship]').value;
                     console.log(bride_citizenship);

                     const bride_residence = document.querySelector('input[id=bride_residence]').value;
                     console.log(bride_residence);

                     const bride_religion = document.querySelector('input[id=bride_religion]').value;
                     console.log(bride_religion);

                     const bride_civil_status = document.querySelector('input[id=bride_civil_status]').value;
                     console.log(bride_civil_status);

                    //Groom's Parent's Details

                     const bride_father_firstname = document.querySelector('input[id=bride_father_firstname]').value;
                     console.log(bride_father_firstname);

                     const bride_father_middlename = document.querySelector('input[id=bride_father_middlename]').value;
                     console.log(bride_father_middlename);

                     const bride_father_lastname = document.querySelector('input[id=bride_father_lastname]').value;
                     console.log(bride_father_lastname);

                     const bride_father_citizenship = document.querySelector('input[id=bride_father_citizenship]').value;
                     console.log(bride_father_citizenship);

                     const bride_father_residence = document.querySelector('input[id=bride_father_residence]').value;
                     console.log(bride_father_residence);

                     const bride_mother_firstname = document.querySelector('input[id=bride_mother_firstname]').value;
                     console.log(bride_mother_firstname);

                     const bride_mother_middlename = document.querySelector('input[id=bride_mother_middlename]').value;
                     console.log(bride_mother_middlename);

                     const bride_mother_lastname = document.querySelector('input[id=bride_mother_lastname]').value;
                     console.log(bride_mother_lastname);

                     const bride_mother_citizenship = document.querySelector('input[id=bride_mother_citizenship]').value;
                     console.log(bride_mother_citizenship);

                     const bride_mother_residence = document.querySelector('input[id=bride_mother_residence]').value;
                     console.log(bride_mother_residence);

                     const bride_parental_consent_advice = document.querySelector('input[id=bride_parental_consent_advice]').value;
                     console.log(bride_parental_consent_advice);

                     const bride_relationship = document.querySelector('input[id=bride_relationship]').value;
                     console.log(bride_relationship);

                     const bride_consent_giver_residence = document.querySelector('input[id=bride_consent_giver_residence]').value;
                     console.log(bride_consent_giver_residence);


                     //Groom's Previous marriage details
                     const bride_previous_marriage_dissolution_method = document.querySelector('input[id=bride_previous_marriage_dissolution_method]').value;
                     console.log(bride_previous_marriage_dissolution_method);

                     const bride_place_dissolution = document.querySelector('input[id=bride_place_dissolution]').value;
                     console.log(bride_place_dissolution);

                     const bride_date_dissolution = document.querySelector('input[id=bride_date_dissolution]').value;
                     console.log(bride_date_dissolution);

                     const bride_degree_of_relationship = document.querySelector('input[id=bride_degree_of_relationship]').value;
                     console.log(bride_degree_of_relationship);

                 


                    var data = new FormData(this.form);

                    data.append('groom_firstname', groom_firstname);
                    data.append('groom_middlename', groom_middlename);
                    data.append('groom_lastname', groom_lastname);
                    data.append('groom_dob', groom_dob);
                    data.append('groom_age', groom_age);
                    data.append('groom_place_of_birth', groom_place_of_birth);
                    data.append('groom_sex', groom_sex);
                    data.append('groom_citizenship', groom_citizenship);
                    data.append('groom_residence', groom_residence);
                    data.append('groom_religion', groom_religion);
                    data.append('groom_civil_status', groom_civil_status);

                    data.append('groom_father_firstname', groom_father_firstname);
                    data.append('groom_father_middlename', groom_father_middlename);
                    data.append('groom_father_lastname', groom_father_lastname);
                    data.append('groom_father_citizenship', groom_father_citizenship);
                    data.append('groom_father_residence', groom_father_residence);
                    data.append('groom_mother_firstname', groom_mother_firstname);
                    data.append('groom_mother_middlename', groom_mother_middlename);
                    data.append('groom_mother_lastname', groom_mother_lastname);
                    data.append('groom_mother_citizenship', groom_mother_citizenship);
                    data.append('groom_mother_residence', groom_mother_residence);

                    data.append('groom_parental_consent_advice', groom_parental_consent_advice);
                    data.append('groom_relationship', groom_relationship);
                    data.append('groom_consent_giver_residence', groom_consent_giver_residence);
                    
                    data.append('groom_previous_marriage_dissolution_method', groom_previous_marriage_dissolution_method);
                    data.append('groom_place_dissolution', groom_place_dissolution);
                    data.append('groom_date_dissolution', groom_date_dissolution);
                    data.append('groom_degree_of_relationship', groom_degree_of_relationship);

                    //ggg

                    data.append('bride_firstname', bride_firstname);
                    data.append('bride_middlename', bride_middlename);
                    data.append('bride_lastname', bride_lastname);
                    data.append('bride_dob', bride_dob);
                    data.append('bride_age', bride_age);
                    data.append('bride_place_of_birth', bride_place_of_birth);
                    data.append('bride_sex', bride_sex);
                    data.append('bride_citizenship', bride_citizenship);
                    data.append('bride_residence', bride_residence);
                    data.append('bride_religion', bride_religion);
                    data.append('bride_civil_status', bride_civil_status);

                    data.append('bride_father_firstname', bride_father_firstname);
                    data.append('bride_father_middlename', bride_father_middlename);
                    data.append('bride_father_lastname', bride_father_lastname);
                    data.append('bride_father_citizenship', bride_father_citizenship);
                    data.append('bride_father_residence', bride_father_residence);
                    data.append('bride_mother_firstname', bride_mother_firstname);
                    data.append('bride_mother_middlename', bride_mother_middlename);
                    data.append('bride_mother_lastname', bride_mother_lastname);
                    data.append('bride_mother_citizenship', bride_mother_citizenship);
                    data.append('bride_mother_residence', bride_mother_residence);

                    data.append('bride_parental_consent_advice', bride_parental_consent_advice);
                    data.append('bride_relationship', bride_relationship);
                    data.append('bride_consent_giver_residence', bride_consent_giver_residence);
                    
                    data.append('bride_previous_marriage_dissolution_method', bride_previous_marriage_dissolution_method);
                    data.append('bride_place_dissolution', bride_place_dissolution);
                    data.append('bride_date_dissolution', bride_date_dissolution);
                    data.append('bride_degree_of_relationship', bride_degree_of_relationship);



                    $('#groom_firstname-error').html("");
                    $('#groom_middlename-error').html("");
                    $('#child_middlename-error').html("");
                    $('#groom_lastname-error').html("");
                    $('#groom_dob-error').html("");
                    $('#groom_age-error').html("");
                    $('#groom_place_of_birth-error').html("");
                    $('#groom_sex-error').html("");
                    $('#groom_citizenship-error').html("");
                    $('#groom_residence-error').html("");
                    $('#groom_religion-error').html("");
                    $('#groom_civil_status-error').html("");

                    $('#groom_father_firstname-error').html("");
                    $('#groom_father_middlename-error').html("");
                    $('#groom_father_lastname-error').html("");
                    $('#groom_father_citizenship-error').html("");
                    $('#groom_father_residence-error').html("");
                    $('#groom_mother_firstname-error').html("");
                    $('#groom_mother_middlename-error').html("");
                    $('#groom_mother_lastname-error').html("");
                    $('#groom_mother_citizenship-error').html("");
                    $('#groom_mother_residence-error').html("");

                    $('#groom_parental_consent_advice-error').html("");
                    $('#groom_relationship-error').html("");
                    $('#groom_consent_giver_residence-error').html("");

                    $('#groom_previous_marriage_dissolution_method-error').html("");
                    $('#groom_place_dissolution-error').html("");
                    $('#groom_date_dissolution-error').html("");
                    $('#groom_degree_of_relationship-error').html("");

                    $('#bride_firstname-error').html("");
                    $('#bride_middlename-error').html("");
                    $('#bride_lastname-error').html("");
                    $('#bride_dob-error').html("");
                    $('#bride_age-error').html("");
                    $('#bride_place_of_birth-error').html("");
                    $('#bride_sex-error').html("");
                    $('#bride_citizenship-error').html("");
                    $('#bride_residence-error').html("");
                    $('#bride_religion-error').html("");
                    $('#bride_civil_status-error').html("");

                    
                    $('#bride_father_firstname-error').html("");
                    $('#bride_father_middlename-error').html("");
                    $('#bride_father_lastname-error').html("");
                    $('#bride_father_citizenship-error').html("");
                    $('#bride_father_residence-error').html("");
                    $('#bride_mother_firstname-error').html("");
                    $('#bride_mother_middlename-error').html("");
                    $('#bride_mother_lastname-error').html("");
                    $('#bride_mother_citizenship-error').html("");
                    $('#bride_mother_residence-error').html("");

                    $('#bride_parental_consent_advice-error').html("");
                    $('#bride_relationship-error').html("");
                    $('#bride_consent_giver_residence-error').html("");

                    $('#bride_previous_marriage_dissolution_method-error').html("");
                    $('#bride_place_dissolution-error').html("");
                    $('#bride_date_dissolution-error').html("");
                    $('#bride_degree_of_relationship-error').html("");

                    $.ajax({
                            url: '{{ route('marriage.store') }}',
                            method: 'post',
                            data: data,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',

                            success: function(response){

                            console.log(response);
                                if(response.errors) {
                                    if(response.errors.groom_firstname){
                                        $('#groom_firstname-error').html(response.errors.groom_firstname[0]);
                                    }
                                    if(response.errors.groom_middlename){
                                        $('#groom_middlename-error').html(response.errors.groom_middlename[0]);
                                    }
                                    if(response.errors.groom_lastname){
                                        $('#groom_lastname-error').html(response.errors.groom_lastname[0]);
                                    }
                                    if(response.errors.groom_dob){
                                        $('#groom_dob-error').html(response.errors.groom_dob[0]);
                                    }
                                      if(response.errors.groom_age){
                                        $('#groom_age-error').html(response.errors.groom_age[0]);
                                    }
                                    if(response.errors.groom_place_of_birth){
                                        $('#groom_place_of_birth-error').html(response.errors.groom_place_of_birth[0]);
                                    }
                                    if(response.errors.groom_sex){
                                        $('#groom_sex-error').html(response.errors.groom_sex[0]);
                                    }
                                    if(response.errors.groom_citizenship){
                                        $('#groom_citizenship-error').html(response.errors.groom_citizenship[0]);
                                    }
                                    if(response.errors.groom_residence){
                                        $('#groom_residence-error').html(response.errors.groom_residence[0]);
                                    }
                                    if(response.errors.groom_religion){
                                        $('#groom_religion-error').html(response.errors.groom_religion[0]);
                                    }
                                    if(response.errors.groom_civil_status){
                                        $('#groom_civil_status-error').html(response.errors.groom_civil_status[0]);
                                    }
                                    if(response.errors.groom_father_firstname){
                                        $('#groom_father_firstname-error').html(response.errors.groom_father_firstname[0]);
                                    }
                                    if(response.errors.groom_father_middlename){
                                        $('#groom_father_middlename-error').html(response.errors.groom_father_middlename[0]);
                                    }
                                    if(response.errors.groom_father_lastname){
                                        $('#groom_father_lastname-error').html(response.errors.groom_father_lastname[0]);
                                    }
                                    if(response.errors.groom_father_citizenship){
                                        $('#groom_father_citizenship-error').html(response.errors.groom_father_citizenship[0]);
                                    }
                                    if(response.errors.groom_father_residence){
                                        $('#groom_father_residence-error').html(response.errors.groom_father_residence[0]);
                                    }
                                    if(response.errors.groom_mother_firstname){
                                        $('#groom_mother_firstname-error').html(response.errors.groom_mother_firstname[0]);
                                    }
                                    if(response.errors.groom_mother_middlename){
                                        $('#groom_mother_middlename-error').html(response.errors.groom_mother_middlename[0]);
                                    }
                                    if(response.errors.groom_mother_lastname){
                                        $('#groom_mother_lastname-error').html(response.errors.groom_mother_lastname[0]);
                                    }
                                    if(response.errors.groom_mother_citizenship){
                                        $('#groom_mother_citizenship-error').html(response.errors.groom_mother_citizenship[0]);
                                    }
                                    if(response.errors.groom_mother_residence){
                                        $('#groom_mother_residence-error').html(response.errors.groom_mother_residence[0]);
                                    }
                                    if(response.errors.groom_parental_consent_advice){
                                        $('#groom_parental_consent_advice-error').html(response.errors.groom_parental_consent_advice[0]);
                                    }
                                    if(response.errors.groom_relationship){
                                        $('#groom_relationship-error').html(response.errors.groom_relationship[0]);
                                    }
                                    if(response.errors.groom_consent_giver_residence){
                                        $('#groom_consent_giver_residence-error').html(response.errors.groom_consent_giver_residence[0]);
                                    }
                                    if(response.errors.groom_previous_marriage_dissolution_method){
                                        $('#groom_previous_marriage_dissolution_method-error').html(response.errors.groom_previous_marriage_dissolution_method[0]);
                                    }
                                    if(response.errors.groom_place_dissolution){
                                        $('#groom_place_dissolution-error').html(response.errors.groom_place_dissolution[0]);
                                    }

                                    if(response.errors.groom_date_dissolution){
                                        $('#groom_date_dissolution-error').html(response.errors.groom_date_dissolution[0]);
                                    }
                                    if(response.errors.groom_degree_of_relationship){
                                        $('#groom_degree_of_relationship-error').html(response.errors.groom_degree_of_relationship[0]);
                                    }
                                    if(response.errors.bride_firstname){
                                        $('#bride_firstname-error').html(response.errors.bride_firstname[0]);
                                    }
                                    if(response.errors.bride_middlename){
                                        $('#bride_middlename-error').html(response.errors.bride_middlename[0]);
                                    }
                                    if(response.errors.bride_lastname){
                                        $('#bride_lastname-error').html(response.errors.bride_lastname[0]);
                                    }
                                    if(response.errors.father_occupation){
                                        $('#father_occupation-error').html(response.errors.father_occupation[0]);
                                    }
                                    if(response.errors.bride_dob){
                                        $('#bride_dob-error').html(response.errors.bride_dob[0]);
                                    }
                                    if(response.errors.bride_age){
                                        $('#bride_age-error').html(response.errors.bride_age[0]);
                                    }
                                    if(response.errors.bride_place_of_birth){
                                        $('#bride_place_of_birth-error').html(response.errors.bride_place_of_birth[0]);
                                    }
                                    if(response.errors.bride_sex){
                                        $('#bride_sex-error').html(response.errors.bride_sex[0]);
                                    }
                                    if(response.errors.bride_citizenship){
                                        $('#bride_citizenship-error').html(response.errors.bride_citizenship[0]);
                                    }

                                    if(response.errors.bride_residence){
                                        $('#bride_residence-error').html(response.errors.bride_residence[0]);
                                    }
                                    if(response.errors.bride_religion){
                                        $('#bride_religion-error').html(response.errors.bride_religion[0]);
                                    }
                                    if(response.errors.bride_civil_status){
                                        $('#bride_civil_status-error').html(response.errors.bride_civil_status[0]);
                                    }
                                    if(response.errors.bride_father_firstname){
                                        $('#bride_father_firstname-error').html(response.errors.bride_father_firstname[0]);
                                    }


                                    if(response.errors.bride_father_middlename){
                                        $('#bride_father_middlename-error').html(response.errors.bride_father_middlename[0]);
                                    }
                                    if(response.errors.bride_father_lastname){
                                        $('#bride_father_lastname-error').html(response.errors.bride_father_lastname[0]);
                                    }
                                    if(response.errors.bride_father_citizenship){
                                        $('#bride_father_citizenship-error').html(response.errors.bride_father_citizenship[0]);
                                    }
                                    if(response.errors.bride_father_residence){
                                        $('#bride_father_residence-error').html(response.errors.bride_father_residence[0]);
                                    }
                                    if(response.errors.bride_mother_firstname){
                                        $('#bride_mother_firstname-error').html(response.errors.bride_mother_firstname[0]);
                                    }

                                    if(response.errors.bride_mother_middlename){
                                        $('#bride_mother_middlename-error').html(response.errors.bride_mother_middlename[0]);
                                    }
                                    if(response.errors.bride_mother_lastname){
                                        $('#bride_mother_lastname-error').html(response.errors.bride_mother_lastname[0]);
                                    }
                                    if(response.errors.bride_mother_citizenship){
                                        $('#bride_mother_citizenship-error').html(response.errors.bride_mother_citizenship[0]);
                                    }
                                    if(response.errors.bride_mother_residence){
                                        $('#bride_mother_residence-error').html(response.errors.bride_mother_residence[0]);
                                    }

                                    if(response.errors.bride_parental_consent_advice){
                                        $('#bride_parental_consent_advice-error').html(response.errors.bride_parental_consent_advice[0]);
                                    }
                                    if(response.errors.bride_relationship){
                                        $('#bride_relationship-error').html(response.errors.bride_relationship[0]);
                                    }
                                    if(response.errors.bride_consent_giver_residence){
                                        $('#bride_consent_giver_residence-error').html(response.errors.bride_consent_giver_residence[0]);
                                    }
                                    if(response.errors.bride_previous_marriage_dissolution_method){
                                        $('#bride_previous_marriage_dissolution_method-error').html(response.errors.bride_previous_marriage_dissolution_method[0]);
                                    }

                                    if(response.errors.bride_place_dissolution){
                                        $('#bride_place_dissolution-error').html(response.errors.bride_place_dissolution[0]);
                                    }
                                    if(response.errors.bride_date_dissolution){
                                        $('#bride_date_dissolution-error').html(response.errors.bride_date_dissolution[0]);
                                    }
                                    if(response.errors.bride_degree_of_relationship){
                                        $('#bride_degree_of_relationship-error').html(response.errors.bride_degree_of_relationship[0]);
                                    }
                                }

                              if(response.status == "200"){
                                $('#msg_marruage').html("<div class='alert alert-success' role='alert'><i class='fa fa-check-circle'></i> Marriage License was Successfully Added!</div>")
                                setTimeout(function() {
                                        window.location.reload();
                                    }, 2000);
                                $("#wholeForm")[0].reset();
                              }
                             if(response.errors) {
                                console.log("Failed");

                            }

                        }
                    })
                });

            });
        </script>
