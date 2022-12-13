@extends('layouts.main')
@section('content')

<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="alert alert-secondary  text-center col-lg-12">
                       
                         <h5>Manage Profile</h5> 
                       
                    </div>
                </div>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                                        
                <!-- Row start -->
                 <form action="{{ route('candidate.updatePassword') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row gutters">
                       
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-info">Personal Details</div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>REGISTRATION NO.</label> - <b>{{ $candidate->registration_no }}</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Name</label> - <b>{{ $candidate->name }}</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Mobile Number</label> - <b>{{ $candidate->dailCode }}{{ $candidate->mobile }}</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Whatsapp No.</label> - <b>{{ $candidate->whatsapp }}</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Email</label> - <b>{{ $candidate->email }}</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>D.O.B.</label> - <b>{{ $candidate->date_of_birth }}</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Blood Group</label> - <b>{{ $candidate->bloodgroup }}</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Age</label> - <b>{{ $candidate->age }} Years</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Father's Name</label> - <b>{{ $candidate->father_name }}</b>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Mother's Name</label> - <b>{{ $candidate->mother_name }}</b>
                                </div>

                                <div class="col-md-6 mt-5 form-group">
                                    <div class="alert alert-info">Residential Address</div>
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td>House No.</td>
                                            <td><b>{{ $candidate->house_no }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td><b>{{ $candidate->address }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Pincode</td>
                                            <td><b>{{ $candidate->pincode }}</b></td>
                                        </tr>
                                        @if($locationInfo)
                                        <tr>
                                            <td>District</td>
                                            <td><b>{{ $locationInfo[0]['district'] }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>State</td>
                                            <td><b>{{ $locationInfo[0]['state'] }}</b></td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td>City</td>
                                            <td><b>{{ $candidate->city }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td> @if($country) <b>{{ $country->country_name }}</b> @endif</td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                                <div class="col-md-6 form-group mt-5">
                                    <div class="alert alert-info">Basic Document</div>
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td style="text-align: center;">@if($candidate->photo != '')<img  style="width:50%;" src="{{ $candidate->photo }}" style="height: 70px; width: 50%;">@endif <br> Photo</td>
                                            <td style="text-align: center;vertical-align: middle;">@if($candidate->signature != '')<img style="width:50%;" src="{{ $candidate->signature }}" style="height: 70px; width: 50%;"> @endif<br> Sign</td>
                                        </tr>
                                        
                                    </table>
                                    <table class="table table-responsive table-bordered">
                                       
                                        <tr>
                                            <td>D.O.B. Proof</td>
                                            <td><b>{{ $candidate->dobproof_id }}</b></td>
                                            <td>@if($candidate->dob_doc != '')<a href="{{ $candidate->dob_doc }}" class="text-primary" target="_blank">View Document</a>@endif</td>
                                        </tr>
                                        <tr>
                                            <td>Identity Proof</td>
                                            <td><b>{{ $candidate->identity_id }}</b></td>
                                            <td>@if($candidate->indenty_doc != '')<a href="{{ $candidate->indenty_doc }}" class="text-primary" target="_blank">View Document</a>@endif</td>
                                        </tr>
                                    </table>
                                </div>

                              
                                <div class="col-md-12 mt-5">
                                    <div class="alert alert-info">Qualification</div>
                                    <table class="table table-responsive table-bordered">

                                        <tr>
                                            <td>Highest Qualification</td>
                                            <td><b>{{ $candidate->higher_education_name }}</b></td>
                                            <td>@if($candidate->higher_education != '')<a href="{{ $candidate->higher_education }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->higher_education != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Highest Qualification in Yoga</td>
                                            <td><b>{{ $candidate->yoga_certificate_name }}</b></td>
                                            <td>@if($candidate->yoga_certificate != '')<a href="{{ $candidate->yoga_certificate }}" class="text-primary" target="_blank">View</a>@endif</td>
                                            <td>@if($candidate->yoga_certificate != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Any Other Qualification</td>
                                            <td><b>{{ $candidate->other_qualification_name }}</b></td>
                                            <td>@if($candidate->other_qualification != '')<a href="{{ $candidate->other_qualification }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->other_qualification != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Do you have Computer Knowledge</td>
                                            <td colspan="3"><b>{{ $candidate->computer_knowledge }}</b></td>
                                        </tr>
                                    </table>
                                </div>

                                @if($candidate->candidate_type_id == 8)
                                <div class="col-md-12 mt-5">
                                    <div class="alert alert-info">Acheivement  in Yogasana Sports</div>
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td>As a Yogasana Player</td>
                                            <td><b>{{ $candidate->yogasana_levels }}</b></td>
                                            <td colspan="2">@if($candidate->acheivement_qualification != '')<a href="{{ $candidate->acheivement_qualification }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->acheivement_qualification != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Other Sports</td>
                                            <td><b>{{ $candidate->other_sports_name }}</b></td>
                                            <td><b>{{ $candidate->other_levels }}</b></td>
                                            <td>@if($candidate->other_sports != '')<a href="{{ $candidate->other_sports }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->other_sports != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                    </table>
                                </div>
                                @endif

                                @if($candidate->candidate_type_id == 2)
                                <div class="col-md-12 mt-5">
                                    <div class="alert alert-info">Acheivement  in Yogasana Sports</div>
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td>Intrested In </td>
                                            <td colspan="4"><b>{{ $candidate->intrest_in }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>As a Yogasana Player</td>
                                            <td><b>{{ $candidate->yogasana_levels }}</b></td>
                                            <td colspan="2">@if($candidate->acheivement_qualification != '')<a href="{{ $candidate->acheivement_qualification }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->acheivement_qualification != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Experience Certificate of Referee</td>
                                            <td><b>{{ $candidate->experience_certificate_name }}</b></td>
                                            <td colspan="2">@if($candidate->experience_certificate != '')<a href="{{ $candidate->experience_certificate }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->experience_certificate != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Other Sports</td>
                                            <td><b>{{ $candidate->other_sports_name }}</b></td>
                                            <td><b>{{ $candidate->other_levels }}</b></td>
                                            <td>@if($candidate->other_sports != '')<a href="{{ $candidate->other_sports }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->other_sports != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                    </table>
                                </div>
                                @endif


                                @if($candidate->candidate_type_id == 4)
                                <div class="col-md-12 mt-5">
                                    <div class="alert alert-info">Acheivement  in Yogasana Sports</div>
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <td>Intrested In </td>
                                            <td colspan="4"><b>{{ $candidate->intrest_in }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>As a Yogasana Player</td>
                                            <td><b>{{ $candidate->yogasana_levels }}</b></td>
                                            <td colspan="2">@if($candidate->acheivement_qualification != '')<a href="{{ $candidate->acheivement_qualification }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->acheivement_qualification != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Certificate of coach in yoga.</td>
                                            <td><b>{{ $candidate->coach_certificate_name }}</b></td>
                                            <td colspan="2">@if($candidate->coach_certificate != '')<a href="{{ $candidate->coach_certificate }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->coach_certificate != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Other Sports</td>
                                            <td><b>{{ $candidate->other_sports_name }}</b></td>
                                            <td><b>{{ $candidate->other_levels }}</b></td>
                                            <td>@if($candidate->other_sports != '')<a href="{{ $candidate->other_sports }}" class="text-primary" target="_blank">View </a>@endif</td>
                                            <td>@if($candidate->other_sports != '') <b class="text-success">Uploaded</b> @else <b class="text-danger">Not Uploaded</b> @endif</td>
                                        </tr>
                                    </table>
                                </div>
                                @endif

                                <div class="col-md-12">
                                    <a href="/admin/candidate/manage-profile/{{ $candidate->id }}" class="btn btn-primary">Edit Profile</a>
                                </div>

                                
                            </div>
                        </div>
                        
                        <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                        
                        <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div> -->
                    </div>
                
                </form>

                <!-- Row end -->

            </div>



        </div>
    </div>
</div>

@endsection