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
                            <div class="form-section-header">Print Receipt</div>
                        </div>
                        
                        <div class="col-md-12">
                            <h6 class="mb-3">Student Fees Receipt</h6>
                            <div class="col-lg-6 offset-lg-3">
                                <table  style="width:100%;border:1px solid #000;"  cellpading="0" cellspacing="0">
                                    <tr>
                                        <td colspan="3" style="text-align:center;border:1px solid #000;"><img src="{{ asset('website/images/logo.png') }}"  style="height:100px;" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align:center;border:1px solid #000;"> 
                                            <span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >
                                            FEE RECEIPT - {{ $student->academic_year->academic_code }}/{{ $fees_receipt->id }}
                                            </span>
                                        </td>
                                    </tr>
            
                                    
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >Name:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $student->full_name }}</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >S/D/W OF:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $student->father_name }}</span></td>
                                    </tr>
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >MOTHER OF:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $student->mother_name }}</span></td>
                                    </tr>
                                  
                                    <tr>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; "><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >DATE OF BIRTH:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="1"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{  date("d-m-Y",strtotime($student->dob)) }} </span></td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >COURSE:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $student->course->full_name }}</span></td>
                                    </tr>
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;text-align:center;" colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >DETAIL</span></td>
                                    </tr>
                                    @foreach ($course_fees as $fees )
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style=" font-size: 9pt; text-wrap:inherit;" >{{ $fees->fees_cat->fees_category }}</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style=" font-size: 9pt; text-wrap:inherit;" >{{ $fees->fees_cat->amount }}</span></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >TOTAL FEES:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $fees_receipt->total_fees }}</span></td>
                                    </tr>
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >PAID:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $fees_receipt->submitted_fees }}</span></td>
                                    </tr>
                                    @if($fees_receipt->pending_fees>0)
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >PENDING FEES:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $fees_receipt->pending_fees }}</span></td>
                                    </tr>
                                    @endif
                                    @php $status = ($fees_receipt->is_complete==1)?'PAID':'PENDING'; @endphp
                                    <tr>
                                        <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >STATUS:</span></td>
                                        <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $status }}</span></td>
                                    </tr>
                                    
                                </table>
                           
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                            <button class="btn btn-success" type="submit" name="receipt" value="download" >Download Receipt</button>
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