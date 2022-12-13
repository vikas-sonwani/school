@extends('../layouts.main')
@section('content')
@include('sweetalert::alert')

<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('profile.editProfile') }}" class="was-validated" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-body">

                    <div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-secondary text-center">UPDATE PROFILE</div>
											</div>
										</div>
										
										@include('layouts.message')
										
										<!-- Row start -->
										<div class="row gutters">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
												
											</div>

                                           
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
												<div class="form-section-header">Qualification </div>
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<label>Highest Qualification<br></label>
											</div>

											<div class="" id="a1">
												<div class="row">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="text" name="higher_qualification_name" id="higher_qualification_name" value="{{ $candidate->higher_education_name }}">
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
																<input class="form-control" type="file" name="higher_qualification" id="a2" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
															</div>
															<div class="field-placeholder">Highest Qualification Document<span class="text-danger">*</span></div>
															@error('higher_qualification')
																<div class="badge bg-danger">{{ $message }}</div>
															@enderror
															@if($candidate->higher_education != '')
																<span class="badge bg-success"><a href="{{ $candidate->higher_education }}" target="_blank"><small class="text-white">View Doc</small></a></span>
															@endif
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="a2-error"></div>
														</div>
													</div>
												</div>
												
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<label>Highest Qualification in Yoga  <br></label>
											</div>

											<div id="b1">
												<div class="row">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
															<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="text" name="yoga_higher_qualification_name" id="yoga_higher_qualification_name"  value="{{ $candidate->yoga_certificate_name }}" >
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
															@if($candidate->yoga_certificate != '')
																<span class="badge bg-success"><a href="{{ $candidate->yoga_certificate }}" target="_blank"><small class="text-white">View Doc</small></a></span>
															@endif
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="b2-error"></div>
														
														</div>											
													</div>
												</div>
												
											</div>

											
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<label>Any Other Qualification<br></label>
											</div>

											
											<div id="c1">
												<div class="row">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="text" name="other_qualification_name" id="other_qualification_name"  value="{{ $candidate->other_qualification_name }}"  >
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
															@if($candidate->other_qualification != '')
																<span class="badge bg-success"><a href="{{ $candidate->other_qualification }}" target="_blank"><small class="text-white">View Doc</small></a></span>
															@endif
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="c2-error"></div>
														
														</div>											

													</div>
												</div>
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<label>Do you have Computer Knowledge <br></label>
												@php
													$yes = '';
													$no = 'checked';
													if($candidate->computer_knowledge == 'yes'){
														$yes = 'checked';
														$no = '';
													}
												@endphp
												<div>
													<div class="form-check form-check-inline  mt-1 mb-1 ">
														<input class="form-check-input" type="radio" name="computer_knowledge" value="yes" @php echo $yes; @endphp required="required">
														<label class="form-check-label" for="inlineRadio1a">Yes</label>
													</div>
													<div class="form-check form-check-inline  mt-1 mb-1">
														<input class="form-check-input" type="radio" name="computer_knowledge" value="no" @php echo $no; @endphp required="required">
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
																@php
																	$activityarr = array('Yogasana'=>'Yogasana', 'Artistic Yogasana'=>'Artistic Yogasana', 'Both'=>'Yogasana / Artistic Yogasana (Both)');
																	foreach($activityarr as $key => $value){
																		if($candidate->intrest_in == $key){
																			echo  '<option value="'.$key.'" selected>'.$value.'</option>';
																		}else{
																			echo  '<option value="'.$key.'">'.$value.'</option>';
																		}
																	}
																@endphp
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
																@php
																	$levelarr12 = array('Yogasana', 'Artistic Yogasana', 'Basic Yoga', 'Home Classes', 'Advance Yogasana', 'Zumba', 'Power of Yoga', 'Aerobic', 'Shatkarmas');
																	foreach($levelarr12 as $value){
																		if($value == $candidate->intrest_in){
																			echo '<option value="'.$value.'" selected>'.$value.'</option>';
																		}else{
																			echo '<option value="'.$value.'">'.$value.'</option>';
																		}
																	}
																@endphp
															</select>
														</div>
														<div class="field-placeholder">Intrested In <span class="text-danger">*</span></div>
													</div>
												</div>
											@endif

											

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label>As a Yogasana Player<br></label>
                                            </div>

											<div id="d1">
												<div class="row">
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="yogasana_levels" id="yogasana_levels">
																	<option value="">Select Level</option>
																	@php
																		$levelarr = array('District Level', 'Inter School Level', 'State Level', 'University Level', 'National Level', 'International Level');
																		foreach($levelarr as $value){
																			if($value == $candidate->yogasana_levels){
																				echo '<option value="'.$value.'" selected>'.$value.'</option>';
																			}else{
																				echo '<option value="'.$value.'">'.$value.'</option>';
																			}
																		}
																	@endphp
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
															@if($candidate->acheivement_qualification != '')
																<span class="badge bg-success"><a href="{{ $candidate->acheivement_qualification }}" target="_blank"><small class="text-white">View Doc</small></a></span>
															@endif
															
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="d2-error"></div>
														</div>											
													</div>
												</div>
											</div>

											@if($candidate->candidate_type_id == 2)
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label>Experience Certificate of Referee<br></label>
                                            </div>
											<div id="f1">
												<div class="row">
													
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="experience_certificate_name" id="experience_certificate_name">
																	<option value="">Select Level</option>
																	@php
																		$levelarr2 = array('District Level', 'Inter School Level', 'State Level', 'University Level', 'National Level', 'International Level');
																		foreach($levelarr2 as $value){
																			if($value == $candidate->experience_certificate_name){
																				echo '<option value="'.$value.'" selected>'.$value.'</option>';
																			}else{
																				echo '<option value="'.$value.'">'.$value.'</option>';
																			}
																		}
																	@endphp
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
															@if($candidate->experience_certificate != '')
																<span class="badge bg-success"><a href="{{ $candidate->experience_certificate }}" target="_blank"><small class="text-white">View Doc</small></a></span>
															@endif
															
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
                                            </div>
											<div id="f1">
												<div class="row">
													
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="experience_certificate_name" required>
																	<option value="">Select Activity</option>
																	@php
																		$levelarr13 = array('Yogasana', 'Artistic Yogasana', 'Basic Yoga', 'Home Classes', 'Advance Yogasana', 'Zumba', 'Power of Yoga', 'Aerobic', 'Shatkarmas');
																		foreach($levelarr13 as $value){
																			if($value == $candidate->experience_certificate_name){
																				echo '<option value="'.$value.'" selected>'.$value.'</option>';
																			}else{
																				echo '<option value="'.$value.'">'.$value.'</option>';
																			}
																		}
																	@endphp
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
                                            	<label> Yoga Instructor Certificate of coach in Yoga <br></label>
                                            </div>
											<div id="g1">
												<div class="row">
													
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="coach_certificate_name" id="coach_certificate_name">
																	<option value="">Select Level</option>
																	@php
																		$levelarr5 = array('NIS Level', 'Institution Level', 'Board Level', 'University Level');
																		foreach($levelarr5 as $value){
																			if($value == $candidate->coach_certificate_name){
																				echo '<option value="'.$value.'" selected>'.$value.'</option>';
																			}else{
																				echo '<option value="'.$value.'">'.$value.'</option>';
																			}
																		}
																	@endphp
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
                                            </div>
											<div id="g1">
												<div class="row">
													
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
			                                                    <select class="form-control" name="coach_certificate_name" id="coach_certificate_name">
																	<option value="">Select Level</option>
																	@php
																		$levelarr5 = array('NIS Level', 'Institution Level', 'Board Level', 'University Level');
																		foreach($levelarr5 as $value){
																			if($value == $candidate->coach_certificate_name){
																				echo '<option value="'.$value.'" selected>'.$value.'</option>';
																			}else{
																				echo '<option value="'.$value.'">'.$value.'</option>';
																			}
																		}
																	@endphp
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
															@if($candidate->coach_certificate != '')
																<span class="badge bg-success"><a href="{{ $candidate->coach_certificate }}" target="_blank"><small class="text-white">View Doc</small></a></span>
															@endif
															<span class="badge bg-danger"> <small>PDF Only - Max file size limit: 300KB</small></span>
															<div id="g2-error"></div>
														</div>											
													</div>
												</div>
											</div>
											@endif


											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                            	<label>Other Sports<br></label>
                                            </div>


											<div id="e1">
												<div class="row">
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
														<div class="field-wrapper">
															<div class="input-group">
																<input class="form-control" type="text"  name="other_sports_name" id="other_sports_name" value="{{ $candidate->other_sports_name }}" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
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
																	@php
																		$levelarr3 = array('District Level', 'Inter School Level', 'State Level', 'University Level', 'National Level', 'International Level');
																		foreach($levelarr3 as $value){
																			if($value == $candidate->other_levels){
																				echo '<option value="'.$value.'" selected>'.$value.'</option>';
																			}else{
																				echo '<option value="'.$value.'">'.$value.'</option>';
																			}
																		}
																	@endphp
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
															@if($candidate->other_sports != '')
																<span class="badge bg-success"><a href="{{ $candidate->other_sports }}" target="_blank"><small class="text-white">View Doc</small></a></span>
															@endif
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