@extends('layouts.main')
@section('content')


<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                  
                
                <div class="row">
                    <div class="col-lg-12">
                       
                    </div>

                        <div class="col-lg-12 ">
                            @foreach($panel_referee_arr as $key => $panel)
                                <div class="alert alert-danger">
                                <h5><b>Referee: {{ $key+1 }}  </b></h5>
                                </div>
                                <table class="table table-bordered">

                                    
                                       
                                    
                                    @foreach($panel->candidate_round_yoga as $round_yoga)
                                        <tr>
                                            <td colspan="3"><b>{{ $round_yoga->aasan->yoga_name }}</td>
                                          
                                        </tr> 
                                         @foreach($round_yoga->judgement_sheet as $sheet)
                                         <tr>
                                            <td>{{ $sheet->judgement_sheet->criteria_desc }}	</td>
                                            <td>{{ $sheet->judgement_sheet->max_marks }}	</td>
                                            <td>{{ $sheet->obtain_marks }}	</td>
                                        </tr> 
                                         @endforeach
                                         <tr>
                                            <td colspan="2" style="text-align:right;"><b>Total Marks:</td>
                                            <td ><b>{{ $round_yoga->judgement_total }}</td>
                                        </tr> 
                                    @endforeach
                                                                 
                            
                             </table>
                             <br>
                             
                            @endforeach
                                
                        </div>
                   
                </div>            
            </div>
        </div>
    </div>
</div>


@endsection