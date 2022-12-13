@extends('layouts.main')
@section('content')




<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
                    <div>
                        <h4 class="main-content-title tx-24 mg-b-5">View Round Video<a class="btn btn-outline-primary btn-sm"  style="float:right;" href="{{ route('candidate.yogasana.video') }}"><i class="fe fe-arrow-left"></i>Back</a></h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item" ><a href="{{ route('candidate.round.video') }}">My Activity</a></li>
                             <li class="breadcrumb-item active" aria-current="page">View Round Video</li>
                        </ol>

                    </div>
                </div>
        <div class="card">
            
            <div class="card-body">
         
            @include('layouts.message')
                 <div class="card-header">
                    <h5>{{ $yoga->round->round_name }} Video Links</h5>
                </div>
               
                @if(count($yogasanLinks)>0)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-secondary">{{ $yoga->activity->activity_title }} Videos</div>
                        </div>
                    </div>

                            <div class="row mb-2">
                    @foreach($yogasanLinks as $val)
                        
                                @if($val->upload_status!=1)
                                    <form method="POST" action="{{ route('candidate.yogasna-link.store') }}" enctype="multipart/form-data">
                                     @csrf
                                    <div class="col-md-10">
                                        @if($yoga->activity->id!=2)
                                            <label>Aasan Name: {{ $val->yoga_name }}</label>
                                        @endif
                                       
                                        <input type="hidden" name="league_round" value="{{ $val->league_round_id }}" class="form-control mb-2" placeholder="Youtube video ID Ex use 'X0xNFE04J4o' instead of https://www.youtube.com/watch?v=X0xNFE04J4o ">
                                        <input type="hidden" name="yogasna_video" value="{{ $val->id }}" class="form-control mb-2" placeholder="Youtube video ID Ex use 'X0xNFE04J4o' instead of https://www.youtube.com/watch?v=X0xNFE04J4o ">
                                        <input type="file" name="video" id="video{{ $val->league_round_id }}" onchange="getDetails({{ $val->league_round_id }},{{ ($yoga->activity->id==2)?200:30 }})" value="" required="required" class="form-control mb-2" >
                                        @if($yoga->activity->id==2)
                                            <span class="badge bg-danger"> <small>MP4 Only - Max file size limit: 40MB</small></span>
                                        @else
                                            <span class="badge bg-danger"> <small>MP4 Only - Max file size limit: 10MB</small></span>
                                        @endif
                                        
                                            @error('video')
                                            <div class="badge bg-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                    </div>
                                    </form> 
                                @else
                                <div class="col-md-6 mt-3">
                                    @if($yoga->activity->id!=2)
                                        <h5><b>Aasan Name:</b>{{ $val->yoga_name }}</h5><br>
                                    @endif
                                       
                                    <video width="100%" height="240" controls>
                                    <source src="{{ $val->upload_link }}" type="video/mp4" autostart="false" preload="none">
                                    Your browser does not support the video tag.
                                    </video>
                                </div>
                                
                                 @endif
                           
                           
                    @endforeach
                     </div>
                @endif
              
                
                   
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    var myVideos = [];
    function getDetails(id,dur){
        console.log(id)
        var files = $('#video'+id);
        files = files[0].files
        var video = document.createElement('video');
        video.preload = 'metadata';
        video.onloadedmetadata = function() {
            window.URL.revokeObjectURL(video.src);
            var duration = video.duration;
            console.log(duration)
            if(duration>dur){
                alert('Video duration is too long...');
                $('#video'+id).val('');
            }
        }
        video.src = URL.createObjectURL(files[0]);
    }
</script>
@endpush

@endsection