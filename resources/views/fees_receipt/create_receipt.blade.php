@extends('../layouts.main')
@section('content')


<div class="content-wrapper">


    @include('layouts.message')
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('fees_receipt.create_receipt.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Generate Receipt</div>
                        </div>
                        
                        <div class="col-md-12">
                            <h6 class="mb-3">Student Basic Information</h6>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>ENROLLMENT NUMBER</th>
                                        <td>{{ $student->enrollment_no }}</td>
                                        <th>ROLL NUMBER</th>
                                        <td>{{ $student->roll_no }}</td>
                                       
                                    </tr>
                                    <tr>
                                        <th>STUDENT NAME</th>
                                        <td colspan="3">{{ $student->full_name }}</td>
                                        
                                       
                                    </tr>
                                    <tr>
                                        <th>MOTHER NAME</th>
                                        <td>{{ $student->mother_name }}</td>
                                        <th>FATHER NAME</th>
                                        <td>{{ $student->father_name }}</td>
                                    </tr><tr>
                                        <th>ACADEMIC YEAR</th>
                                        <td>{{ $student->academic_year->academic_code }}</td>
                                        <th>COURSE</th>
                                        <td>{{ $student->course->full_name }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Fees Details of {{ $duration_type->duration_type }} {{ $duration_number }}</div>
                        </div>
                        
                        
                        
                        <div class="col-md-12">
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>FFES CATEGORY</th>
                                        <th style="text-align:right">AMOUNT</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @php $total_amount = 0; @endphp
                                    @foreach ($course_fees as $fees )
                                        @php
                                            $total_amount = $total_amount = $fees->fees_cat->amount;    
                                        @endphp
                                        <tr><td>{{ $fees->fees_cat->fees_category }}</td><td style="text-align:right">{{ $fees->fees_cat->amount }}</td></tr>
                                    @endforeach
                                    @if (count($course_fees)>0)
                                        <tr><th style="text-align: right;">TOTAL</th><td style="text-align:right">{{ $total_amount }}</td></tr>
                                        
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="academic_year_for" name="academic_year_for" required="required">
                                    <option value=""> -- Select Academic Year -- </option>
                                    @foreach($academic_year as $year)
                                        <option value="{{ $year->id }}"> {{ $year->academic_code }} </option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Payment Academic Year For<span class="text-danger"> *</span></div>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-2">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('paying_amount') is-invalid @enderror" id="paying_amount" value="{{ old('paying_amount') }}"  required="required"  type="number" name="paying_amount">
                                </div>
                                <div class="field-placeholder">Paying Amount <span class="text-danger"> *</span></div>
                                    
                                @error('paying_amount') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <button class="btn btn-primary" type="submit">Fees Submit</button>
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
        $.get('/fees-receipt/search-by-re?enrollment_no='+enrollment_no,function(data){
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
        $.get('/fees-receipt/search-by-course?course='+course,function(data){
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