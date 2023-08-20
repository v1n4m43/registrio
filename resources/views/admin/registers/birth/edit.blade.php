<div class="modal fade" id="edit-BirthEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="edit-exampleModalLabel"><i class="bi bi-plus-circle"></i> BIRTH REGISTRATION</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
           <div class="col-lg-11 mb-2 mt-1" id="edit-mgs-birth" style="margin-left: 4%"></div>
           <div id="edit-msg_birth"></div>
                <form>
                <div class="modal-body">
                      @csrf
                      @method('POST')

                       <div class="row justify-content-md-center">

                          <div class="col-sm-12 col-md-12 col-lg-10">
                               <hr>
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>CHILD INFORMATION</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12" >
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control"  name="child_lastname" value="{{$birth->child_lastname}}" id="edit-child_lastname" autocomplete="off">
                                            <span class="edit-child_lastname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12" >
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control"  name="child_firstname" value="{{$birth->child_firstname}}" id="edit-child_firstname" autocomplete="off">
                                            <span class="edit-child_firstname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Middle Name:</label>
                                          <input type="text" class="form-control"  name="child_middlename" value="{{$birth->child_middlename}}" id="edit-child_middlename" minlength="10" maxlength="10" autocomplete="off">
                                           <span class="edit-child_middlename-error"></span>
                                      </div>
                                    </div>

                                </div>

                                <div class="row mb-3 mt-1">

                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                          <label>Sex:</label>
                                            <select class="form-control"  name="child_sex" value="{{$birth->child_sex}}" id="edit-child_sex"  autocomplete="off">
                                            <option value="">&larr; Please Select &rarr;</option>
                                                <option value="male">MALE</option>
                                                <option value="female">FEMALE</option>
                                            </select>
                                          <span class="edit-child_sex-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                          <label>Date of Birth:</label>
                                          <input type="date" class="form-control"  name="child_date_of_birth" value="{{$birth->child_date_of_birth}}" id="edit-child_date_of_birth" autocomplete="off">
                                          <span class="edit-child_date_of_birth-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                          <label>Barangay:</label>
                                          <input type="text" class="form-control"  name="child_place_of_barangay_hospitalname" value="{{$birth->child_place_of_barangay_hospitalname}}" id="edit-child_place_of_barangay_hospitalname" placeholder="" autocomplete="off">
                                          <span class="edit-child_place_of_barangay_hospitalname-error"></span>
                                      </div>
                                  </div>

                                </div>

                              <div class="row mb-2">

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Municipality:</label>
                                          <input type="email" class="form-control"  name="child_municipality" value="{{$birth->child_municipality}}" id="edit-child_municipality" placeholder=""  autocomplete="off">
                                          <span class="edit-child_municipality-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Province:</label>
                                          <input type="text" class="form-control"  name="child_province" value="{{$birth->child_province}}" id="edit-child_province" autocomplete="off">
                                          <span class="edit-child_province"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Type of Birth:</label>
                                          <select class="form-control"  name="child_type_of_birth" value="{{$birth->child_type_of_birth}}" id="edit-child_type_of_birth"  autocomplete="off">
                                            <option value="">&larr; Please Select &rarr;</option>
                                            <option value="single">Single</option>
                                            <option value="twin">Twin</option>
                                            <option value="triplet">Triplets</option>
                                           </select>
                                          <span class="edit-child_type_of_birth-error"></span>
                                      </div>
                                  </div>

                              </div>

                              <div class="row">

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Multiple Birth:</label>
                                          <select class="form-control"  name="child_multiple_birth" value="{{$birth->child_multiple_birth}}" id="edit-child_multiple_birth"  autocomplete="off">
                                            <option value="">&larr; Please Select &rarr;</option>
                                            <option value="first">First</option>
                                            <option value="second">Second</option>
                                            <option value="third">Third</option>
                                           </select>
                                           <span class="edit-child_multiple_birth-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Birth Order:</label>
                                          <input type="text" class="form-control"  name="child_birth_order" value="{{$birth->child_birth_order}}" id="edit-child_birth_order" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                          <span class="edit-child_birth_order-error"></span>
                                      </div>
                                  </div>

                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Weight at Birth:</label>
                                          <input type="email" class="form-control"  name="child_weight_at_birth" value="{{$birth->child_weight_at_birth}}" id="edit-child_weight_at_birth" placeholder=""  autocomplete="off">
                                          <span class="edit-child_weight_at_birth-error"></span>
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
                                            <input type="text" class="form-control"  name="mother_lastname" value="{{$birth->mother_lastname}}" id="edit-mother_lastname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_lastname-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control"  name="mother_firstname" value="{{$birth->mother_firstname}}" id="edit-mother_firstname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_firstname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="email" class="form-control"  name="mother_middlename" value="{{$birth->mother_middlename}}" id="edit-mother_middlename" placeholder=""  autocomplete="off">
                                            <span class="edit-mother_middlename-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control"  name="mother_citizenship" value="{{$birth->mother_citizenship}}" id="edit-mother_citizenship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <input type="text" class="form-control"  name="mother_religion" value="{{$birth->mother_religion}}" id="edit-mother_religion" placeholder="" autocomplete="off">
                                            <span class="edit-mother_religion-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Born Alive:</label>
                                            <input type="email" class="form-control"  name="mother_children_born_alive" value="{{$birth->mother_children_born_alive}}" id="edit-mother_children_born_alive" placeholder=""  autocomplete="off">
                                            <span class="edit-mother_children_born_alive-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Still Living:</label>
                                            <input type="text" class="form-control"  name="mother_children_still_living" value="{{$birth->mother_children_still_living}}" id="edit-mother_children_still_living" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_children_still_living-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Born Alive but Dead:</label>
                                            <input type="text" class="form-control"  name="mother_children_born_alive_but_dead" value="{{$birth->mother_children_born_alive_but_dead}}" id="edit-mother_children_born_alive_but_dead" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_children_born_alive_but_dead-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Occupation:</label>
                                            <input type="email" class="form-control"  name="mother_occupation" value="{{$birth->mother_occupation}}" id="edit-mother_occupation" placeholder=""  autocomplete="off">
                                            <span class="edit-mother_occupation-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input type="text" class="form-control"  name="mother_age" value="{{$birth->mother_age}}" id="edit-mother_age" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_age-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Barangay:</label>
                                            <input type="text" class="form-control"  name="mother_barangay" value="{{$birth->mother_barangay}}" id="edit-mother_barangay" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_barangay-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Municipality:</label>
                                            <input type="email" class="form-control"  name="mother_municipality" value="{{$birth->mother_municipality}}" id="edit-mother_municipality" placeholder=""  autocomplete="off">
                                            <span class="edit-mother_municipality-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Province:</label>
                                            <input type="text" class="form-control"  name="mother_province" value="{{$birth->mother_province}}" id="edit-mother_province" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_province-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <input type="text" class="form-control"  name="mother_country" value="{{$birth->mother_country}}" id="edit-mother_country" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-mother_country-error"></span>
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
                                            <input type="text" class="form-control"  name="father_lastname" value="{{$birth->father_lastname}}" id="edit-father_lastname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-father_lastname-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control"  name="father_firstname" value="{{$birth->father_firstname}}" id="edit-father_firstname" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-father_firstname-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input type="email" class="form-control"  name="father_middlename" value="{{$birth->father_middlename}}" id="edit-father_middlename" placeholder=""  autocomplete="off">
                                            <span class="edit-father_middlename-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Citizenship:</label>
                                            <input type="text" class="form-control"  name="father_citizenship" value="{{$birth->father_citizenship}}" id="edit-father_citizenship" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-father_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <input type="text" class="form-control"  name="father_religion" value="{{$birth->father_religion}}" id="edit-father_religion" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-father_religion-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Occupation:</label>
                                            <input type="email" class="form-control"  name="father_occupation" value="{{$birth->father_occupation}}" id="edit-father_occupation" placeholder=""  autocomplete="off">
                                            <span class="edit-father_occupation-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input type="text" class="form-control"  name="father_age" value="{{$birth->father_age}}" id="edit-father_age" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-father_age-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Barangay:</label>
                                            <input type="text" class="form-control"  name="father_barangay" value="{{$birth->father_barangay}}" id="edit-father_barangay" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-father_barangay-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Municipality:</label>
                                            <input type="email" class="form-control"  name="father_municipality" value="{{$birth->father_municipality}}" id="edit-father_municipality" placeholder=""  autocomplete="off">
                                            <span class="edit-father_municipality-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Province:</label>
                                            <input type="text" class="form-control"  name="father_province" value="{{$birth->father_province}}" id="edit-father_province" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-father_province-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <input type="text" class="form-control"  name="father_country" value="{{$birth->father_country}}" id="edit-father_country" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-father_country-error"></span>
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
                                            <input type="date" class="form-control"  name="parents_marriage_date" value="{{$birth->parents_marriage_date}}" id="edit-parents_marriage_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-parents_marriage_date-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Municipality:</label>
                                            <input type="email" class="form-control"  name="parents_marriage_municipality" value="{{$birth->parents_marriage_municipality}}" id="edit-parents_marriage_municipality" placeholder=""  autocomplete="off">
                                            <span class="edit-parents_marriage_municipality-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Province:</label>
                                            <input type="text" class="form-control"  name="parents_marriage_province" value="{{$birth->parents_marriage_province}}" id="edit-parents_marriage_province" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-parents_marriage_province-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <input type="text" class="form-control"  name="parents_marriage_country" value="{{$birth->parents_marriage_country}}" id="edit-parents_marriage_country" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-parents_marriage_country-error"></span>
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
                                            <input type="text" class="form-control"  name="informant_signature" value="{{$birth->informant_signature}}" id="edit-informant_signature" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-informant_signature-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control"  name="informant_name" value="{{$birth->informant_name}}" id="edit-informant_name" placeholder=""  autocomplete="off">
                                            <span class="edit-informant_name-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Relationship:</label><select class="form-control"  name="informant_relationship" value="{{$birth->informant_relationship}}" id="edit-informant_relationship"  autocomplete="off">
                                                <option value="">&larr; Please Select &rarr;</option>
                                                <option value="self">Self</option>
                                                <option value="mother">Mother</option>
                                                <option value="father">Father</option>
                                                <option value="sibling ">Sibling</option>

                                            </select>
                                            <span class="edit-informant_relationship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input type="text" class="form-control"  name="informant_address" value="{{$birth->informant_address}}" id="edit-informant_address" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-informant_address-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" class="form-control"  name="informant_date" value="{{$birth->informant_date}}" id="edit-informant_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-informant_date-error"></span>
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
                                            <input type="text" class="form-control"  name="prepared_by_signature" value="{{$birth->prepared_by_signature}}" id="edit-prepared_by_signature" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-prepared_by_signature-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control"  name="prepared_by_name" value="{{$birth->prepared_by_name}}" id="edit-prepared_by_name" placeholder=""  autocomplete="off">
                                            <span class="edit-prepared_by_name-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Position:</label><select class="form-control"  name="prepared_by_position" value="{{$birth->prepared_by_position}}" id="edit-prepared_by_position"  autocomplete="off">
                                                <option value="">&larr; Please Select &rarr;</option>
                                                <option value="birth_employee">Birth Employee</option>
                                                <option value="death_employee">Death Employee</option>
                                                <option value="marriage_employee">Marriage Employee</option>

                                               </select>
                                            <span class="edit-prepared_by_position-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" class="form-control"  name="prepared_by_date" value="{{$birth->prepared_by_date}}" id="edit-prepared_by_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-prepared_by_date-error"></span>
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
                                            <input type="text" class="form-control"  name="received_by_signature" value="{{$birth->received_by_signature}}" id="edit-received_by_signature" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-received_by_signature-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control"  name="received_by_name" value="{{$birth->received_by_name}}" id="edit-received_by_name" placeholder=""  autocomplete="off">
                                            <span class="edit-received_by_name-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Position:</label><select class="form-control"  name="received_by_position" value="{{$birth->received_by_position}}" id="edit-received_by_position"  autocomplete="off">
                                                <option value="">&larr; Please Select &rarr;</option>
                                                <option value="birth_employee">Birth Employee</option>
                                                <option value="death_employee">Death Employee</option>
                                                <option value="marriage_employee">Marriage Employee</option>

                                            </select>
                                            <span class="edit-received_by_position-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" class="form-control"  name="received_by_date" value="{{$birth->received_by_date}}" id="edit-received_by_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-received_by_date-error"></span>
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
                                            <input type="text" class="form-control"  name="registered_by_signature" value="{{$birth->registered_by_signature}}" id="edit-registered_by_signature" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-registered_by_signature-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" class="form-control"  name="registered_by_name" value="{{$birth->registered_by_name}}" id="edit-registered_by_name" placeholder=""  autocomplete="off">
                                            <span class="edit-registered_by_name-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Position:</label><select class="form-control"  name="registered_by_position"value="{{$birth->registered_by_position}}" id="edit-registered_by_position"  autocomplete="off">
                                                <option value="">&larr; Please Select &rarr;</option>
                                                <option value="birth_employee">Birth Employee</option>
                                                <option value="death_employee">Death Employee</option>
                                                <option value="marriage_employee">Marriage Employee</option>

                                            </select>
                                            <span class="edit-registered_by_position-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" class="form-control"  name="registered_by_date" value="{{$birth->registered_by_date}}" id="edit-registered_by_date" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-registered_by_date-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>

                                <div class="row justify-content-center">

                                    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto d-lg-block">
                                        <div class="form-group">
                                            <label class="text-center d-block">Remarks:</label>
                                            <input type="text" class="form-control"  name="remarks"value="{{$birth->remarks}}" id="edit-remarks" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="edit-remarks-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <hr>

                      </div>
                    </div>

        </div>
        <div class="modal-footer">
            <input type=" " name="edit-id" id="edit-id"  value="{{ $birth->id }}">
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-warning" id="edit-submit_birth">Save</button>

        </div>
    </form>
      </div>
    </div>
  </div>


  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){

              $('#edit-submit_birth').on('click', function(e){
                 e.preventDefault();
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                     const child_lastname = document.querySelector('input[id=edit-child_lastname]').value;
                     console.log(child_lastname); 

                     const child_firstname = document.querySelector('input[id=edit-child_firstname]').value;
                     console.log(child_firstname);

                     const child_middlename = document.querySelector('input[id=edit-child_middlename]').value;
                     console.log(child_middlename);

                     const child_sex = $('#edit-child_sex option:selected').val();
                     console.log(child_sex);

                     const child_date_of_birth = document.querySelector('input[id=edit-child_date_of_birth]').value;
                     console.log(child_date_of_birth);

                     const child_place_of_barangay_hospitalname = document.querySelector('input[id=edit-child_place_of_barangay_hospitalname]').value;
                     console.log(child_place_of_barangay_hospitalname);

                     const child_municipality = document.querySelector('input[id=edit-child_municipality]').value;
                     console.log(child_municipality);

                     const child_province = document.querySelector('input[id=edit-child_province]').value;
                     console.log(child_province);

                     const child_type_of_birth = $('#edit-child_type_of_birth option:selected').val();
                     console.log(child_type_of_birth);

                     const child_multiple_birth = $('#edit-child_multiple_birth option:selected').val();
                     console.log(child_multiple_birth);

                     const child_birth_order = document.querySelector('input[id=edit-child_birth_order]').value;
                     console.log(child_birth_order);

                     const child_weight_at_birth = document.querySelector('input[id=edit-child_weight_at_birth]').value;
                     console.log(child_weight_at_birth);

                    //Mother

                     const mother_lastname = document.querySelector('input[id=edit-mother_lastname]').value;
                     console.log(mother_lastname);

                     const mother_firstname = document.querySelector('input[id=edit-mother_firstname]').value;
                     console.log(mother_firstname);

                     const mother_middlename = document.querySelector('input[id=edit-mother_middlename]').value;
                     console.log(mother_middlename);

                     const mother_citizenship = document.querySelector('input[id=edit-mother_citizenship]').value;
                     console.log(mother_citizenship);

                     const mother_religion = document.querySelector('input[id=edit-mother_religion]').value;
                     console.log(mother_religion);

                     const mother_children_born_alive = document.querySelector('input[id=edit-mother_children_born_alive]').value;
                     console.log(mother_children_born_alive);

                     const mother_children_still_living = document.querySelector('input[id=edit-mother_children_still_living]').value;
                     console.log(mother_children_still_living);

                     const mother_children_born_alive_but_dead = document.querySelector('input[id=edit-mother_children_born_alive_but_dead]').value;
                     console.log(mother_children_born_alive_but_dead);

                     const mother_occupation = document.querySelector('input[id=edit-mother_occupation]').value;
                     console.log(mother_occupation);

                     const mother_age = document.querySelector('input[id=edit-mother_age]').value;
                     console.log(mother_age);

                     const mother_barangay = document.querySelector('input[id=edit-mother_barangay]').value;
                     console.log(mother_barangay);

                     const mother_municipality = document.querySelector('input[id=edit-mother_municipality]').value;
                     console.log(mother_municipality);

                     const mother_province = document.querySelector('input[id=edit-mother_province]').value;
                     console.log(mother_province);

                     const mother_country = document.querySelector('input[id=edit-mother_country]').value;
                     console.log(mother_country);

                     //FATHER
                     const father_lastname = document.querySelector('input[id=edit-father_lastname]').value;
                     console.log(father_lastname);

                     const father_firstname = document.querySelector('input[id=edit-father_firstname]').value;
                     console.log(father_firstname);

                     const father_middlename = document.querySelector('input[id=edit-father_middlename]').value;
                     console.log(father_middlename);

                     const father_citizenship = document.querySelector('input[id=edit-father_citizenship]').value;
                     console.log(father_citizenship);

                     const father_religion = document.querySelector('input[id=edit-father_religion]').value;
                     console.log(father_religion);

                     const father_occupation = document.querySelector('input[id=edit-father_occupation]').value;
                     console.log(father_occupation);

                     const father_age = document.querySelector('input[id=edit-father_age]').value;
                     console.log(father_age);

                     const father_barangay = document.querySelector('input[id=edit-father_barangay]').value;
                     console.log(father_barangay);

                     const father_municipality = document.querySelector('input[id=edit-father_municipality]').value;
                     console.log(father_municipality);

                     const father_province = document.querySelector('input[id=edit-father_province]').value;
                     console.log(father_province);

                     const father_country = document.querySelector('input[id=edit-father_country]').value;
                     console.log(father_country);

                     //MARRIAGE

                     const parents_marriage_date = document.querySelector('input[id=edit-parents_marriage_date]').value;
                     console.log(parents_marriage_date);

                     const parents_marriage_municipality = document.querySelector('input[id=edit-parents_marriage_municipality]').value;
                     console.log(parents_marriage_municipality);

                     const parents_marriage_province = document.querySelector('input[id=edit-parents_marriage_province]').value;
                     console.log(parents_marriage_province);

                     const parents_marriage_country = document.querySelector('input[id=edit-parents_marriage_country]').value;
                     console.log(parents_marriage_country);

                    // Certification of informant
                     const informant_signature = document.querySelector('input[id=edit-informant_signature]').value;
                     console.log(informant_signature);

                     const informant_name = document.querySelector('input[id=edit-informant_name]').value;
                     console.log(informant_name);

                     const informant_relationship = $('#edit-informant_relationship option:selected').val();
                     console.log(informant_relationship);

                     const informant_address = document.querySelector('input[id=edit-informant_address]').value;
                     console.log(informant_address);

                     const informant_date = document.querySelector('input[id=edit-informant_date]').value;
                     console.log(informant_date);


                    //Prepared by
                     const prepared_by_signature = document.querySelector('input[id=edit-prepared_by_signature]').value;
                     console.log(prepared_by_signature);

                     const prepared_by_name = document.querySelector('input[id=edit-prepared_by_name]').value;
                     console.log(prepared_by_name);

                     const prepared_by_position = $('#edit-prepared_by_position option:selected').val();
                     console.log(prepared_by_position);

                     const prepared_by_date = document.querySelector('input[id=edit-prepared_by_date]').value;
                     console.log(prepared_by_date);

                     //Received by
                     const received_by_signature = document.querySelector('input[id=edit-received_by_signature]').value;
                     console.log(received_by_signature);

                     const received_by_name = document.querySelector('input[id=edit-received_by_name]').value;
                     console.log(received_by_name);

                     const received_by_position = $('#edit-received_by_position option:selected').val();
                     console.log(received_by_position);

                     const received_by_date = document.querySelector('input[id=edit-received_by_date]').value;
                     console.log(received_by_date);

                     //Received by the civil registrar
                     const registered_by_signature = document.querySelector('input[id=edit-registered_by_signature]').value;
                     console.log(registered_by_signature);

                     const registered_by_name = document.querySelector('input[id=edit-registered_by_name]').value;
                     console.log(registered_by_name);

                     const registered_by_position = $('#edit-registered_by_position option:selected').val();
                     console.log(registered_by_position);

                     const registered_by_date = document.querySelector('input[id=edit-registered_by_date]').value;
                     console.log(registered_by_date);

                    // Remarks
                     const remarks = document.querySelector('input[id=edit-remarks]').value;
                     console.log(remarks);

                    const id = document.querySelector('input[id=edit-id]').value;
                    console.log(id);



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

                    data.append('id', id);


                    $('#edit-child_lastname-error').html("");
                    $('#edit-child_firstname-error').html("");
                    $('#edit-child_middlename-error').html("");
                    $('#edit-child_sex-error').html("");
                    $('#edit-child_date_of_birth-error').html("");
                    $('#edit-child_place_of_barangay_hospitalname-error').html("");
                    $('#edit-child_municipality-error').html("");
                    $('#edit-child_province-error').html("");
                    $('#edit-child_type_of_birth-error').html("");
                    $('#edit-child_multiple_birth-error').html("");
                    $('#edit-child_birth_order-error').html("");
                    $('#edit-child_weight_at_birth-error').html("");

                    $('#edit-mother_lastname-error').html("");
                    $('#edit-mother_firstname-error').html("");
                    $('#edit-mother_middlename-error').html("");
                    $('#edit-mother_citizenship-error').html("");
                    $('#edit-mother_religion-error').html("");
                    $('#edit-mother_children_born_alive-error').html("");
                    $('#edit-mother_children_still_living-error').html("");
                    $('#edit-mother_children_born_alive_but_dead-error').html("");
                    $('#edit-mother_occupation-error').html("");
                    $('#edit-mother_age-error').html("");
                    $('#edit-mother_barangay-error').html("");
                    $('#edit-mother_municipality-error').html("");
                    $('#edit-mother_province-error').html("");
                    $('#edit-mother_country-error').html("");


                    $('#edit-father_lastname-error').html("");
                    $('#edit-father_firstname-error').html("");
                    $('#edit-father_middlename-error').html("");
                    $('#edit-father_citizenship-error').html("");
                    $('#edit-father_religion-error').html("");
                    $('#edit-father_occupation-error').html("");
                    $('#edit-father_age-error').html("");
                    $('#edit-father_barangay-error').html("");
                    $('#edit-father_municipality-error').html("");
                    $('#edit-father_province-error').html("");
                    $('#edit-father_country-error').html("");


                    $('#edit-parents_marriage_date-error').html("");
                    $('#edit-parents_marriage_municipality-error').html("");
                    $('#edit-parents_marriage_province-error').html("");
                    $('#edit-parents_marriage_country-error').html("");


                    $('#edit-informant_signature-error').html("");
                    $('#edit-informant_name-error').html("");
                    $('#edit-informant_relationship-error').html("");
                    $('#edit-informant_address-error').html("");
                    $('#edit-informant_date-error').html("");

                    $('#edit-prepared_by_signature-error').html("");
                    $('#edit-prepared_by_name-error').html("");
                    $('#edit-prepared_by_position-error').html("");
                    $('#edit-prepared_by_date-error').html("");

                    $('#edit-received_by_signature-error').html("");
                    $('#edit-received_by_name-error').html("");
                    $('#edit-received_by_position-error').html("");
                    $('#edit-received_by_date-error').html("");

                    $('#edit-registered_by_signature-error').html("");
                    $('#edit-registered_by_name-error').html("");
                    $('#edit-registered_by_position-error').html("");
                    $('#edit-registered_by_date-error').html("");

                    $('#edit-remarks-error').html("");

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
                                        $('#edit-child_lastname-error').html(response.errors.child_lastname[0]);
                                    }
                                    if(response.errors.child_firstname){
                                        $('#edit-child_firstname-error').html(response.errors.child_firstname[0]);
                                    }
                                    if(response.errors.child_middlename){
                                        $('#edit-child_middlename-error').html(response.errors.child_middlename[0]);
                                    }
                                    if(response.errors.child_sex){
                                        $('#edit-child_sex-error').html(response.errors.child_sex[0]);
                                    }
                                      if(response.errors.child_date_of_birth){
                                        $('#edit-child_date_of_birth-error').html(response.errors.child_date_of_birth[0]);
                                    }
                                    if(response.errors.child_place_of_barangay_hospitalname){
                                        $('#edit-child_place_of_barangay_hospitalname-error').html(response.errors.child_place_of_barangay_hospitalname[0]);
                                    }
                                    if(response.errors.child_municipality){
                                        $('#edit-child_municipality-error').html(response.errors.child_municipality[0]);
                                    }
                                    if(response.errors.child_province){
                                        $('#edit-child_province-error').html(response.errors.child_province[0]);
                                    }
                                    if(response.errors.child_type_of_birth){
                                        $('#edit-child_type_of_birth-error').html(response.errors.child_type_of_birth[0]);
                                    }
                                    if(response.errors.child_multiple_birth){
                                        $('#edit-child_multiple_birth-error').html(response.errors.child_multiple_birth[0]);
                                    }
                                    if(response.errors.child_birth_order){
                                        $('#edit-child_birth_order-error').html(response.errors.child_birth_order[0]);
                                    }
                                    if(response.errors.child_weight_at_birth){
                                        $('#edit-child_weight_at_birth-error').html(response.errors.child_weight_at_birth[0]);
                                    }
                                    if(response.errors.mother_lastname){
                                        $('#edit-mother_lastname-error').html(response.errors.mother_lastname[0]);
                                    }
                                    if(response.errors.mother_firstname){
                                        $('#edit-mother_firstname-error').html(response.errors.mother_firstname[0]);
                                    }
                                    if(response.errors.mother_middlename){
                                        $('#edit-mother_middlename-error').html(response.errors.mother_middlename[0]);
                                    }
                                    if(response.errors.mother_citizenship){
                                        $('#edit-mother_citizenship-error').html(response.errors.mother_citizenship[0]);
                                    }
                                    if(response.errors.mother_religion){
                                        $('#edit-mother_religion-error').html(response.errors.mother_religion[0]);
                                    }
                                    if(response.errors.mother_children_born_alive){
                                        $('#edit-mother_children_born_alive-error').html(response.errors.mother_children_born_alive[0]);
                                    }
                                    if(response.errors.mother_children_still_living){
                                        $('#edit-mother_children_still_living-error').html(response.errors.mother_children_still_living[0]);
                                    }
                                    if(response.errors.mother_children_born_alive_but_dead){
                                        $('#edit-mother_children_born_alive_but_dead-error').html(response.errors.mother_children_born_alive_but_dead[0]);
                                    }
                                    if(response.errors.mother_occupation){
                                        $('#edit-mother_occupation-error').html(response.errors.mother_occupation[0]);
                                    }
                                    if(response.errors.mother_age){
                                        $('#edit-mother_age-error').html(response.errors.mother_age[0]);
                                    }
                                    if(response.errors.mother_barangay){
                                        $('#edit-mother_barangay-error').html(response.errors.mother_barangay[0]);
                                    }
                                    if(response.errors.mother_municipality){
                                        $('#edit-mother_municipality-error').html(response.errors.mother_municipality[0]);
                                    }
                                    if(response.errors.mother_province){
                                        $('#edit-mother_province-error').html(response.errors.mother_province[0]);
                                    }
                                    if(response.errors.mother_country){
                                        $('#edit-mother_country-error').html(response.errors.mother_country[0]);
                                    }

                                    if(response.errors.father_lastname){
                                        $('#edit-father_lastname-error').html(response.errors.father_lastname[0]);
                                    }
                                    if(response.errors.father_firstname){
                                        $('#edit-father_firstname-error').html(response.errors.father_firstname[0]);
                                    }
                                    if(response.errors.father_middlename){
                                        $('#edit-father_middlename-error').html(response.errors.father_middlename[0]);
                                    }
                                    if(response.errors.father_citizenship){
                                        $('#edit-father_citizenship-error').html(response.errors.father_citizenship[0]);
                                    }
                                    if(response.errors.father_religion){
                                        $('#edit-father_religion-error').html(response.errors.father_religion[0]);
                                    }
                                    if(response.errors.father_occupation){
                                        $('#edit-father_occupation-error').html(response.errors.father_occupation[0]);
                                    }
                                    if(response.errors.father_age){
                                        $('#edit-father_age-error').html(response.errors.father_age[0]);
                                    }
                                    if(response.errors.father_barangay){
                                        $('#edit-father_barangay-error').html(response.errors.father_barangay[0]);
                                    }
                                    if(response.errors.father_municipality){
                                        $('#edit-father_municipality-error').html(response.errors.father_municipality[0]);
                                    }
                                    if(response.errors.father_province){
                                        $('#edit-father_province-error').html(response.errors.father_province[0]);
                                    }
                                    if(response.errors.father_country){
                                        $('#edit-father_country-error').html(response.errors.father_country[0]);
                                    }

                                    if(response.errors.parents_marriage_date){
                                        $('#edit-parents_marriage_date-error').html(response.errors.parents_marriage_date[0]);
                                    }
                                    if(response.errors.parents_marriage_municipality){
                                        $('#edit-parents_marriage_municipality-error').html(response.errors.parents_marriage_municipality[0]);
                                    }
                                    if(response.errors.parents_marriage_province){
                                        $('#edit-parents_marriage_province-error').html(response.errors.parents_marriage_province[0]);
                                    }
                                    if(response.errors.parents_marriage_country){
                                        $('#edit-parents_marriage_country-error').html(response.errors.parents_marriage_country[0]);
                                    }


                                    if(response.errors.informant_signature){
                                        $('#edit-informant_signature-error').html(response.errors.informant_signature[0]);
                                    }
                                    if(response.errors.informant_name){
                                        $('#edit-informant_name-error').html(response.errors.informant_name[0]);
                                    }
                                    if(response.errors.informant_relationship){
                                        $('#edit-informant_relationship-error').html(response.errors.informant_relationship[0]);
                                    }
                                    if(response.errors.informant_address){
                                        $('#edit-informant_address-error').html(response.errors.informant_address[0]);
                                    }
                                    if(response.errors.informant_date){
                                        $('#edit-informant_date-error').html(response.errors.informant_date[0]);
                                    }

                                    if(response.errors.prepared_by_signature){
                                        $('#edit-prepared_by_signature-error').html(response.errors.prepared_by_signature[0]);
                                    }
                                    if(response.errors.prepared_by_name){
                                        $('#edit-prepared_by_name-error').html(response.errors.prepared_by_name[0]);
                                    }
                                    if(response.errors.prepared_by_position){
                                        $('#edit-prepared_by_position-error').html(response.errors.prepared_by_position[0]);
                                    }
                                    if(response.errors.prepared_by_date){
                                        $('#edit-prepared_by_date-error').html(response.errors.prepared_by_date[0]);
                                    }

                                    if(response.errors.received_by_signature){
                                        $('#edit-received_by_signature-error').html(response.errors.received_by_signature[0]);
                                    }
                                    if(response.errors.received_by_name){
                                        $('#edit-received_by_name-error').html(response.errors.received_by_name[0]);
                                    }
                                    if(response.errors.received_by_position){
                                        $('#edit-received_by_position-error').html(response.errors.received_by_position[0]);
                                    }
                                    if(response.errors.received_by_date){
                                        $('#edit-received_by_date-error').html(response.errors.received_by_date[0]);
                                    }

                                    if(response.errors.registered_by_signature){
                                        $('#edit-registered_by_signature-error').html(response.errors.registered_by_signature[0]);
                                    }
                                    if(response.errors.registered_by_name){
                                        $('#edit-registered_by_name-error').html(response.errors.registered_by_name[0]);
                                    }
                                    if(response.errors.registered_by_position){
                                        $('#edit-registered_by_position-error').html(response.errors.registered_by_position[0]);
                                    }
                                    if(response.errors.registered_by_date){
                                        $('#edit-registered_by_date-error').html(response.errors.registered_by_date[0]);
                                    }

                                    if(response.errors.remarks){
                                        $('#edit-remarks-error').html(response.errors.remarks[0]);
                                    }

                                }

                              if(response.status == "200"){
                                $('#edit-msg_birth').html("<div class='alert alert-success' role='alert'><i class='fa fa-check-circle'></i> Child Birth was Edited Successfully!</div>")
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
