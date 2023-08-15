<div class="modal fade" id="BirthRegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>CHILD INFORMATION</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12" id="lnamez">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" name="child_lastname" id="child_lastname" autocomplete="off">
                                            <span class="child_lastname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12" id="lnamez">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" name="child_firstname" id="child_firstname" autocomplete="off">
                                            <span class="child_firstname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Middle Name:</label>
                                          <input type="text" class="form-control" name="child_middlename" id="child_middlename" minlength="10" maxlength="10" autocomplete="off">
                                           <span class="child_middlename-error"></span>
                                      </div>
                                    </div>

                                </div>

                                <div class="row mb-3 mt-1">

                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                          <label>Sex:</label>
                                          <input type="text" class="form-control" name="child_sex" id="child_sex" autocomplete="off">
                                          <span class="child_sex-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                          <label>Date of Birth:</label>
                                          <input type="date" class="form-control" name="child_date_of_birth" id="child_date_of_birth" autocomplete="off">
                                          <span class="child_date_of_birth-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                          <label>Barangay:</label>
                                          <input type="text" class="form-control" name="child_place_of_barangay_hospitalname" id="child_place_of_barangay_hospitalname" placeholder="" autocomplete="off">
                                          <span class="child_place_of_barangay_hospitalname-error"></span>
                                      </div>
                                  </div>

                                </div>

                              <div class="row mb-2">

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Municipality:</label>
                                          <input type="email" class="form-control" name="child_municipality" id="child_municipality" placeholder=""  autocomplete="off">
                                          <span class="child_municipality-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Province:</label>
                                          <input type="text" class="form-control" name="child_province" id="child_province" autocomplete="off">
                                          <span class="child_province"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Type of Birth:</label>
                                          <select class="form-control" name="child_type_of_birth" id="child_type_of_birth"  autocomplete="off">
                                            <option value="">&larr; Please Select &rarr;</option>
                                           </select>
                                          <span class="child_type_of_birth-error"></span>
                                      </div>
                                  </div>

                              </div>

                              <div class="row">

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Multiple Birth:</label>
                                          <select class="form-control" name="child_multiple_birth" id="child_multiple_birth"  autocomplete="off">
                                            <option value="">&larr; Please Select &rarr;</option>
                                           </select>
                                           <span class="child_multiple_birth-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Birth Order:</label>
                                          <input type="text" class="form-control" name="child_birth_order" id="child_birth_order" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                          <span class="child_birth_order-error"></span>
                                      </div>
                                  </div>

                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Weight at Birth:</label>
                                          <input type="email" class="form-control" name="child_weight_at_birth" id="child_weight_at_birth" placeholder=""  autocomplete="off">
                                          <span class="child_weight_at_birth-error"></span>
                                      </div>
                                  </div>

                              </div>

                              <br>
                              <hr>

                              <!-- ////////////////////////////////GAP//////////////////////// -->
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>MOTHER'S MAIDEN NAME DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" name="mother_lastname" id="mother_lastname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_lastname-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" name="mother_firstname" id="mother_firstname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_firstname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="email" class="form-control" name="mother_middlename" id="mother_middlename" placeholder=""  autocomplete="off">
                                            <span class="mother_middlename-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="mother_citizenship" id="mother_citizenship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <input type="text" class="form-control" name="mother_religion" id="mother_religion" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_religion-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Born Alive:</label>
                                            <input type="email" class="form-control" name="mother_children_born_alive" id="mother_children_born_alive" placeholder=""  autocomplete="off">
                                            <span class="mother_children_born_alive-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Still Living:</label>
                                            <input type="text" class="form-control" name="mother_children_still_living" id="mother_children_still_living" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_children_still_living-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Born Alive but Dead:</label>
                                            <input type="text" class="form-control" name="mother_children_born_alive_but_dead" id="mother_children_born_alive_but_dead" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_children_born_alive_but_dead-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Occupation:</label>
                                            <input type="email" class="form-control" name="mother_occupation" id="mother_occupation" placeholder=""  autocomplete="off">
                                            <span class="mother_occupation-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input type="text" class="form-control" name="mother_age" id="mother_age" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_age-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Barangay:</label>
                                            <input type="text" class="form-control" name="mother_barangay" id="mother_barangay" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_barangay-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Municipality:</label>
                                            <input type="email" class="form-control" name="mother_municipality" id="mother_municipality" placeholder=""  autocomplete="off">
                                            <span class="mother_municipality-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Province:</label>
                                            <input type="text" class="form-control" name="mother_province" id="mother_province" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_province-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <input type="text" class="form-control" name="mother_country" id="mother_country" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="mother_country-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>


                              <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>FATHER'S DETAILS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" name="father_lastname" id="father_lastname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="father_lastname-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" name="father_firstname" id="father_firstname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="father_firstname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="email" class="form-control" name="father_middlename" id="father_middlename" placeholder=""  autocomplete="off">
                                            <span class="father_middlename-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control" name="father_citizenship" id="father_citizenship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="father_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <input type="text" class="form-control" name="father_religion" id="father_religion" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="father_religion-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Occupation:</label>
                                            <input type="email" class="form-control" name="father_occupation" id="father_occupation" placeholder=""  autocomplete="off">
                                            <span class="father_occupation-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input type="text" class="form-control" name="father_age" id="father_age" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="father_age-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Barangay:</label>
                                            <input type="text" class="form-control" name="father_barangay" id="father_barangay" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="father_barangay-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Municipality:</label>
                                            <input type="email" class="form-control" name="father_municipality" id="father_municipality" placeholder=""  autocomplete="off">
                                            <span class="father_municipality-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Province:</label>
                                            <input type="text" class="form-control" name="father_province" id="father_province" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="father_province-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <input type="text" class="form-control" name="father_country" id="father_country" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="father_country-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>

                                <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>MARRIAGE OF PARENTS DETAILS</b></center></div>

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
