<div class="modal fade" id="BirthRegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-plus-circle"></i> BIRTH REGISTRATION</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
           <div class="col-lg-11 mb-2 mt-1" id="mgs-birth" style="margin-left: 4%"></div>
           <div id="msg_birth"></div>
                <form>
                <div class="modal-body">
                      @csrf
                      @method('POST')

                       <div class="row justify-content-md-center">

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
                                            <select class="form-control" name="child_sex" id="child_sex"  autocomplete="off">
                                            <option value="">&larr; Please Select &rarr;</option>
                                                <option value="male">MALE</option>
                                                <option value="female">FEMALE</option>
                                            </select>
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
                                            <option value="single">Single</option>
                                            <option value="twin">Twin</option>
                                            <option value="triplet">Triplets</option>
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
                                            <option value="first">First</option>
                                            <option value="second">Second</option>
                                            <option value="third">Third</option>
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
                                            <input type="text" class="form-control" name="mother_religion" id="mother_religion" placeholder="" autocomplete="off">
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
                                                <option value="self">Self</option>
                                                <option value="mother">Mother</option>
                                                <option value="father">Father</option>
                                                <option value="sibling ">Sibling</option>

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
                                                <option value="birth_employee">Birth Employee</option>
                                                <option value="death_employee">Death Employee</option>
                                                <option value="marriage_employee">Marriage Employee</option>

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
                                                <option value="birth_employee">Birth Employee</option>
                                                <option value="death_employee">Death Employee</option>
                                                <option value="marriage_employee">Marriage Employee</option>

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
                                                <option value="birth_employee">Birth Employee</option>
                                                <option value="death_employee">Death Employee</option>
                                                <option value="marriage_employee">Marriage Employee</option>

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
          <button type="button" class="btn btn-outline-warning" id="submit_birth">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){

              $('#submit_birth').on('click', function(e){
                 e.preventDefault();
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                     const child_lastname = document.querySelector('input[id=child_lastname]').value;
                     console.log(child_lastname);

                     const child_firstname = document.querySelector('input[id=child_firstname]').value;
                     console.log(child_firstname);

                     const child_middlename = document.querySelector('input[id=child_middlename]').value;
                     console.log(child_middlename);

                     const child_sex = $('#child_sex option:selected').val();
                     console.log(child_sex);

                     const child_date_of_birth = document.querySelector('input[id=child_date_of_birth]').value;
                     console.log(child_date_of_birth);

                     const child_place_of_barangay_hospitalname = document.querySelector('input[id=child_place_of_barangay_hospitalname]').value;
                     console.log(child_place_of_barangay_hospitalname);

                     const child_municipality = document.querySelector('input[id=child_municipality]').value;
                     console.log(child_municipality);

                     const child_province = document.querySelector('input[id=child_province]').value;
                     console.log(child_province);

                     const child_type_of_birth = $('#child_type_of_birth option:selected').val();
                     console.log(child_type_of_birth);

                     const child_multiple_birth = $('#child_multiple_birth option:selected').val();
                     console.log(child_multiple_birth);

                     const child_birth_order = document.querySelector('input[id=child_birth_order]').value;
                     console.log(child_birth_order);

                     const child_weight_at_birth = document.querySelector('input[id=child_weight_at_birth]').value;
                     console.log(child_weight_at_birth);

                    //Mother

                     const mother_lastname = document.querySelector('input[id=mother_lastname]').value;
                     console.log(mother_lastname);

                     const mother_firstname = document.querySelector('input[id=mother_firstname]').value;
                     console.log(mother_firstname);

                     const mother_middlename = document.querySelector('input[id=mother_middlename]').value;
                     console.log(mother_middlename);

                     const mother_citizenship = document.querySelector('input[id=mother_citizenship]').value;
                     console.log(mother_citizenship);

                     const mother_religion = document.querySelector('input[id=mother_religion]').value;
                     console.log(mother_religion);

                     const mother_children_born_alive = document.querySelector('input[id=mother_children_born_alive]').value;
                     console.log(mother_children_born_alive);

                     const mother_children_still_living = document.querySelector('input[id=mother_children_still_living]').value;
                     console.log(mother_children_still_living);

                     const mother_children_born_alive_but_dead = document.querySelector('input[id=mother_children_born_alive_but_dead]').value;
                     console.log(mother_children_born_alive_but_dead);

                     const mother_occupation = document.querySelector('input[id=mother_occupation]').value;
                     console.log(mother_occupation);

                     const mother_age = document.querySelector('input[id=mother_age]').value;
                     console.log(mother_age);

                     const mother_barangay = document.querySelector('input[id=mother_barangay]').value;
                     console.log(mother_barangay);

                     const mother_municipality = document.querySelector('input[id=mother_municipality]').value;
                     console.log(mother_municipality);

                     const mother_province = document.querySelector('input[id=mother_province]').value;
                     console.log(mother_province);

                     const mother_country = document.querySelector('input[id=mother_country]').value;
                     console.log(mother_country);

                     //FATHER
                     const father_lastname = document.querySelector('input[id=father_lastname]').value;
                     console.log(father_lastname);

                     const father_firstname = document.querySelector('input[id=father_firstname]').value;
                     console.log(father_firstname);

                     const father_middlename = document.querySelector('input[id=father_middlename]').value;
                     console.log(father_middlename);

                     const father_citizenship = document.querySelector('input[id=father_citizenship]').value;
                     console.log(father_citizenship);

                     const father_religion = document.querySelector('input[id=father_religion]').value;
                     console.log(father_religion);

                     const father_occupation = document.querySelector('input[id=father_occupation]').value;
                     console.log(father_occupation);

                     const father_age = document.querySelector('input[id=father_age]').value;
                     console.log(father_age);

                     const father_barangay = document.querySelector('input[id=father_barangay]').value;
                     console.log(father_barangay);

                     const father_municipality = document.querySelector('input[id=father_municipality]').value;
                     console.log(father_municipality);

                     const father_province = document.querySelector('input[id=father_province]').value;
                     console.log(father_province);

                     const father_country = document.querySelector('input[id=father_country]').value;
                     console.log(father_country);

                     //MARRIAGE

                     const parents_marriage_date = document.querySelector('input[id=parents_marriage_date]').value;
                     console.log(parents_marriage_date);

                     const parents_marriage_municipality = document.querySelector('input[id=parents_marriage_municipality]').value;
                     console.log(parents_marriage_municipality);

                     const parents_marriage_province = document.querySelector('input[id=parents_marriage_province]').value;
                     console.log(parents_marriage_province);

                     const parents_marriage_country = document.querySelector('input[id=parents_marriage_country]').value;
                     console.log(parents_marriage_country);

                    // Certification of informant
                     const informant_signature = document.querySelector('input[id=informant_signature]').value;
                     console.log(informant_signature);

                     const informant_name = document.querySelector('input[id=informant_name]').value;
                     console.log(informant_name);

                     const informant_relationship = $('#informant_relationship option:selected').val();
                     console.log(informant_relationship);

                     const informant_address = document.querySelector('input[id=informant_address]').value;
                     console.log(informant_address);

                     const informant_date = document.querySelector('input[id=informant_date]').value;
                     console.log(informant_date);


                    //Prepared by
                     const prepared_by_signature = document.querySelector('input[id=prepared_by_signature]').value;
                     console.log(prepared_by_signature);

                     const prepared_by_name = document.querySelector('input[id=prepared_by_name]').value;
                     console.log(prepared_by_name);

                     const prepared_by_position = $('#prepared_by_position option:selected').val();
                     console.log(prepared_by_position);

                     const prepared_by_date = document.querySelector('input[id=prepared_by_date]').value;
                     console.log(prepared_by_date);

                     //Received by
                     const received_by_signature = document.querySelector('input[id=received_by_signature]').value;
                     console.log(received_by_signature);

                     const received_by_name = document.querySelector('input[id=received_by_name]').value;
                     console.log(received_by_name);

                     const received_by_position = $('#received_by_position option:selected').val();
                     console.log(received_by_position);

                     const received_by_date = document.querySelector('input[id=received_by_date]').value;
                     console.log(received_by_date);

                     //Received by the civil registrar
                     const registered_by_signature = document.querySelector('input[id=registered_by_signature]').value;
                     console.log(registered_by_signature);

                     const registered_by_name = document.querySelector('input[id=registered_by_name]').value;
                     console.log(registered_by_name);

                     const registered_by_position = $('#registered_by_position option:selected').val();
                     console.log(registered_by_position);

                     const registered_by_date = document.querySelector('input[id=registered_by_date]').value;
                     console.log(registered_by_date);

                    // Remarks
                     const remarks = document.querySelector('input[id=remarks]').value;
                     console.log(remarks);


                    var data = new FormData(this.form);

                    data.append('child_lastname', child_lastname);
                    data.append('child_firstname', child_firstname);
                    data.append('child_middlename', child_middlename);
                    data.append('child_sex', child_sex);
                    data.append('child_date_of_birth', child_date_of_birth);
                    data.append('child_place_of_barangay_hospitalname', child_place_of_barangay_hospitalname);
                    data.append('child_municipality', child_municipality);
                    data.append('child_province', child_province);
                    data.append('child_type_of_birth', child_type_of_birth);
                    data.append('child_multiple_birth', child_multiple_birth);
                    data.append('child_birth_order', child_birth_order);
                    data.append('child_weight_at_birth', child_weight_at_birth);

                    data.append('mother_lastname', mother_lastname);
                    data.append('mother_firstname', mother_firstname);
                    data.append('mother_middlename', mother_middlename);
                    data.append('mother_citizenship', mother_citizenship);
                    data.append('mother_religion', mother_religion);
                    data.append('mother_children_born_alive', mother_children_born_alive);
                    data.append('mother_children_still_living', mother_children_still_living);
                    data.append('mother_children_born_alive_but_dead', mother_children_born_alive_but_dead);
                    data.append('mother_occupation', mother_occupation);
                    data.append('mother_age', mother_age);
                    data.append('mother_barangay', mother_barangay);
                    data.append('mother_municipality', mother_municipality);
                    data.append('mother_province', mother_province);
                    data.append('mother_country', mother_country);

                    data.append('father_lastname', father_lastname);
                    data.append('father_firstname', father_firstname);
                    data.append('mother_middlename', mother_middlename);
                    data.append('father_citizenship', father_citizenship);
                    data.append('father_religion', father_religion);
                    data.append('father_occupation', father_occupation);
                    data.append('father_age', father_age);
                    data.append('father_barangay', father_barangay);
                    data.append('father_municipality', father_municipality);
                    data.append('father_province', father_province);
                    data.append('father_country', father_country);

                    // Marriage of parents details
                    data.append('parents_marriage_date', parents_marriage_date);
                    data.append('parents_marriage_municipality', parents_marriage_municipality);
                    data.append('parents_marriage_province', parents_marriage_province);
                    data.append('parents_marriage_country', parents_marriage_country);

                    // Certification of informant
                    data.append('informant_signature', informant_signature);
                    data.append('informant_name', informant_name);
                    data.append('informant_relationship', informant_relationship);
                    data.append('informant_address', informant_address);
                    data.append('informant_date', informant_date);


                    // Prepared by
                    data.append('prepared_by_signature', prepared_by_signature);
                    data.append('prepared_by_name', prepared_by_name);
                    data.append('prepared_by_position', prepared_by_position);
                    data.append('prepared_by_date', prepared_by_date);

                    // Received by
                    data.append('received_by_signature', received_by_signature);
                    data.append('received_by_name', received_by_name);
                    data.append('received_by_position', received_by_position);
                    data.append('received_by_date', received_by_date);

                    // Registered by the civil registrar
                    data.append('registered_by_signature', registered_by_signature);
                    data.append('registered_by_name', registered_by_name);
                    data.append('registered_by_position', registered_by_position);
                    data.append('registered_by_date', registered_by_date);

                    data.append('remarks', remarks);


                    $('#child_lastname-error').html("");
                    $('#child_firstname-error').html("");
                    $('#child_middlename-error').html("");
                    $('#child_sex-error').html("");
                    $('#child_date_of_birth-error').html("");
                    $('#child_place_of_barangay_hospitalname-error').html("");
                    $('#child_municipality-error').html("");
                    $('#child_province-error').html("");
                    $('#child_type_of_birth-error').html("");
                    $('#child_multiple_birth-error').html("");
                    $('#child_birth_order-error').html("");
                    $('#child_weight_at_birth-error').html("");

                    $('#mother_lastname-error').html("");
                    $('#mother_firstname-error').html("");
                    $('#mother_middlename-error').html("");
                    $('#mother_citizenship-error').html("");
                    $('#mother_religion-error').html("");
                    $('#mother_children_born_alive-error').html("");
                    $('#mother_children_still_living-error').html("");
                    $('#mother_children_born_alive_but_dead-error').html("");
                    $('#mother_occupation-error').html("");
                    $('#mother_age-error').html("");
                    $('#mother_barangay-error').html("");
                    $('#mother_municipality-error').html("");
                    $('#mother_province-error').html("");
                    $('#mother_country-error').html("");


                    $('#father_lastname-error').html("");
                    $('#father_firstname-error').html("");
                    $('#father_middlename-error').html("");
                    $('#father_citizenship-error').html("");
                    $('#father_religion-error').html("");
                    $('#father_occupation-error').html("");
                    $('#father_age-error').html("");
                    $('#father_barangay-error').html("");
                    $('#father_municipality-error').html("");
                    $('#father_province-error').html("");
                    $('#father_country-error').html("");


                    $('#parents_marriage_date-error').html("");
                    $('#parents_marriage_municipality-error').html("");
                    $('#parents_marriage_province-error').html("");
                    $('#parents_marriage_country-error').html("");


                    $('#informant_signature-error').html("");
                    $('#informant_name-error').html("");
                    $('#informant_relationship-error').html("");
                    $('#informant_address-error').html("");
                    $('#informant_date-error').html("");

                    $('#prepared_by_signature-error').html("");
                    $('#prepared_by_name-error').html("");
                    $('#prepared_by_position-error').html("");
                    $('#prepared_by_date-error').html("");

                    $('#received_by_signature-error').html("");
                    $('#received_by_name-error').html("");
                    $('#received_by_position-error').html("");
                    $('#received_by_date-error').html("");

                    $('#registered_by_signature-error').html("");
                    $('#registered_by_name-error').html("");
                    $('#registered_by_position-error').html("");
                    $('#registered_by_date-error').html("");

                    $('#remarks-error').html("");

                    $.ajax({
                            url: '{{ route('birth.store') }}',
                            method: 'post',
                            data: data,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',

                            success: function(response){

                            console.log(response);
                                if(response.errors) {
                                    if(response.errors.child_lastname){
                                        $('#child_lastname-error').html(response.errors.child_lastname[0]);
                                    }
                                    if(response.errors.child_firstname){
                                        $('#child_firstname-error').html(response.errors.child_firstname[0]);
                                    }
                                    if(response.errors.child_middlename){
                                        $('#child_middlename-error').html(response.errors.child_middlename[0]);
                                    }
                                    if(response.errors.child_sex){
                                        $('#child_sex-error').html(response.errors.child_sex[0]);
                                    }
                                      if(response.errors.child_date_of_birth){
                                        $('#child_date_of_birth-error').html(response.errors.child_date_of_birth[0]);
                                    }
                                    if(response.errors.child_place_of_barangay_hospitalname){
                                        $('#child_place_of_barangay_hospitalname-error').html(response.errors.child_place_of_barangay_hospitalname[0]);
                                    }
                                    if(response.errors.child_municipality){
                                        $('#child_municipality-error').html(response.errors.child_municipality[0]);
                                    }
                                    if(response.errors.child_province){
                                        $('#child_province-error').html(response.errors.child_province[0]);
                                    }
                                    if(response.errors.child_type_of_birth){
                                        $('#child_type_of_birth-error').html(response.errors.child_type_of_birth[0]);
                                    }
                                    if(response.errors.child_multiple_birth){
                                        $('#child_multiple_birth-error').html(response.errors.child_multiple_birth[0]);
                                    }
                                    if(response.errors.child_birth_order){
                                        $('#child_birth_order-error').html(response.errors.child_birth_order[0]);
                                    }
                                    if(response.errors.child_weight_at_birth){
                                        $('#child_weight_at_birth-error').html(response.errors.child_weight_at_birth[0]);
                                    }
                                    if(response.errors.mother_lastname){
                                        $('#mother_lastname-error').html(response.errors.mother_lastname[0]);
                                    }
                                    if(response.errors.mother_firstname){
                                        $('#mother_firstname-error').html(response.errors.mother_firstname[0]);
                                    }
                                    if(response.errors.mother_middlename){
                                        $('#mother_middlename-error').html(response.errors.mother_middlename[0]);
                                    }
                                    if(response.errors.mother_citizenship){
                                        $('#mother_citizenship-error').html(response.errors.mother_citizenship[0]);
                                    }
                                    if(response.errors.mother_religion){
                                        $('#mother_religion-error').html(response.errors.mother_religion[0]);
                                    }
                                    if(response.errors.mother_children_born_alive){
                                        $('#mother_children_born_alive-error').html(response.errors.mother_children_born_alive[0]);
                                    }
                                    if(response.errors.mother_children_still_living){
                                        $('#mother_children_still_living-error').html(response.errors.mother_children_still_living[0]);
                                    }
                                    if(response.errors.mother_children_born_alive_but_dead){
                                        $('#mother_children_born_alive_but_dead-error').html(response.errors.mother_children_born_alive_but_dead[0]);
                                    }
                                    if(response.errors.mother_occupation){
                                        $('#mother_occupation-error').html(response.errors.mother_occupation[0]);
                                    }
                                    if(response.errors.mother_age){
                                        $('#mother_age-error').html(response.errors.mother_age[0]);
                                    }
                                    if(response.errors.mother_barangay){
                                        $('#mother_barangay-error').html(response.errors.mother_barangay[0]);
                                    }
                                    if(response.errors.mother_municipality){
                                        $('#mother_municipality-error').html(response.errors.mother_municipality[0]);
                                    }
                                    if(response.errors.mother_province){
                                        $('#mother_province-error').html(response.errors.mother_province[0]);
                                    }
                                    if(response.errors.mother_country){
                                        $('#mother_country-error').html(response.errors.mother_country[0]);
                                    }

                                    if(response.errors.father_lastname){
                                        $('#father_lastname-error').html(response.errors.father_lastname[0]);
                                    }
                                    if(response.errors.father_firstname){
                                        $('#father_firstname-error').html(response.errors.father_firstname[0]);
                                    }
                                    if(response.errors.father_middlename){
                                        $('#father_middlename-error').html(response.errors.father_middlename[0]);
                                    }
                                    if(response.errors.father_citizenship){
                                        $('#father_citizenship-error').html(response.errors.father_citizenship[0]);
                                    }
                                    if(response.errors.father_religion){
                                        $('#father_religion-error').html(response.errors.father_religion[0]);
                                    }
                                    if(response.errors.father_occupation){
                                        $('#father_occupation-error').html(response.errors.father_occupation[0]);
                                    }
                                    if(response.errors.father_age){
                                        $('#father_age-error').html(response.errors.father_age[0]);
                                    }
                                    if(response.errors.father_barangay){
                                        $('#father_barangay-error').html(response.errors.father_barangay[0]);
                                    }
                                    if(response.errors.father_municipality){
                                        $('#father_municipality-error').html(response.errors.father_municipality[0]);
                                    }
                                    if(response.errors.father_province){
                                        $('#father_province-error').html(response.errors.father_province[0]);
                                    }
                                    if(response.errors.father_country){
                                        $('#father_country-error').html(response.errors.father_country[0]);
                                    }

                                    if(response.errors.parents_marriage_date){
                                        $('#parents_marriage_date-error').html(response.errors.parents_marriage_date[0]);
                                    }
                                    if(response.errors.parents_marriage_municipality){
                                        $('#parents_marriage_municipality-error').html(response.errors.parents_marriage_municipality[0]);
                                    }
                                    if(response.errors.parents_marriage_province){
                                        $('#parents_marriage_province-error').html(response.errors.parents_marriage_province[0]);
                                    }
                                    if(response.errors.parents_marriage_country){
                                        $('#parents_marriage_country-error').html(response.errors.parents_marriage_country[0]);
                                    }


                                    if(response.errors.informant_signature){
                                        $('#informant_signature-error').html(response.errors.informant_signature[0]);
                                    }
                                    if(response.errors.informant_name){
                                        $('#informant_name-error').html(response.errors.informant_name[0]);
                                    }
                                    if(response.errors.informant_relationship){
                                        $('#informant_relationship-error').html(response.errors.informant_relationship[0]);
                                    }
                                    if(response.errors.informant_address){
                                        $('#informant_address-error').html(response.errors.informant_address[0]);
                                    }
                                    if(response.errors.informant_date){
                                        $('#informant_date-error').html(response.errors.informant_date[0]);
                                    }

                                    if(response.errors.prepared_by_signature){
                                        $('#prepared_by_signature-error').html(response.errors.prepared_by_signature[0]);
                                    }
                                    if(response.errors.prepared_by_name){
                                        $('#prepared_by_name-error').html(response.errors.prepared_by_name[0]);
                                    }
                                    if(response.errors.prepared_by_position){
                                        $('#prepared_by_position-error').html(response.errors.prepared_by_position[0]);
                                    }
                                    if(response.errors.prepared_by_date){
                                        $('#prepared_by_date-error').html(response.errors.prepared_by_date[0]);
                                    }

                                    if(response.errors.received_by_signature){
                                        $('#received_by_signature-error').html(response.errors.received_by_signature[0]);
                                    }
                                    if(response.errors.received_by_name){
                                        $('#received_by_name-error').html(response.errors.received_by_name[0]);
                                    }
                                    if(response.errors.received_by_position){
                                        $('#received_by_position-error').html(response.errors.received_by_position[0]);
                                    }
                                    if(response.errors.received_by_date){
                                        $('#received_by_date-error').html(response.errors.received_by_date[0]);
                                    }

                                    if(response.errors.registered_by_signature){
                                        $('#registered_by_signature-error').html(response.errors.registered_by_signature[0]);
                                    }
                                    if(response.errors.registered_by_name){
                                        $('#registered_by_name-error').html(response.errors.registered_by_name[0]);
                                    }
                                    if(response.errors.registered_by_position){
                                        $('#registered_by_position-error').html(response.errors.registered_by_position[0]);
                                    }
                                    if(response.errors.registered_by_date){
                                        $('#registered_by_date-error').html(response.errors.registered_by_date[0]);
                                    }

                                    if(response.errors.remarks){
                                        $('#remarks-error').html(response.errors.remarks[0]);
                                    }

                                }

                              if(response.status == "200"){
                                $('#msg_birth').html("<div class='alert alert-success' role='alert'><i class='fa fa-check-circle'></i> Child Birth was Successfully Added!</div>")
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
