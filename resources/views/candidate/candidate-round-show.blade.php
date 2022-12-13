@extends('../layouts.main')
@section('content')


@include('sweetalert::alert')
<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('candidate-round-store') }}" method="POST">
                @csrf
                <input type="hidden" name="candidate-event-round" value="{{ $candidate_event_round->id }}" />
                <div class="card">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-3   col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="card">
                                    <img src="{{ asset('images') }}/{{ $candidate_event->event->event_image }}" class="card-img-top" alt="" style="height:170px;">
                                    
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12">
                                <div class="card">
                                    <div class="list-group m-0">
                                        <h4 class="list-group-item list-group-item-action active card-title" aria-current="true">
                                            {{ $candidate_event->event->event_name }}
                                        </h4>
                                        <p href="#" class="list-group-item list-group-item-action">{{ $candidate_event->event->event_description }}</p>
                                        <h4 class="list-group-item list-group-item-action active card-title" aria-current="true">
                                            Round Datails
                                        </h4>
                                        <p class="list-group-item list-group-item-action"><b>Name: </b>{{ $candidate_event_round->candidate_round->round_name }}</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p class="list-group-item list-group-item-action"><b>Number: </b>{{ $candidate_event_round->candidate_round->round_number }}</p>

                                            </div>
                                            <div class="col-md-4">
                                                <p class="list-group-item list-group-item-action"><b>Amount: </b>{{ $candidate_event_round->amount }}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="list-group-item list-group-item-action"><b>Status: </b>
                                                    @if($candidate_event_round->is_active===1)
                                                    <span class="badge bg-success">Active</span>
                                                    @else
                                                    <span class="badge bg-danger">Deactive</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row gutters">
                            <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12 col-12 mb-4">
                                <h4>Available Yoga Aasan</h4>
                                <small style="color:#f00;">Note: All yoga aasan is compulsory in Round</small>
                            </div>
                            @foreach($rounds as $round)
                            <div class="col-xl-3   col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="card">
                                    <img src="{{ asset('images') }}/{{ $round->yoga->yoga_image }}" class="card-img-top" alt="" style="height:170px;">
                                    <div class="list-group m-0">
                                        <a href="#" class="list-group-item list-group-item-action active card-title" aria-current="true">
                                            {{ $round->yoga->yoga_name }}
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">{{ $round->yoga->yoga_title }}</a>

                                    </div>

                                </div>
                            </div>
                            @endforeach
                            <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12 col-12 mb-4 text-center">
                                <button class="btn btn-success">Pay Now</button>
                            </div>
                        </div>

                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

@endsection