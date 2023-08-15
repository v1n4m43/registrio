<div class="modal fade" id="MarriageRegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-plus-circle"></i> BIRTH REGISTRATION</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
           <div class="col-lg-11 mb-2 mt-1" id="mgs-student" style="margin-left: 4%"></div>
        <div class="modal-body">

          <form method="POST" enctype="multipart/form-data">

                       <div class="row justify-content-md-center">
                          <div id="msg-student" style=""></div>
                          <div class="col-sm-12 col-md-12 col-lg-10">
                               <hr>
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce; color: black;font-size: 1.2rem;margin-top: 2%"><center><b>GROOM INFORMATION</b></center></div>

                                    <div class="row">

                                        <div class="col-lg-4 col-md-6 col-sm-12" id="lnamez">
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input type="text" class="form-control" name="groom_lastname" id="groom_lastname" autocomplete="off">
                                                <span class="groom_lastname-error"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12" id="lnamez">
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
                                            <label>Sex:</label>
                                            <select class="form-control" name="groom_sex" id="groom_sex">
                                                <option value="">&larr; Please Select &rarr;</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <span class="child_sex-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label>Date of Birth:</label>
                                            <input type="date" class="form-control" name="groom_place_of_birth" id="groom_place_of_birth" autocomplete="off">
                                            <span class="groom_place_of_birth-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input type="text" class="form-control" name="groom_age" id="groom_age" placeholder="" autocomplete="off">
                                            <span class="groom_age-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Place of Birth:</label>
                                            <input type="email" class="form-control" name="groom_place_of_birth" id="groom_place_of_birth" placeholder=""  autocomplete="off">
                                            <span class="groom_place_of_birth-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="groom_citizenship" id="groom_citizenship" autocomplete="off">
                                            <span class="groom_citizenship"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Residence:</label>
                                            <input type="text" class="form-control" name="groom_residence" id="groom_residence" autocomplete="off">
                                            <span class="groom_residence-error"></span>
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
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>PARENTAL CONSENT DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Advice:</label>
                                            <input type="text" class="form-control" name="groom_parental_consent_advice" id="groom_parental_consent_advice" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_parental_consent_advice-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Relationship:</label>
                                            <input type="text" class="form-control" name="groom_relationship" id="groom_relationship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="groom_relationship-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Giver's Residence:</label>
                                            <input type="email" class="form-control" name="groom_consent_giver_residence" id="groom_consent_giver_residence" placeholder=""  autocomplete="off">
                                            <span class="groom_consent_giver_residence-error"></span>
                                        </div>
                                    </div>

                                </div>


                                <br>
                                <hr>

                                <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#fac0ce;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>PREVIOUS MARRIAGE DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Marriage Date:</label>
                                            <input type="date" class="form-control" name="parents_marriage_date" id="parents_marriage_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="parents_marriage_date-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Municipality:</label>
                                            <input type="email" class="form-control" name="parents_marriage_municipality" id="parents_marriage_municipality" placeholder=""  autocomplete="off">
                                            <span class="parents_marriage_municipality-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Province:</label>
                                            <input type="text" class="form-control" name="parents_marriage_province" id="parents_marriage_province" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="parents_marriage_province-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <input type="text" class="form-control" name="parents_marriage_country" id="parents_marriage_country" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="parents_marriage_country-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>

                                <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>CERTIFICATION OF INFORMANT</b></center></div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Signature:</label>
                                            <input type="text" class="form-control" name="informant_signature" id="informant_signature" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="informant_signature-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control" name="informant_name" id="informant_name" placeholder=""  autocomplete="off">
                                            <span class="informant_name-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Relationship:</label><select class="form-control" name="informant_relationship" id="informant_relationship"  autocomplete="off">
                                                <option value="">&larr; Please Select &rarr;</option>
                                               </select>
                                            <span class="informant_relationship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input type="text" class="form-control" name="informant_address" id="informant_address" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="informant_address-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" class="form-control" name="informant_date" id="informant_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="informant_date-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>

                                <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>PREPARED BY:</b></center></div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Signature:</label>
                                            <input type="text" class="form-control" name="prepared_by_signature" id="prepared_by_signature" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="prepared_by_signature-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control" name="prepared_by_name" id="prepared_by_name" placeholder=""  autocomplete="off">
                                            <span class="prepared_by_name-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Position:</label><select class="form-control" name="prepared_by_position" id="prepared_by_position"  autocomplete="off">
                                                <option value="">&larr; Please Select &rarr;</option>
                                               </select>
                                            <span class="prepared_by_position-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" class="form-control" name="prepared_by_date" id="prepared_by_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="prepared_by_date-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>

                                <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>RECEIVED BY:</b></center></div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Signature:</label>
                                            <input type="text" class="form-control" name="received_by_signature" id="received_by_signature" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="received_by_signature-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control" name="received_by_name" id="received_by_name" placeholder=""  autocomplete="off">
                                            <span class="received_by_name-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Position:</label><select class="form-control" name="received_by_position" id="received_by_position"  autocomplete="off">
                                                <option value="">&larr; Please Select &rarr;</option>
                                               </select>
                                            <span class="received_by_position-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" class="form-control" name="received_by_date" id="received_by_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="received_by_date-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>

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
                                            <label>Position:</label><select class="form-control" name="registered_by_position" id="registered_by_position"  autocomplete="off">
                                                <option value="">&larr; Please Select &rarr;</option>
                                               </select>
                                            <span class="registered_by_position-error"></span>
                                        </div>
                                    </div>
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

                                <div class="row justify-content-center">

                                    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto d-lg-block">
                                        <div class="form-group">
                                            <label class="text-center d-block">Remarks:</label>
                                            <input type="text" class="form-control" name="remarks" id="remarks" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="remarks-error"></span>
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
          <button type="button" id="btn-student" class="btn btn-outline-warning">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>
