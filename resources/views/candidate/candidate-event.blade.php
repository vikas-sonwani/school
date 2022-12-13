@extends('../layouts.main')
@section('content')


@include('sweetalert::alert')
<div class="content-wrapper">
 
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row gutters">
                            @foreach($event as $e)
                                @if(in_array($e->id,$my_event_arr))
                                    <div class="col-xl-4 offset-md-1 offset-lg-1 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="card">
                                            <img src="{{ asset('images') }}/{{ $e->event_image }}"  class="card-img-top" alt="" style="height:200px;">
                                            <div class="list-group m-0">
                                                <a href="#" class="list-group-item list-group-item-action active card-title" aria-current="true">
                                                    {{ $e->event_name }}
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">{{ $e->event_description }}</a>
                                                <a href="#" class="list-group-item list-group-item-action"><b>Start Date:</b> {{ $e->start_date }}</a>
                                                <a href="#" class="list-group-item list-group-item-action"><b>End Date: </b>{{ $e->end_date }}</a>
                                                
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            
                        </div>

                    </div>

                </div>

            

        </div>
    </div>
</div>

@endsection