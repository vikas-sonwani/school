@extends('../layouts.main')
@section('content')
@include('sweetalert::alert')

<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('join-event-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row gutters">
                            @foreach($my_event_arr as $e)

                                
                                
                            @endforeach
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <button class="btn btn-success" type="submit">Proceed</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection