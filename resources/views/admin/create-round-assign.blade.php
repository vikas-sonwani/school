@extends('../layouts.main')
@section('content')


@include('sweetalert::alert')
<div class="content-wrapper">
 
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('assign-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                <div class="form-section-header">Round Yoga Assign</div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control " type="hidden" name="round" value="{{ $round->id }}">
                                        <input class="form-control " type="hidden" name="number_of_video" id="number_of_video" value="{{ $round->number_of_video }}">
                                    </div>
                                    <h2><span class="badge bg-secondary">{{ $round->round_name }}</span></h2>
                                    <h4><span class="">Number of Yoga Aasan to be assign: {{ $round->number_of_video }}</span></h4>
                                </div>
                            </div>
                            @foreach($yoga as $y)
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="card">
                                    <img src="{{ asset('images') }}/{{ $y->yoga_image }}"  class="card-img-top" alt="" style="height:200px;">
                                    <div class="list-group m-0">
                                        <a href="#" class="list-group-item list-group-item-action active card-title" aria-current="true">
                                            {{ $y->yoga_name }}
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">{{ $y->yoga_title }}</a>
                                        <lable for="yoga{{ $y->id }}"  class="list-group-item list-group-item-action"><input class="form-check-input me-1" id="yoga{{ $y->id }}" type="checkbox" name="yoga_aasan[]" value="{{ $y->id }}" aria-label="...">Click Here To Assign</label>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>

                    </div>

                </div>

            </form>

        </div>
    </div>
</div>

@endsection