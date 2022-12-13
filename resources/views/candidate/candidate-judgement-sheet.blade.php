@extends('layouts.main')
@section('content')


<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         <div class="page-header">
                    <div>
                        <h4 class="main-content-title tx-24 mg-b-5">View Judgement Sheet<a class="btn btn-outline-primary btn-sm"  style="float:right;" href="{{ URL::previous() }}"><i class="fe fe-arrow-left"></i>Back</a></h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                           <li class="breadcrumb-item"><a href="{{ route('candidate.round.judgement') }}">My Judgement</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Judgement Sheet</li>
                        </ol>

                    </div>
                </div>
        <div class="card">
            <div class="alert alert-primary text-center text-white p-3">
                <h4>My Judgement Sheet</h4>
            </div>
            <div class="card-body">
           
                <div class="row mb-2 border border-1 mb-4">
                        <div class="col-md-2 text-center">
                            <img src="{{ asset('candidate') }}/{{ $candidate->id }}/{{ $candidate->photo }}" style="width: 50%; height: auto; padding: 10px;">
                        </div>
                        <div class="col-md-4">
                            <p>
                                <b>PLAYER ID</b>: {{ $candidate->registration_no }} <br>
                                <b>PLAYER</b>: {{  $candidate->name }} <br>
                                <b>GENDER</b>: {{ $gender }} <br>
                                
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                <b>Activity</b>: {{ $candidate_league_round->activity->activity_title }} <br>
                               
                                <b>Age Group</b>: {{ $candidate_league_round->age_group->group_name }} 
                            </p>
                        </div>
                    </div>

                    <div class="row">
                   

                        <div class="col-lg-12 ">
                            @if($candidate_league_round->activity_id==1)
                                @foreach($judgement_arr as $key => $panel)
                                   
                                        <div class="alert alert-primary">
                                        <h5 class="text-white">Judge By: Referee :{{ $panel->referee->registration_no }}</h5>
                                        </div>
                                        <table class="table table-bordered">
                                            <tr class="bg-primary ">
                                                    <th class="text-white">ASANA NAME</th>
                                                    <th class="text-center text-white">MAX MARKS</th>
                                                    <th class="text-center text-white">OBTAIN MARKS</th>
                                                </tr> 
                                              @foreach($panel->candidate_round_yoga as $round_yoga)
                                                <tr>
                                                    <td>{{ $round_yoga->cry->aasan->yoga_name  }}    </td>
                                                    <td class="text-center">{{ $max_marks }}    </td>
                                                    <td class="text-center"> {{  $round_yoga->obtain_marks }}  </td>
                                                </tr> 
                                                
                                            @endforeach
                                        </table>
                                        <br>
                                @endforeach

                            @elseif($candidate_league_round->activity_id==2)
                                <table class="table table-bordered">
                                    <tr class="bg-primary ">
                                        <th class="text-white">Judge By: Referee :</th>
                                        <th class="text-center text-white">MAX MARKS</th>
                                        <th class="text-center text-white">OBTAIN MARKS</th>
                                    </tr> 
                                @foreach($judgement_arr as $key => $panel)
                                   <tr>
                                        <td>{{ $panel->referee->registration_no }}   </td>
                                        <td class="text-center">{{ $max_marks }}    </td>
                                        <td class="text-center"> {{  $panel->candidate_round_yoga->obtain_marks }}  </td>
                                    </tr> 
                                @endforeach
                                </table>
                                <br>
                             @endif
                                
                             
                           
                                
                        </div>
                   
                </div>            
            </div>
        </div>
    </div>
</div>


@endsection