@extends('layouts.main')
@section('content')
@push('header')

<link rel="stylesheet" href="vendor/megamenu/css/megamenu.css">

<!-- Search Filter JS -->
<link rel="stylesheet" href="{{ asset('vendor/search-filter/search-filter.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/search-filter/custom-search-filter.css') }}">

<!-- Data Tables -->
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css') }}" />
<link href="{{ asset('vendor/datatables/buttons.bs.css') }}" rel="stylesheet" />

@endpush

@include('sweetalert::alert')
<div class="content-wrapper">
    <div class="breadcrumb-container">
        <div class="row gutters">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Judgment Sheet</a></li>
                    </ol>
                </nav>
            </div>
         
        </div>
    </div>
    

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <form id="batch-filter" method="GET" >
                        <div class="row">
                           
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="field-wrapper">
                                    <select class="select-single js-states" title="Select Product Category" onchange="getList()" id="activity" name="activity_id" data-live-search="true">
                                        <option value=""> --Select Activity--</option>
                                        @foreach($activities as $key =>$activity)
                                            <option value="{{ $activity->id }}"> {{ $activity->activity_title }}  </option>
                                        @endforeach
                                    </select>
                                    <div class="field-placeholder">Activity</div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="field-wrapper">
                                    <select class="select-single js-states" title="Select Product Category" id="age_group" name="age_group_id" data-live-search="true" >
                                        <option value=""> --Select AgeGroup-- </option>
                                    </select>
                                    <div class="field-placeholder">Age Group</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
                                <div class="field-wrapper">
                                    <select class="select-single js-states" title="Select Product Category" id="round" name="round_id" data-live-search="true" >
                                        <option value=""> --Select Round-- </option>
                                        @if(count($round)>0)
                                          @foreach($round as $r)
                                            <option value="{{ $r->id }}">{{ $r->round_name }}</option>
                                          @endforeach
                                        
                                        @endif
                                    </select>
                                    <div class="field-placeholder">Round</div>
                                </div>
                            </div>
                             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
                                <div class="field-wrapper">
                                    <select class="select-single js-states" title="Select Gender" id="gender" name="gender" data-live-search="true" >
                                        <option value=""> --Select Gender-- </option>
                                        @if(count($gender)>0)
                                          @foreach($gender as $key=> $gen)
                                            <option value="{{ $key }}">{{ $gen }}</option>
                                          @endforeach
                                        
                                        @endif
                                    </select>
                                    <div class="field-placeholder">Gender</div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary">Show</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="batch" class="table v-middle dataTable no-footer" role="grid" aria-describedby="copy-print-csv_info">
                        <thead>
                            <tr role="row">
                                <th>SNO</th>
                                <th>REGISTRATION NO</th>
                                <th>NAME</th>
                                <th>DISTRICT</th>
                                <th>STATE</th>
                                <th>COUNTRY</th>
                                <th>J1</th>
                                <th>J2</th>
                                <th>J3</th>
                                <th>J4</th>
                                <th>MARKS</th>
                                <th>AVG MARKS</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
</div>

@push('script')

<script src="{{ asset('vendor/megamenu/js/megamenu.js') }}"></script>
<script src="{{ asset('vendor/megamenu/js/custom.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('vendor/slimscroll/slimscroll.min.js') }}"></script>
<script src="{{ asset('vendor/slimscroll/custom-scrollbar.js') }}"></script>

<!-- Search Filter JS -->
<script src="{{ asset('vendor/search-filter/search-filter.js') }}"></script>
<script src="{{ asset('vendor/search-filter/custom-search-filter.js') }}"></script>

<!-- Data Tables -->
<script src="{{ asset('vendor/datatables/dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- Custom Data tables -->
<script src="{{ asset('vendor/datatables/custom/final-judgement-seheet.js') }}"></script>

<!-- Download / CSV / Copy / Print -->
<script src="{{ asset('vendor/datatables/buttons.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendor/datatables/html5.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/buttons.print.min.js') }}"></script>
<script type="text/javascript">
    function getPlayerList(){
    var form  = $('#filter-form').serialize();
    if(activity!='' && activity!=0){
      $.get('/admin/get-jugdement-sheet?'+form,function(data){
        if(data.error==false){
          let arr = data.msg;
          let str = '';
            if(arr.length>0){
              let i = 1;
              arr.map((d) =>{
                console.log(d)
                str +='<tr><td>'+i+'</td><td><a href="/admin/playet-judge-details/'+d.id+'">'+d.details.registration_no+'</a></td><td>'+d.details.name+'</td><td>'+d.details.country.country_name+'</td><td>'+d.details.state.states_name+'</td><td>'+d.details.district.districts_name+'</td>'+
                '<td>'+d.panel_referee_arr[0].sum_marks+'</td><td>'+d.panel_referee_arr[1].sum_marks+'</td><td>'+d.panel_referee_arr[2].sum_marks+'</td><td>'+d.panel_referee_arr[3].sum_marks+'</td>'+
                '<td>'+d.total_marks+'/'+d.max_marks+'</td><td>'+d.avg_marks+'</td></tr>';
                i++;
              })
              $('#player-score-list').html(str);
            }
            
        }else{
          $('#player-score-list').html('');
          alert(data.msg);
        }
      })
    }
  }
  function getList(){
    var activity = $('#activity').val();
    if(activity!='' && activity!=0){
      $.get('/admin/round-agegroup-yoga?activity='+activity,function(data){
        if(data.error==false){
          let str = data.res;
          $('#age_group').html(str);      
        }
      })
    }
  }
  
  function loadAasan(){
    var activity = $('#activity').val();
    var age_group = $('#age_group').val();
    var round_id =  $('#round_id').val();
    if(activity!='' && activity!=0 && age_group!=0 && age_group!=''){
      $.get('/admin/round-aasan-yoga?activity='+activity+'&age_group='+age_group+'&round_id='+round_id,function(data){
        if(data.error==false){
          let str = data.res;
          $('#load_data').html(str);      
        }else{
          $('#load_data').html(''); 
        }
      })
    }else{
      $('#load_data').html(''); 
    }
  }
</script>

@endpush('script')
@endsection