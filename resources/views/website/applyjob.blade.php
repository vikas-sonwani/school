@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Apply Job </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Apply Job</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
    <section>
        <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel rgb-white-style" style="">
                        <div class="panel-body">
                            <h4 style="text-align: center;">Job Application Form</h4><br>
                            <form action="{{ route('website.apply') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Name <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="name" required="">
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Phone No. <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="phone" required="">
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>D. O. B. <span style="color:red">*</span></label>
                                        <input type="date" class="form-control" name="dob" required="">
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Email <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="email" required="">
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Education Level <span style="color:red">*</span></label>
                                        <select class="form-control" name="education_level" required="">
                                            <option value="">Select Level</option>
                                            <option value="Master's Degree">Master's Degree</option>
                                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                                            <option value="12th Pass">12th Pass</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Experience <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="experience" required="">
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Language <span style="color:red">*</span></label>
                                        <select class="form-control" name="language" required="">
                                            <option value="">Select Language</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Job Type <span style="color:red">*</span></label>
                                        <select class="form-control" name="job_type" required="">
                                            <option value="">Select Type</option>
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Apply For <span style="color:red">*</span></label>
                                        <select class="form-control" name="apply_for" required="">
                                            <option value="">Select Apply For</option>
                                            <option value="Graphics Designer">Graphics Designer</option>
                                            <option value="Content Writer">Content Writer</option>
                                            <option value="Data Entry Operator">Data Entry Operator</option>
                                            <option value="Associate Software Engineer">Associate Software Engineer</option>
                                            <option value="Customer Service Representative">Customer Service Representative</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Salary Estimate <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="salary_estimate" required="">
                                    </div>
                                    
                                    <div class="col-md-6" style="margin-bottom: 10px;">
                                        <label>Upload Resume <span style="color:red">*</span></label>
                                        <input type="file" class="form-control" name="resume" required="">
                                    </div>
                                    
                                    <div class="col-md-12" style="margin-bottom: 10px; text-align: center;">
                                        <button class="btn btn-1 btn-block" type="submit">Apply</button>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
              
            </div>
        </div>
    </section>  
</div>



@endsection