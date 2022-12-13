@extends('../layouts.main')
@section('content')


<div class="content-wrapper">


    @include('layouts.message')
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('fees_receipt.create_receipt') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Generate Receipt</div>
                        </div>
                        

                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12 mb-2">
                            <h6>Search Student By Course</h6>
                        </div>
                        
                        
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="academic_year" name="academic_year" required="required">
                                    <option value=""> -- Select Academic Year -- </option>
                                    @foreach($academic_year as $year)
                                        <option value="{{ $year->id }}"> {{ $year->academic_code }} </option>
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
                                        <option value="{{ $level->id }}"> {{ $level->name }} </option>
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
                                <select class="form-select" id="course_id" name="course_id" onchange="searchByCourseOrName()" required="required" onchange="">
                                    <option value=""> -- Select Course -- </option>
                                    
                                </select>
                                <div class="field-placeholder">Course <span class="text-danger">*</span></div>
                                @error('course_id') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('enrollment_no') is-invalid @enderror" id="enrollment_no" value="{{ old('enrollment_no') }}" placeholder="Search By Enrollment Number" onchange="searchByEnroll()" type="text" name="enrollment_no">
                                </div>
                                <div class="field-placeholder">Enrollment Number</div>
                                    
                                @error('enrollment_no') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <h6 class="mb-3">List Of Student - Select Student</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SNO</th>
                                        <th>ENROLL/ROLL NO</th>
                                        <th>NAME</th>
                                        <th>FATHER NAME</th>
                                        <th>SELECT</th>
                                    </tr>
                                </thead>
                                <tbody id="student-list">

                                </tbody>
                            </table>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="duration_number" name="duration_number"  required="required" onchange="">
                                    <option value=""> -- Select Duration Number -- </option>
                                    
                                </select>
                                <div class="field-placeholder">Duration Number <span class="text-danger">*</span></div>
                                @error('course_id') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                       
                        
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <button class="btn btn-primary" type="submit">Proceed For Receipt</button>
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
            if(data.length>0){
                data.map((d,i) =>{
                    str = str + '<option value="'+d.id+'">'+d.short_name+' -- '+d.full_name+'</option>';
                });
                $('#course_id').html(str);
            }
        })
    }
    function searchByEnroll(){
        var enrollment_no = $('#enrollment_no').val();
        var str = '';
        $.get('/fees_receipt/search-by-re?enrollment_no='+enrollment_no,function(data){
            if(data.length>0){
                console.log(data)
                data.map((d,i) =>{
                    let ind = i+1;
                    let rl = (d.enrollment_no!='')?d.enrollment_no:'';
                    str = str + '<tr><th>'+ind+'</th><th>'+rl+'</th><th>'+d.full_name+'</th><th>'+d.father_name+'</th> <th><input type="radio" name="selected_std" value="'+d.id+'" /></th></tr>';
                });
                $('#student-list').html(str);
            }
        })

    }
    function searchByCourseOrName(){
        var course = $('#course_id').val();
        var str = '';
        $.get('/fees_receipt/search-by-course?course='+course,function(data){
            console.log(data)
            let c_data = data.course;
            console.log(data.student)
            if(data.student.length>0){
                let stu = data.student;
                console.log(stu)
                data.student.map((d,i) =>{
                    let ind = i+1;
                    let rl = (d.enrollment_no!='')?d.enrollment_no:'';
                    str = str + '<tr><th>'+ind+'</th><th>'+rl+'</th><th>'+d.full_name+'</th><th>'+d.father_name+'</th> <th><input type="radio" name="selected_std" value="'+d.id+'" /></th></tr>';
                
                 });
                
                $('#student-list').html(str);
            }else{
                $('#student-list').html(str);
            }
            let c_str = '<option value=""> -- Select Duration Number-- </option>';
            for(i=1;i<=c_data.duration_count;i++){
                c_str += '<option value="'+i+'"> '+c_data.duration_type.duration_type+' '+i+'</option>'
            }
            $('#duration_number').html(c_str);
            
        })
        
    }
</script>    
@endpush

@endsection