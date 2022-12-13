@extends('../layouts.main')
@section('content')


<div class="content-wrapper">


    @include('layouts.message')
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('fees_receipt.pending_receipt.store',$fees_receipt->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">View Student Fees Receipt</div>
                        </div>
                        
                        <div class="col-md-12">
                            
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
                                                $total_amount = $total_amount = $fees->fees_category->amount;    
                                            @endphp
                                            <tr><td>{{ $fees->fees_category->fees_category }}</td><td style="text-align:right">{{ $fees->fees_category->amount }}</td></tr>
                                        @endforeach
                                        @if (count($course_fees)>0)
                                            <tr><th style="text-align: right;">TOTAL FEES</th><td style="text-align:right">{{ $total_amount }}</td></tr>
                                            
                                        @endif
                                        @if ($fees_receipt->submitted_fees!=0)
                                            <tr><th style="text-align: right;">SUBMITTED FEES</th><td style="text-align:right">{{ $fees_receipt->submitted_fees }}</td></tr>
                                            
                                        @endif
                                        @if ($fees_receipt->pending_fees!=0)
                                            <tr><th style="text-align: right;">PENDING FEES</th><td style="text-align:right">{{ $fees_receipt->pending_fees }}</td></tr>
                                            
                                        @endif
                                        
                                    </tbody>
                                </table>
                            </div>
                            @if($fees_receipt->is_complete==0)
                           
                                <div class="col-xl-4 mb-2">
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control  @error('paying_amount') is-invalid @enderror" id="paying_amount" value="{{ $fees_receipt->pending_fees }}"  required="required"  type="number" name="paying_amount">
                                        </div>
                                        <div class="field-placeholder">Pending Paying Amount <span class="text-danger"> *</span></div>
                                            
                                        @error('paying_amount') 
                                                <span class="text-danger">{{ $message }}</span>	
                                        @enderror
                                    </div>
                                </div>
                                    
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                    <button class="btn btn-primary" type="submit" name="receipt" value="fees">Fees Submit</button>
                                </div>
                            
                            @endif

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                                <button class="btn btn-success" type="submit" name="receipt" value="download">Download Receipt</button>
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

</script>    
@endpush

@endsection