@extends('layouts.main')
@section('content')




<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
                    <div>
                        <h4 class="main-content-title tx-24 mg-b-5">Live League</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Live League</li>
                        </ol>

                    </div>
                </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Live League</h5>
            </div>
            <div class="card-body">
                @if($candidate->age>8)
                    <div class="accordion" id="faqAccordion">
                        @foreach($bookedround as $key => $val)
                        
                        @if(array_key_exists($val->id, $candidateRounds))
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $key }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                        <span class="badge rounded-pill bg-success">Activate</span>&nbsp; {{ $val->round_name }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $key }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $key }}" data-bs-parent="#faqAccordion" style="">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <div class="col-md-3"><b>Round Number:</b> {{$val->round_number}}</div>
                                                <div class="col-md-3"><b>Round Name:</b> {{$val->round_name}}</div>
                                                <div class="col-md-3"><b>Round Amount:</b> {{$val->round_amount}}</div>
                                                <div class="col-md-3"><b>Round Videos:</b> {{$val->number_of_video}}</div>
                                            </div>
                                            <hr>
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <h5><b>Round: </b> {{$val->round_number}} Joined successfully.</h5>
                                                    @php $i = 1; @endphp
                                                    @foreach($ageGroupActivityArr as $activity)
                                                        @if(in_array($activity->id,$candidateRounds[$val->id]))
                                                             <h5><b>Activity {{ $i }}: </b>{{ $activity->activity_title }}</h5>
                                                             @php $i++; @endphp
                                                        @endif
                                                         
                                                     @endforeach
                                                   
                                                    <p>To complete the round</p>
                                                    <a href="{{ route('candidate.round.video') }}" class="btn btn-primary btn-sm">Click here</a>
                                                </div>
                                            </div>
                                             <form action="{{ route('admin.checkout') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                        @php $show = false; @endphp
                                                     @foreach($ageGroupActivityArr as $activity)
                                                        @if(!in_array($activity->id,$candidateRounds[$val->id]))
                                                            @php $show = true; @endphp
                                                            <div class="col-md-6">
                                                                <div class="alert alert-secondary">
                                                                    <input type="hidden" name="round_id" value="{{ $val->id }}">
                                                                    <label><input type="checkbox" name="activity[]" value="{{ $activity->id }}" class="required"> {{ $activity->activity_title }}</label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                         
                                                     @endforeach
                                                    @if($show)
                                                        <small class="text-center text-danger mb-2">Please check activity which you want to play.</small>

                                                        <div class="col-md-12 text-center">
                                                            <button class="btn btn-primary" type="submit">Activate Round</button>
                                                        </div>
                                                    @endif
                                                   
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            @else    
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $key }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}">
                                        <span class="badge rounded-pill bg-warning">Inactive</span>&nbsp; {{ $val->round_name }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $key }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $key }}" data-bs-parent="#faqAccordion" style="">
                                        <div class="accordion-body">
                                            <div class="row mb-3">
                                                <div class="col-md-3"><b>Round Number:</b> {{$val->round_number}}</div>
                                                <div class="col-md-3"><b>Round Name:</b> {{$val->round_name}}</div>
                                                <div class="col-md-3"><b>Round Amount:</b> {{$val->round_amount}}</div>
                                                <div class="col-md-3"><b>Round Videos:</b> {{$val->number_of_video}}</div>
                                            </div>
                                            <hr>
                                            @if($val->is_round_open==1)
                                                <form action="{{ route('admin.checkout') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                         @foreach($ageGroupActivityArr as $activity)
                                                             <div class="col-md-6">
                                                                <div class="alert alert-secondary">
                                                                    <input type="hidden" name="round_id" value="{{ $val->id }}">
                                                                    <label><input type="checkbox" name="activity[]" value="{{ $activity->id }}" class="required"> {{ $activity->activity_title }}</label>
                                                                </div>
                                                            </div>
                                                         @endforeach
                                                         
                                                        <small class="text-center text-danger mb-2">Please check activity which you want to play.</small>

                                                        <div class="col-md-12 text-center">
                                                            <button class="btn btn-primary" type="submit">Activate Round</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @else
                                                <div class="col-lg-12">
                                                    <div class="alert alert-secondary">
                                                        This round will be open soon....
                                                    </div>
                                                </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                                       
                                                
                    </div>

                @else
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert-secondary alert text-center">
                                Your are is less then YPL player's age. 
                            </div>
                        </div>
                    </div>

                @endif
                
            </div>
        </div>

    </div>
</div>

@endsection