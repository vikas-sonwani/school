@extends('../layouts.main')
@section('content')
@include('sweetalert::alert')



<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('candidate.profile.complete') }}" class="was-validated" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-body">

                    <div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-body">
		
										@include('layouts.message')
										<!-- Row start -->
										<div class="row gutters">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
												<div class="alert alert-secondary text-center">
													@if($candidate->candidate_type_id == 2)
														<h4 style="text-transform: uppercase;">Please Complete Your  Referee Profile</h4>
													@elseif($candidate->candidate_type_id == 4)
														<h4 style="text-transform: uppercase;">Please Complete Your Coach Profile</h4>
													@elseif($candidate->candidate_type_id == 8)
														<h4 style="text-transform: uppercase;">Please Complete Your Player Profile</h4>
													@elseif($candidate->candidate_type_id == 10)
														<h4 style="text-transform: uppercase;">Please Complete  Your  Profile</h4>
													@endif

												</div>
												
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
												<div class="form-section-header">Basic Information</div>
											</div>


											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" name="name" id="name" value="{{ $candidate->name }}" readonly="">
													</div>
													<div class="field-placeholder">Name <span class="text-danger">*</span></div>
												</div>
											</div>
											

											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" name="mobile" id="mobile" value="{{ $candidate->dialCode }}{{ $candidate->mobile }}" readonly="">
													</div>
													<div class="field-placeholder">Mobile Number <span class="text-danger">*</span></div>
												</div>
											</div>
											 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text"  name="whatsapp" id="whatsapp" value="{{ old('whatsapp') }}" onchange="getVals(this, 'pincode');" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" required="">
													</div>
													<div class="field-placeholder">Whatsapp Number <span class="text-danger">*</span></div>
													@error('whatsapp')
														<div class="badge bg-danger">{{ $message }}</div>
														
													@enderror
												</div>
											</div>
											
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" name="email" id="email" value="{{ $candidate->email }}" readonly="">
													</div>
													<div class="field-placeholder">Email <span class="text-danger">*</span></div>
													@error('email')
														<div class="badge bg-danger">{{ $message }}</div>
													@enderror
												</div>
											</div>

											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" name="" id="date_of_birth" value="{{ $candidate->date_of_birth }}" readonly="">
													</div>
													<div class="field-placeholder">Date of Birth <span class="text-danger">*</span></div>
													
												</div>
											</div>

                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-12 col-12 mb-2	">
												<!-- Field wrapper start -->
												<div class="field-wrapper">
														<input type="text" class="form-control" required="" id="mother_name" name="mother_name" value="{{ old('mother_name') }}" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required="" >
														<div class="field-placeholder">Mother's Name<span class="text-danger">*</span></div>
												</div>
												<!-- Field wrapper end -->
											</div>


											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" name="father_name" id="father_name" value="{{ old('father_name') }}" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required="">
													</div>
													<div class="field-placeholder">Father's Name <span class="text-danger">*</span></div>
												</div>
												@error('father_name')
													<div class="badge bg-danger">{{ $message }}</div>
												@enderror
												
											</div>
											

                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<div class="input-group">
	                                                    <select class="form-control" name="bloodgroup" required>
															<option value="">Select Blood Group</option>
															<option value="A+">A+</option>
															<option value="O+">O+</option>
															<option value="B+">B+</option>
															<option value="AB+">AB+</option>
															<option value="A-">A-</option>
															<option value="O-">O-</option>
															<option value="B-">B-</option>
															<option value="AB-">AB-</option>
															<option value="Don't Know">Don't Know</option>
														</select>
													</div>
													<div class="field-placeholder">Blood Group <span class="text-danger">*</span></div>
												</div>
											</div>

											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<label>Marital Status<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1 ">
														<input class="form-check-input" type="radio" name="marital_status" value="yes"  {{ (old('hq') == 'yes') ? 'checked' : ''}}  required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="marital_status" value="no" {{ (old('hq') == 'no') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
													
												</div>
											
											</div>

											
											
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
												<div class="form-section-header">Residential Address</div>
											</div>
											

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<textarea class="form-control" rows="2" id="address" name="address" required="">{{ old('address') }}</textarea>
													<div class="field-placeholder">Address <span class="text-danger">*</span></div>
													
													@error('address')
														<div class="badge bg-danger">{{ $message }}</div>
														
													@enderror
												</div>
												<!-- Field wrapper end -->
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" id="house_no" name="house_no" value="{{ old('house_no') }}">
													</div>
													<div class="field-placeholder">House Number </div>
												</div>
												<!-- Field wrapper end -->
											</div>


											@if($candidate->country == 102)
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="input-group">
	                                                    <select class="form-control" id="state" name="state" onchange="getDistrictList()" required="">
	                                                        <option value=""> --Select state--</option>
	                                                        @foreach($state as $key => $value)
	                                                            <option value="{{ $value->id }}"> {{ $value->states_name }}  </option>
	                                                        @endforeach
	                                                    </select>
													</div>
													<div class="field-placeholder">State <span class="text-danger">*</span></div>
												</div>
											</div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="input-group">
                                                        <select class="form-control" id="district" name="district_city" required="">
                                                            <option value=""> --Select District/City--</option>
                                                        </select>
													</div>
													<div class="field-placeholder">District/City <span class="text-danger">*</span></div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" id="pincode" value="{{ old('pincode') }}" name="pincode" onchange="getVals(this, 'pincode');" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="">
													</div>
													<div class="field-placeholder">Pincode <span class="text-danger">*</span></div>
												</div>
											</div>
											@else

											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" name="city" onchange="getVals(this, 'city');" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
													</div>
													<div class="field-placeholder">City <span class="text-danger">*</span></div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="text" id="pincode" value="{{ old('pincode') }}" name="pincode" onchange="getVals(this, 'pincode');" >
													</div>
													<div class="field-placeholder">Zipcode <span class="text-danger">*</span></div>
												</div>
											</div>

											@endif
											
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
												<div class="form-section-header">Basic Document <span class="title-danger">(Note: Max file size limit: 300KB)</span></div>
											</div>

											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="file" name="photo" id="photo" accept="image/*" required="">
													</div>
													<div class="field-placeholder">Upload Your Photo <span class="text-danger">*</span></div>
													@error('photo')
														<div class="badge bg-danger">{{ $message }}</div>
													@enderror
													<span class="badge bg-danger"> <small>Image Only - Max file size limit: 300KB</small></span>
													<div id="photo-error"></div>
												
												</div>
											</div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="file" name="signature" id="signature" accept="image/*" required="">
													</div>
													<div class="field-placeholder">Upload Your Signature <span class="text-danger">*</span></div>
													<span class="badge bg-danger"> <small>Image Only - Max file size limit: 300KB</small></span>
													<div id="signature-error"></div>

												</div>
												<!-- Field wrapper end -->

											</div>
                                            
                                            
                                            @if($candidate->country == 102)
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<select class="form-control" name="idproof_name" required="">
															<option value="">Select ID Proof</option>
															<option value="Aadhar Card">Aadhar Card</option>
															<option value="PAN Card">PAN Card</option>
															<option value="Voter ID">Voter ID</option>
															<option value="Passport">Passport</option>
														</select>
													</div>
													<div class="field-placeholder">ID Proof <span class="text-danger">*</span></div>
												</div>
											</div>
											@else
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input type="text" class="form-control" name="idproof_name" value="{{ old('idproof_name') }}" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
													</div>
													<div class="field-placeholder">ID Proof <span class="text-danger">*</span></div>

												</div>
											</div>
											@endif

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="file" name="idproof"  id="idproof" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="">
													</div>
													<div class="field-placeholder">Upload ID Proof Document<span class="text-danger">*</span></div>
													<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
													<div id="idproof-error"></div>
												</div>
												<!-- Field wrapper end -->
											</div>

                                            @if($candidate->country == 102)
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<select class="form-control" name="dobproof_name" required="">
															<option value="">Select D.O.B. Proof</option>
															<option value="Birth Certificate">Birth Certificate</option>
															<option value="10th Marksheet">10th Marksheet</option>
														</select>
													</div>
													<div class="field-placeholder">D.O.B. Proof <span class="text-danger">*</span></div>
												</div>
											</div>
											@else
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<div class="input-group">
														<input type="text" name="dobproof_name" class="form-control" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
													</div>
													<div class="field-placeholder">D.O.B. Proof <span class="text-danger">*</span></div>
												</div>
											</div>
											@endif

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<div class="input-group">
														<input class="form-control" type="file" name="dobproof" id="dobproof" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="">
														
													</div>
													<div class="field-placeholder">Upload D.O.B. Proof Document<span class="text-danger">*</span></div>
													<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
													<div id="dobproof-error"></div>
												</div>
												<!-- Field wrapper end -->

											</div>
                                           
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
												<div class="form-section-header">Qualification</div>
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<label>Highest Qualification<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1 ">
														<input class="form-check-input" type="radio" name="hq" value="yes"  {{ (old('hq') == 'yes') ? 'checked' : ''}}  required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="hq" value="no" {{ (old('hq') == 'no') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
													
												</div>
											
											</div>

											<div class="{{ (old('hq') == 'yes') ? '' : 'd-none'}} " id="a1">
												<div class="row">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="text" name="higher_qualification_name" value="{{ old('higher_qualification_name') }}" id="higher_qualification_name" >
															</div>
															<div class="field-placeholder">Highest Qualification Name<span class="text-danger">*</span></div>
															@error('higher_qualification_name')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
														</div>
														
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file"  name="higher_qualification" id="a2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Highest Qualification Document<span class="text-danger">*</span></div>
															@error('higher_qualification')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="a2-error"></div>
														</div>											
													</div>
												</div>
												
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<label>Highest Qualification in Yoga<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1 ">
														<input class="form-check-input" type="radio" name="yhq" value="yes"  {{ (old('yhq') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="yhq" value="no"  {{ (old('yhq') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
													
												</div>
												
											</div>

											<div class="{{ (old('yhq') == 'yes') ? '' : 'd-none'}}" id="b1">
												<div class="row">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
															<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="text" name="yoga_higher_qualification_name" id="yoga_higher_qualification_name"  value="{{ old('yoga_higher_qualification_name') }}" >
															</div>
															<div class="field-placeholder">Yoga Highest Qualification Name<span class="text-danger">*</span></div>
															@error('yoga_higher_qualification_name')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
														</div>
														
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file" name="yoga_higher_qualification" id="b2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Yoga Highest Qualification Document<span class="text-danger">*</span></div>
															@error('yoga_higher_qualification')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="b2-error"></div>
														
														</div>											
													</div>
												</div>
												
											</div>

											
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												
												<label>Any Other Qualification<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1 ">
														<input class="form-check-input" type="radio" name="aoq" value="yes"  {{ (old('aoq') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="aoq" value="no"  {{ (old('aoq') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
													
												</div>
												
											</div>

											
											<div class="{{ (old('aoq') == 'yes') ? '' : 'd-none'}} " id="c1">
												<div class="row">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="text" name="other_qualification_name" id="other_qualification_name"  value="{{ old('other_qualification_name') }}"  >
															</div>
															<div class="field-placeholder">Other Qualification  Name<span class="text-danger">*</span></div>
															@error('other_qualification_name')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
														</div>
														
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file" name="other_qualification"   id="c2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Other Qualification Document<span class="text-danger">*</span></div>
															@error('other_qualification')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="c2-error"></div>
														
														</div>											

													</div>
												</div>
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<label>Do you have Computer Knowledge<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1 ">
														<input class="form-check-input" type="radio" name="computer_knowledge" value="yes"  {{ (old('computer_knowledge') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="computer_knowledge" value="no"  {{ (old('computer_knowledge') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
												</div>
											</div>

                                           
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
												<div class="form-section-header">Achievement  in Yogasana Sports</div>
											</div>

											@if($candidate->candidate_type_id == 2 || $candidate->candidate_type_id == 4)
												<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
													<div class="field-wrapper">
														<div class="input-group">
		                                                    <select class="form-control" name="intrest_in" required>
																<option value="">Select Activity</option>
																<option value="Yogasana">Yogasana</option>
																<option value="Artistic Yogasana">Artistic Yogasana</option>
																<option value="Both">Yogasana / Artistic Yogasana (Both)</option>
															</select>
														</div>
														<div class="field-placeholder">Intrested In <span class="text-danger">*</span></div>
													</div>
												</div>
											@endif

											@if($candidate->candidate_type_id == 15)
												<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
													<div class="field-wrapper">
														<div class="input-group">
		                                                    <select class="form-control" name="intrest_in" required>
																<option value="">Select Activity</option>
																<option value="Yogasana">Yogasana</option>
																<option value="Artistic Yogasana">Artistic Yogasana</option>
																<option value="Basic Yoga">Basic Yoga</option>
																<option value="Home Classes">Home Classes</option>
																<option value="Advance Yogasana">Advance Yogasana</option>
																<option value="Zumba">Zumba</option>
																<option value="Power of Yoga">Power of Yoga</option>
																<option value="Aerobic">Aerobic</option>
																<option value="Shatkarmas">Shatkarmas</option>
															</select>
														</div>
														<div class="field-placeholder">Intrested In <span class="text-danger">*</span></div>
													</div>
												</div>
											@endif

											

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label>As a Yogasana Player<br></label>
												<div>
													<div class="form-check form-check-inline  mt-1 mb-1 ">
														<input class="form-check-input" type="radio" name="yp" value="yes"  {{ (old('yp') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="yp" value="no"  {{ (old('yp') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
												</div>
                                            </div>

											<div class="{{ (old('yp') == 'yes') ? '' : 'd-none'}}" id="d1">
												<div class="row">
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="yogasana_levels" id="yogasana_levels">
																	<option value="">Select Level</option>
																	<option value="District Level">District Level</option>
																	<option value="Inter School Level">Inter School Level</option>
																	<option value="State Level">State Level</option>
																	<option value="University Level">University Level</option>
																	<option value="National Level">National Level</option>
																	<option value="International Level">International Level</option>
																</select>
															</div>
															<div class="field-placeholder">Level of Yogasana Player <span class="text-danger">*</span></div>
														</div>
													</div>

													

													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file"  name="achivement_player"  id="d2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Upload Document<span class="text-danger">*</span></div>
															@error('other_qualification')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="d2-error"></div>
														</div>											
													</div>
												</div>
											</div>

											@if($candidate->candidate_type_id == 2)
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label>Experience Certificate of Referee<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="ecor" value="yes"  {{ (old('os') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="ecor" value="no"  {{ (old('os') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
												</div>
                                            </div>
											<div class="{{ (old('os') == 'yes') ? '' : 'd-none'}}" id="f1">
												<div class="row">
													
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="experience_certificate_name" id="experience_certificate_name">
																	<option value="">Select Level</option>
																	<option value="District Level">District Level</option>
																	<option value="Inter School Level">Inter School Level</option>
																	<option value="State Level">State Level</option>
																	<option value="University Level">University Level</option>
																	<option value="National Level">National Level</option>
																	<option value="International Level">International Level</option>
																</select>
															</div>
															<div class="field-placeholder">Level of Experience<span class="text-danger">*</span></div>
														</div>

													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file"   name="experience_certificate" id="f2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Upload Document<span class="text-danger">*</span></div>
															@error('other_qualification')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="f2-error"></div>
														</div>											
													</div>
												</div>
											</div>
											@endif

											@if($candidate->candidate_type_id == 15)
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label>Experience Certificate of Yoga<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="ecor" value="yes"  {{ (old('ecor') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="ecor" value="no"  {{ (old('ecor') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
												</div>
                                            </div>
											<div class="{{ (old('os') == 'yes') ? '' : 'd-none'}}" id="f1">
												<div class="row">
													
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="experience_certificate_name" required>
																	<option value="">Select Activity</option>
																	<option value="Yogasana">Yogasana</option>
																	<option value="Artistic Yogasana">Artistic Yogasana</option>
																	<option value="Basic Yoga">Basic Yoga</option>
																	<option value="Home Classes">Home Classes</option>
																	<option value="Advance Yogasana">Advance Yogasana</option>
																	<option value="Zumba">Zumba</option>
																	<option value="Power of Yoga">Power of Yoga</option>
																	<option value="Aerobic">Aerobic</option>
																	<option value="Shatkarmas">Shatkarmas</option>
																</select>
															</div>
															<div class="field-placeholder">Select Activities<span class="text-danger">*</span></div>
														</div>
													</div>


													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file"   name="experience_certificate" id="f2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Upload Document<span class="text-danger">*</span></div>
															@error('other_qualification')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="f2-error"></div>
														</div>											
													</div>
												</div>
											</div>
											@endif


											@if($candidate->candidate_type_id == 15)
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label> Yoga Instructor Certificate of coach in Yoga<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="coachinyoga" value="yes"  {{ (old('os') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="coachinyoga" value="no"  {{ (old('os') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
												</div>
                                            </div>
											<div class="{{ (old('os') == 'yes') ? '' : 'd-none'}}" id="g1">
												<div class="row">
													
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="coach_certificate_name" id="coach_certificate_name">
																	<option value="">Select Level</option>
																	<option value="NIS Level">NIS Level</option>
																	<option value="Institution Level">Institution Level</option>
																	<option value="Board Level">Board Level</option>
																	<option value="University Level">University Level</option>
																</select>
															</div>
															<div class="field-placeholder">Select Level <span class="text-danger">*</span></div>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file"   name="coach_certificate" id="g2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Upload Document<span class="text-danger">*</span></div>
															@error('coach_certificate')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="g2-error"></div>
														</div>											
													</div>
												</div>
											</div>
											@endif

											@if($candidate->candidate_type_id == 4)
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label> Certificate of coach in yoga.<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="coachinyoga" value="yes"  {{ (old('os') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="coachinyoga" value="no"  {{ (old('os') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
												</div>
                                            </div>
											<div class="{{ (old('os') == 'yes') ? '' : 'd-none'}}" id="g1">
												<div class="row">
													
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="coach_certificate_name" id="coach_certificate_name">
																	<option value="">Select Level</option>
																	<option value="NIS Level">NIS Level</option>
																	<option value="Institution Level">Institution Level</option>
																	<option value="Board Level">Board Level</option>
																	<option value="University Level">University Level</option>
																</select>
															</div>
															<div class="field-placeholder">Select Level <span class="text-danger">*</span></div>
														</div>
													</div>

													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file"   name="coach_certificate" id="g2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Upload Document<span class="text-danger">*</span></div>
															@error('coach_certificate')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="g2-error"></div>
														</div>											
													</div>
												</div>
											</div>
											@endif


											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label>Other Sports<br></label>
												<div >
													<div class="form-check form-check-inline  mt-1 mb-1 ">
														<input class="form-check-input" type="radio" name="os" value="yes"  {{ (old('os') == 'yes') ? 'checked' : ''}} required="required" >
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="os" value="no"  {{ (old('os') == 'yes') ? 'checked' : ''}} required="required">
														<label class="form-check-label" for="inlineRadio2a">No</label>
													</div>
												</div>
                                            </div>


											<div class="{{ (old('os') == 'yes') ? '' : 'd-none'}}" id="e1">
												<div class="row">
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="text"  name="other_sports_name" id="other_sports_name" value="{{ old('other_sports_name') }}" >
															</div>
															<div class="field-placeholder">Sports Name<span class="text-danger">*</span></div>
															@error('other_sports_name')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
														</div>
													</div>

													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="other_levels" id="other_levels">
																	<option value="">Select Level</option>
																	<option value="District Level">District Level</option>
																	<option value="Inter School Level">Inter School Level</option>
																	<option value="State Level">State Level</option>
																	<option value="University Level">University Level</option>
																	<option value="National Level">National Level</option>
																	<option value="International Level">International Level</option>
																</select>
															</div>
															<div class="field-placeholder">Level of Other Sports <span class="text-danger">*</span></div>
														</div>
													</div>

													

													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="file"   name="other_sport" id="e2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Upload Document<span class="text-danger">*</span></div>
															@error('other_sport')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="e2-error"></div>
														
														</div>											
													</div>
												</div>
											</div>


											

                                            
											<div class="col-xl-12 col-lg-12 mt-4 col-md-12 col-sm-12 col-12 text-center">
												<button class="btn btn-primary" >Save Your Profile</button>
											</div>
										</div>
										<!-- Row end -->

									</div>
								</div>
								<!-- Card end -->

							</div>
						</div>
                       
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('script')
<script src="{{ asset('reg/js/functions.js') }}"></script>

@endpush
@endsection