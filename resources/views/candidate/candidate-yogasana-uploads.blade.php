@extends('layouts.main')
@section('content')




<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
                    <div>
                        <h4 class="main-content-title tx-24 mg-b-5">My Uploads</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Uploads</li>
                        </ol>

                    </div>
                </div>
            <div class="row">
                        <div class="col-md-12 ">
                            <div class="alert alert-secondary text-center"> <h5>My Uploads</h5></div>
                        </div>
                    </div>
                    @if(count($candidateLeague)>0)
                         @if(count($yoga)>0)
                            <div class="row">
                             @foreach($yoga as $val)
                                    @foreach($val->league_round_yoga as $ry)
                                        @if($ry->upload_link !='')
                                             <div class="col-md-4">
                                                 <div class="card">
                                                        <video width="100%" height="240" controls>
                                                        <source src="{{ $ry->upload_link }}" type="video/mp4" autostart="false" preload="none">
                                                        Your browser does not support the video tag.
                                                        </video>
                                                        <div class="card-body">
                                                            <h5 class="card-title"><b class="mr-1">Activity:</b> &nbsp;{{ $val->activity->activity_title }} </h5>   
                                                          <!-- <h5 class="card-title"><b class="mr-1">Age Group:</b> &nbsp;Age Group: {{ $val->age_group->group_name }}</h5> --->
                                                            <h5 class="card-title"><b class="mr-1">Round:</b> &nbsp;{{ $val->round->round_number }}</h5>

                                                           @if($val->activity->id==1)
                                                                <h5 class="card-title"><b class="mr-1">Asana Name:</b> &nbsp;{{ $ry->aasan->yoga_name }}</h5>
                                                            @endif
                                                           
                                                           
                                                        </div>
                                                 </div>
                                            </div>
                                        @endif
                                    @endforeach
                                   
                                @endforeach
                            </div>
                       @else
                            <div class="row">
                                <div class="col-md-12">
                                     <div class="alert alert-secondary"> <h5>My Yogasana Videos</h5>
                                </div> 
                            </div>
                        @endif
                    @else


                    @endif
                   

       
    </div>
</div>

<script>
    var myVideos = [];
    function getDetails(id){
        console.log(id)
        var files = $('#video'+id);
        files = files[0].files
        console.log(files)
       var video = document.createElement('video');
        video.preload = 'metadata';

        video.onloadedmetadata = function() {
            window.URL.revokeObjectURL(video.src);
            var duration = video.duration;
            if(duration>26){
                alert('Video duration is too long...');
                $('#video'+id).val('');
            }
        }

        video.src = URL.createObjectURL(files[0]);


    }
</script>

@endsection