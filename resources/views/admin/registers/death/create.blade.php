<div class="modal fade" id="DeathRegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-plus-circle"></i> BIRTH REGISTRATION</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
           <div class="col-lg-11 mb-2 mt-1" id="mgs-death" style="margin-left: 4%"></div>
           <div id="msg_death"></div>
                <form>
                <div class="modal-body">
                      @csrf
                      @method('POST')

                       <div class="row justify-content-md-center">

                          <div class="col-sm-12 col-md-12 col-lg-10">
                               <hr>
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#737373;color: rgb(255, 255, 255);font-size: 1.2rem;margin-top: 2%"><center><b>DECEASED PERSON INFORMATION</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12" id="lnamez">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" name="last_name" id="last_name" autocomplete="off">
                                            <span class="last_name-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12" id="lnamez">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" autocomplete="off">
                                            <span class="first_name-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Middle Name:</label>
                                          <input type="text" class="form-control" name="middle_name" id="middle_name" minlength="10" maxlength="10" autocomplete="off">
                                           <span class="middle_name-error"></span>
                                      </div>
                                    </div>

                                </div>

                                <div class="row mb-3 mt-1">

                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                        <label>Date of Death:</label>
                                        <input type="date" class="form-control" name="date_of_death" id="date_of_death" autocomplete="off">
                                          <span class="date_of_death-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                          <label>Date of Birth:</label>
                                          <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" autocomplete="off">
                                          <span class="date_of_birth-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                                      <div class="form-group">
                                          <label>Age at Death:</label>
                                          <input type="text" class="form-control" name="age_at_death" id="age_at_death" placeholder="" autocomplete="off">
                                          <span class="age_at_death-error"></span>
                                      </div>
                                  </div>

                                </div>

                              <div class="row mb-2">

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Place of Death:</label>
                                          <input type="text" class="form-control" name="place_of_death" id="place_of_death" placeholder=""  autocomplete="off">
                                          <span class="place_of_death-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Civil Status:</label>
                                          <select class="form-control" name="civil_status" id="civil_status"  autocomplete="off">
                                            <option value="">&larr; Please Select &rarr;</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Divorced">Divorced</option>
                                           </select>
                                          <span class="civil_status-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Religion:</label>
                                          <input type="text" class="form-control" name="religion" id="religion" placeholder=""  autocomplete="off">
                                           </select>
                                          <span class="religion-error"></span>
                                      </div>
                                  </div>

                              </div>

                              <div class="row">

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Citizenship:</label>
                                          <input type="text" class="form-control" name="citizenship" id="citizenship" placeholder="" autocomplete="off">
                                           <span class="citizenship-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Residence:</label>
                                          <input type="text" class="form-control" name="residence" id="residence" placeholder="" autocomplete="off">
                                          <span class="residence-error"></span>
                                      </div>
                                  </div>

                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Occupation:</label>
                                          <input type="text" class="form-control" name="occupation" id="occupation" placeholder=""  autocomplete="off">
                                          <span class="occupation-error"></span>
                                      </div>
                                  </div>

                              </div>


                              <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Father's Name:</label>
                                        <input type="text" class="form-control" name="father_name" id="father_name" placeholder="" autocomplete="off">
                                         <span class="father_name-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Mother's Name:</label>
                                        <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="" autocomplete="off">
                                        <span class="mother_name-error"></span>
                                    </div>
                                </div>


                            </div>


                              <br>
                              <hr>

                              <!-- ////////////////////////////////GAP//////////////////////// -->
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#737373;color: rgb(255, 255, 255);font-size: 1.2rem;margin-top: 2%"><center><b>MEDICAL CERTIFICATES INFORMATION</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Intermediate Cause:</label>
                                            <input type="text" class="form-control" name="intermediate_cause" id="intermediate_cause" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="intermediate_cause-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Antecedence Cause:</label>
                                            <input type="text" class="form-control" name="antecedence_cause" id="antecedence_cause" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="antecedence_cause-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Underlying Cause:</label>
                                            <input type="email" class="form-control" name="underlying_cause" id="underlying_cause" placeholder=""  autocomplete="off">
                                            <span class="underlying_cause-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Maternal Condition:</label>
                                            <input type="text" class="form-control" name="maternal_condition" id="maternal_condition" placeholder="" autocomplete="off">
                                            <span class="maternal_condition-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Death by External Causes:</label>
                                            <input type="text" class="form-control" name="death_by_external_causes" id="death_by_external_causes" placeholder="" autocomplete="off">
                                            <span class="death_by_external_causes-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Manner of Death:</label>
                                            <input type="text" class="form-control" name="manner_of_death" id="manner_of_death" placeholder=""  autocomplete="off">
                                            <span class="manner_of_death-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Place of Occurence:</label>
                                            <input type="text" class="form-control" name="place_of_occurrence" id="place_of_occurrence" placeholder="" autocomplete="off">
                                            <span class="place_of_occurrence-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Autopsy:</label>
                                            <input type="text" class="form-control" name="autopsy" id="autopsy" placeholder="" autocomplete="off">
                                            <span class="autopsy-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Attendant:</label>
                                            <input type="text" class="form-control" name="attendant" id="attendant" placeholder=""  autocomplete="off">
                                            <span class="attendant-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Attended Date:</label>
                                            <input type="text" class="form-control" name="attended_date" id="attended_date" placeholder="" autocomplete="off">
                                            <span class="attended_date-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Corpse Disposal:</label>
                                            <input type="text" class="form-control" name="corpse_disposal" id="corpse_disposal" placeholder="" autocomplete="off">
                                            <span class="corpse_disposal-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Burial Permit:</label>
                                            <input type="text" class="form-control" name="burial_permit" id="burial_permit" placeholder=""  autocomplete="off">
                                            <span class="burial_permit-error"></span>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Burial Date Issued:</label>
                                            <input type="text" class="form-control" name="burial_date_issued" id="burial_date_issued" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="burial_date_issued-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Transfer Permit Number:</label>
                                            <input type="text" class="form-control" name="transfer_permit_number" id="transfer_permit_number" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="transfer_permit_number-error"></span>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Transfer Date Issued:</label>
                                            <input type="text" class="form-control" name="transfer_date_issued" id="transfer_date_issued" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="transfer_date_issued-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Cementery Address:</label>
                                            <input type="text" class="form-control" name="cemetery_address" id="cemetery_address" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                            <span class="cemetery_address-error"></span>
                                        </div>
                                    </div>

                                </div>


                                <br>
                                <hr>


                                <!-- ////////////////////////////////GAP//////////////////////// -->
                              <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#737373;color: rgb(255, 255, 255);font-size: 1.2rem;margin-top: 2%"><center><b>CERTIFICATION OF DEATH</b></center></div>

                              <div class="row">

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Attendant Name:</label>
                                          <input type="text" class="form-control" name="attendant_name" id="attendant_name" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                          <span class="attendant_name-error"></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Position:</label>
                                          <input type="text" class="form-control" name="position" id="position" placeholder="" autocomplete="off">
                                          <span class="position-error"></span>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Date:</label>
                                          <input type="date" class="form-control" name="date" id="date" placeholder=""  autocomplete="off">
                                          <span class="date-error"></span>
                                      </div>
                                  </div>

                              </div>

                              <div class="row">

                                  <div class="col-lg-12 col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <label>Address:</label>
                                          <input type="text" class="form-control" name="address" id="address" placeholder="" autocomplete="off">
                                          <span class="address-error"></span>
                                      </div>
                                  </div>

                              </div>


                              <br>
                              <hr>


                               <!-- ////////////////////////////////GAP//////////////////////// -->
                               <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#737373;color: rgb(255, 255, 255);font-size: 1.2rem;margin-top: 2%"><center><b>CERTIFICATION OF INFORMANTS</b></center></div>

                               <div class="row">

                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                       <div class="form-group">
                                           <label>Informant Name:</label>
                                           <input type="text" class="form-control" name="informant_name" id="informant_name" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                           <span class="informant_name-error"></span>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                       <div class="form-group">
                                           <label>Relationship:</label>
                                           <input type="text" class="form-control" name="relationship" id="relationship" placeholder="" autocomplete="off">
                                           <span class="relationship-error"></span>
                                       </div>
                                   </div>

                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                       <div class="form-group">
                                           <label>Date:</label>
                                           <input type="date" class="form-control" name="date" id="date" placeholder=""  autocomplete="off">
                                           <span class="date-error"></span>
                                       </div>
                                   </div>

                               </div>

                               <div class="row">

                                   <div class="col-lg-12 col-md-6 col-sm-12">
                                       <div class="form-group">
                                           <label>Address:</label>
                                           <input type="text" class="form-control" name="address" id="address" placeholder="" autocomplete="off">
                                           <span class="address-error"></span>
                                       </div>
                                   </div>

                               </div>


                               <br>
                               <hr>


                               <!-- ////////////////////////////////GAP//////////////////////// -->
                               <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#737373;color: rgb(255, 255, 255);font-size: 1.2rem;margin-top: 2%"><center><b>RECEIVED BIE</b></center></div>

                               <div class="row">

                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                       <div class="form-group">
                                           <label>Receiver Name:</label>
                                           <input type="text" class="form-control" name="receiver_name" id="receiver_name" placeholder="" minlength="11" maxlength="11" autocomplete="off">
                                           <span class="receiver_name-error"></span>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                       <div class="form-group">
                                           <label>Relationship:</label>
                                           <input type="text" class="form-control" name="relationship" id="relationship" placeholder="" autocomplete="off">
                                           <span class="relationship-error"></span>
                                       </div>
                                   </div>

                                   <div class="col-lg-4 col-md-6 col-sm-12">
                                       <div class="form-group">
                                           <label>Date:</label>
                                           <input type="date" class="form-control" name="date" id="date" placeholder=""  autocomplete="off">
                                           <span class="date-error"></span>
                                       </div>
                                   </div>

                               </div>

                               <div class="row">

                                   <div class="col-lg-12 col-md-6 col-sm-12">
                                       <div class="form-group">
                                           <label>Address:</label>
                                           <input type="text" class="form-control" name="address" id="address" placeholder="" autocomplete="off">
                                           <span class="address-error"></span>
                                       </div>
                                   </div>

                               </div>


                               <br>
                               <hr>


                              <!-- ////////////////////////////////GAP//////////////////////// -->
                                <div class="" style="border: 1PX solid #b3f0fc;padding: 1%;background-color:#E7F1E3;color: black;font-size: 1.2rem;margin-top: 2%"><center><b>OFFICE OF CIVIL REGISTRARS</b></center></div>

                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" name="father_lastname" id="father_lastname" placeholder="" autocomplete="off">
                                            <span class="father_lastname-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" name="father_firstname" id="father_firstname" placeholder="" autocomplete="off">
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
                                            <input type="text" class="form-control" name="father_citizenship" id="father_citizenship" placeholder="" autocomplete="off">
                                            <span class="father_citizenship-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <input type="text" class="form-control" name="father_religion" id="father_religion" placeholder="" autocomplete="off">
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
                                            <input type="text" class="form-control" name="father_age" id="father_age" placeholder="" autocomplete="off">
                                            <span class="father_age-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Barangay:</label>
                                            <input type="text" class="form-control" name="father_barangay" id="father_barangay" placeholder="" autocomplete="off">
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
                                            <input type="text" class="form-control" name="father_province" id="father_province" placeholder="" autocomplete="off">
                                            <span class="father_province-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country:</label>
                                            <input type="text" class="form-control" name="father_country" id="father_country" placeholder="" autocomplete="off">
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
