@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    


    @include('layouts.message')
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('course.fees_map.store',$course->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Course Fees Mapping</div>
                        </div>
                        <div class="col-xl-12 mb-2">
                            <div class="field-wrapper">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width:30%">COURSE: </th>
                                    <th  style="width:70%">{{ $course->short_name }} -- {{ $course->full_name }}</th>
                                </tr>
                                <tr>
                                    <th  style="width:30%">ACADEMIC YEAR: </th>
                                    <th  style="width:70%">{{ $course->academic_year->academic_code }}</th>
                                </tr>
                                <tr>
                                    <th  style="width:30%">LEVEL: </th>
                                    <th  style="width:70%">{{ $course->academic_level->name }}</th>
                                </tr>
                                <tr>
                                    <th  style="width:30%">DURATION: </th>
                                    <th  style="width:70%">{{ $course->duration_count }}-{{ $course->duration_type->duration_type }} </th> 
                                </tr>
                            </table>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Fees Category</div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                            
                                <table class="table table-bordered">
                                    <thead>
                                        <tr >
                                            <th style="text-align: center;">SNO</th><th>FEES CATEGORY</th><th style="text-align: right;">AMOUNT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total_amt = 0; @endphp
                                        @foreach ( $fees_category as $key=>$cat )
                                            @php $total_amt += in_array($cat->id,$course_fees)?$total_amt + $cat->amount:0 @endphp
                                            <tr>
                                                <td style="text-align: center;">
                                                <label for="fees_cat{{ $cat->id }}">
                                                <input type="checkbox" id="fees_cat{{ $cat->id }}" {{ (in_array($cat->id,$course_fees)?'checked':'') }} name="fees_category[]" value="{{ $cat->id }}" onclick="calc({{ $cat->id }},{{ $cat->amount }})" />
                                                {{ $key+1 }} 
                                                </label>
                                                </td><td>{{ $cat->fees_category }}</td><td style="text-align: right;">{{ $cat->amount }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th colspan="2" style="text-align:right">
                                                TOTAL AMOUNT
                                            </th><td id="total_amount" style="text-align: right;">{{ $total_amt }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                         

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
<script>
    var total_amout = {{ $total_amt }};
    
    function calc(id,amt){
        if($('#fees_cat'+id+'').is(":checked")){
            total_amout += amt;
        }else{
           total_amout = total_amout-amt;
        }
        $('#total_amount').html(total_amout)
    }
    
</script>

@endsection