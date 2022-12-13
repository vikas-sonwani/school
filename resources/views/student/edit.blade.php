@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    


    @include('layouts.message')
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Edit Student</div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="academic_year" name="academic_year" required="required">
                                    <option value=""> -- Select Academic Year -- </option>
                                    @foreach($academic_year as $year)
                                        <option value="{{ $year->id }}" {{ ($student->academic_year_id==$year->id)?'selected':'' }}> {{ $year->academic_code }} </option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Academic Year</div>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="academic_level" name="academic_level" onchange="getCourse()" required="required">
                                    <option value=""> -- Select Level -- </option>
                                    @foreach($levels as $level)
                                        <option value="{{ $level->id }}" {{ ($student->academic_level_id==$level->id)?'selected':'' }}> {{ $level->name }} </option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Academic Level <span class="text-danger">*</span></div>
                                @error('academic_level') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="course_id" name="course_id" required="required">
                                    <option value=""> -- Select Course -- </option>
                                    @foreach ($courses as $course )
                                        <option value="{{ $course->id }}" {{ ($student->course_id==$course->id)?'selected':'' }}>{{ $course->short_name }} {{ $course->full_name }}</option>
                                    @endforeach
                                    
                                </select>
                                <div class="field-placeholder">Course <span class="text-danger">*</span></div>
                                @error('course_id') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('full_name') is-invalid @enderror" value="{{ $student->full_name }}" type="text" name="full_name">
                                </div>
                                <div class="field-placeholder">Full Name<span class="text-danger">*</span></div>
                                    
                                @error('full_name') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('father_name') is-invalid @enderror" value="{{ $student->father_name }}" type="text" name="father_name">
                                </div>
                                <div class="field-placeholder">Father Name<span class="text-danger">*</span></div>
                                    
                                @error('father_name') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('mother_name') is-invalid @enderror" type="text" name="mother_name" value="{{  $student->mother_name }}">
                                </div>
                                <div class="field-placeholder">Mother name<span class="text-danger">*</span></div>
                                    
                                @error('mother_name') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('date_of_birth') is-invalid @enderror" type="date" name="date_of_birth" value="{{  $student->dob  }}">
                                </div>
                                <div class="field-placeholder">Date Of Birth<span class="text-danger">*</span></div>
                                    
                                @error('date_of_birth') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        
                        @php $gender = array('1'=>'Male','2'=>'Female','3'=>'Other') @endphp
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="gender" name="gender" required="required">
                                    <option value=""> -- Select Gender -- </option>
                                    @foreach ( $gender as $k=>$g )
                                        <option value="{{ $k }}"  {{ ($student->gender==$k)?'selected':'' }} >{{ $g }}</option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Gender <span class="text-danger">*</span></div>
                                @error('gender') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('mobile_no') is-invalid @enderror" type="number" maxlength="10" name="mobile_no" value="{{  $student->mobile_no }}">
                                </div>
                                <div class="field-placeholder">Mobile Number<span class="text-danger">*</span></div>
                                    
                                @error('mobile_no') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('parent_mobile_no') is-invalid @enderror" type="number" maxlength="10" name="parent_mobile_no" value="{{  $student->p_mobile_no }}">
                                </div>
                                <div class="field-placeholder">Parent Mobile Number<span class="text-danger">*</span></div>
                                    
                                @error('parent_mobile_no') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('email_id') is-invalid @enderror" type="email" name="email_id" value="{{  $student->email_id  }}">
                                </div>
                                <div class="field-placeholder">Email Id<span class="text-danger">*</span></div>
                                    
                                @error('email_id') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="religion" name="religion" required="required">
                                    <option value=""> -- Select Religion -- </option>
                                    @foreach ( $religion as $k=>$g )
                                        <option value="{{ $g->id }}" {{ ($student->gender==$g->id)?'selected':'' }}>{{ $g->religion_name }}</option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Religion <span class="text-danger">*</span></div>
                                @error('religion') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="category" name="category" required="required">
                                    <option value=""> -- Select Category -- </option>
                                    @foreach ( $category as $k=>$c )
                                        <option value="{{ $c->id }}" {{ ($student->category_id==$c->id)?'selected':'' }}>{{ $c->name }}</option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Category<span class="text-danger">*</span></div>
                                @error('category') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Current Address</div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <textarea class="form-control" name="caddress" id="caddress">{{ $student->caddress }}</textarea>
                                </div>
                                <div class="field-placeholder">Address<span class="text-danger">*</span></div>
                                    
                                @error('email_id') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="cstate" name="cstate" onchange="getDistrict('cstate','cdistrict')" required="required">
                                    <option value=""> -- Select State -- </option>
                                    @foreach ( $state as $k=>$st )
                                        <option value="{{ $st->id }}" {{ ($student->cstate==$st->id)?'selected':'' }}>{{ $st->states_name }}</option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">State <span class="text-danger">*</span></div>
                                @error('cstate') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="cdistrict" name="cdistrict" required="required">
                                    <option value=""> -- Select  District -- </option>
                                    @foreach ($cdistricts as $district )
                                    <option value="{{ $district->id }}" {{ ($student->cdistrict==$district->id)?'selected':'' }}>{{ $district->districts_name }}</option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">District<span class="text-danger">*</span></div>
                                @error('cdistrict') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('cpincode') is-invalid @enderror" value="{{  $student->cpincode }}" type="number" maxlength="6" name="cpincode">
                                </div>
                                <div class="field-placeholder">Pincode<span class="text-danger">*</span></div>
                                    
                                @error('cpincode') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Parmanent Address</div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <textarea class="form-control" name="paddress" id="paddress">{{ $student->paddress }}</textarea>
                                </div>
                                <div class="field-placeholder">Address<span class="text-danger">*</span></div>
                                    
                                @error('email_id') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="pstate" onchange="getDistrict('pstate','pdistrict')" name="pstate" required="required">
                                    <option value=""> -- Select State -- </option>
                                    @foreach ( $state as $k=>$st )
                                        <option value="{{ $st->id }}"  {{ ($student->pstate==$st->id)?'selected':'' }}>{{ $st->states_name }}</option>
                                    @endforeach
                                </select>   
                                <div class="field-placeholder">State <span class="text-danger">*</span></div>
                                @error('pstate') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="pdistrict" name="pdistrict" required="required">
                                    <option value=""> -- Select  District -- </option>
                                    @foreach ($pdistricts as $district )
                                    <option value="{{ $district->id }}" {{ ($student->pdistrict==$district->id)?'selected':'' }}>{{ $district->districts_name }}</option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">District<span class="text-danger">*</span></div>
                                @error('pdistrict') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('ppincode') is-invalid @enderror" type="number"  maxlength="6" name="ppincode" value="{{ $student->ppincode }}">
                                </div>
                                <div class="field-placeholder">Pincode<span class="text-danger">*</span></div>
                                @error('ppincode') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>

                </div>

            </div>
            
            </form>

        </div>
    </div>
    <!-- Row end -->

</div>
@push('script')
<script>
    function getCourse(){
        let level = $('#academic_level').val();
        let str = '<option value=""> -- Select Course -- </option>';
        $.get('/get-course?level_id='+level,function(data){
            console.log(data);
            if(data.length>0){
                data.map((d,i) =>{
                    str = str + '<option value="'+d.id+'">'+d.short_name+' -- '+d.full_name+'</option>';
                });
                $('#course_id').html(str);
            }
        })
    }
    function getDistrict(st,dst){
        var state = $('#'+st).val();
        var str = '<option value=""> -- Select District -- </option>';
        $.get('/get-district?state_id='+state,function(data){
            
            if(data.length>0){
                data.map((d,i) =>{
                    str = str + '<option value="'+d.id+'">'+d.districts_name+'</option>';
                });
                $('#'+dst).html(str);
            }
        })

    }
</script>    
@endpush

@endsection