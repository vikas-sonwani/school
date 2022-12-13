@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Notification </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Notification</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
    <section>
        <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel rgb-white-style">
                        <div class="panel-body">
                            <!-- <h4>Latest Notifications</h4> -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>TITLE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                     @foreach($notification as $value) 

                                        @if($i == 1)
                                        <tr>
                                            <td>
                                                <a href="{{ ($value->featured_image)?asset($value->featured_image):'#' }}" target="_blank" style="font-size: 16px; font-weight: 600;">{{$value->title}}</a> 
                                                <img src="{{ asset('website/extra-images/new-blinking.gif') }}" style="width: 50px;"><br>
                                                <span>Date: {{date("d-m-Y",strtotime($value->created_at)) }}</span>
                                            </td>
                                            <td>
                                                @if($value->featured_image != '')
                                                <a href="{{ ($value->featured_image)?asset($value->featured_image):'#' }}" class="btn btn-1" target="_blank">View</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @else

                                        <tr>
                                            <td>
                                                <a href="{{ ($value->featured_image)?asset($value->featured_image):'#' }}" target="_blank" style="font-size: 16px; font-weight: 600;">{{$value->title}}</a> 
                                                <br>
                                                <span>Date: {{date("d-m-Y",strtotime($value->created_at)) }}</span>
                                            </td>
                                            <td>
                                                @if($value->featured_image != '')
                                                <a href="{{ ($value->featured_image)?asset($value->featured_image):'#' }}" class="btn btn-1" target="_blank">View</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endif

                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach 

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</div>

@endsection