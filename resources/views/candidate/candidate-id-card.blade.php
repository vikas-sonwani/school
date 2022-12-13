@extends('layouts.main')
@section('content')

<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <div>
                        <h4 class="main-content-title tx-24 mg-b-5">View ID Card</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View ID Card</li>
                        </ol>

                    </div>
                </div>

        <div class="card">
            <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="alert alert-primary">
                             <h5>ID Card</h5>       
                            </div>
                        </div>    
                    </div>


                
                @include('layouts.message')
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                    <table  style="width:100%;border:1px solid #000;"  cellpading="0" cellspacing="0">
                        <tr>
                            <td colspan="3" style="text-align:center;border:1px solid #000;"><img src="{{ asset('website/images/logo.png') }}"  style="height:100px;" alt=""></td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center;border:1px solid #000;"> 
                                <span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >
                                {{ $leagueInfo->league_name }}
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >Name:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $candidate->name }}</span></td>
                        </tr>
                        
                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >S/D/W OF:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $candidate->father_name }}</span></td>
                        </tr>
                      
                        <tr>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; "><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >DATE OF BIRTH:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="1"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{  date("d-m-Y",strtotime($candidate->date_of_birth)) }} </span></td>
                            <td rowspan="4" style="text-align: center;border:1px solid #000; vertical-align:middle;">
                            	<img src="{{ $destinationPath }}" alt="" style="height: 100px; width: 100px;"> <hr> 
                            	<img src="{{ $signature }}" alt="" style="height: 40px;"> 
                            </td>
                        </tr>
                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >GENDER:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $candidate->gender }}</span></td>
                        </tr>
                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >BLOOD GROUP:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $candidate->bloodgroup }}</span></td>
                        </tr>
                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >ROLE:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $role->name }}</span></td>
                        </tr>
                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >MOBILE NO.:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $candidate->mobile }}</span></td>
                        </tr>
                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" > STATE:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $states_str }}</span></td>
                        </tr>

                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >REGISTRATION NO.:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $candidate->registration_no }}</span></td>
                        </tr>
                        
                        <tr>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; "><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >YOGASANA TYPE:</span></td>
                            <td style="height:30px;padding:2px 10px;border:1px solid #000; " colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $activity_str }}</span></td>
                        </tr>
                        <tr>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;" style="height:30px;padding:2px 10px; "><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >AGE GROUP:</span></td>
                            <td style="height:30px;padding:2px 10px; border:1px solid #000;" colspan="2"><span  style="font-weight: bold; font-size: 9pt; text-wrap:inherit;" >{{ $age_group_str }}</span></td>
                        </tr>
                        
                        <tr>
                            <td colspan="3" align="center" style="height: 50px;padding:0;border:.5px solid #000;">
                            <table style="width:100%;" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="height: 50px;border:.5px solid #000;">COMPETITION DIRECTOR</td>
                                    <td align="center" style="height: 50px;border:.5px solid #000;">AUTORITY SIGNATURE</td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" style="height: 20px;border:.5px solid #000;"><small>VALID UPTO CURRENT LEAGUE</small></td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                    </table>
                    
                    </div>
                        <div class="col-lg-12 mt-4">
                            <form action="{{ route('candidate.idcard.download') }}" method="post">
                                @csrf
                                <div class="d-grid gap-2 col-4 mx-auto">
                                	<button type="submit" class="btn btn-sm btn-primary">Download</button> 	
                                </div>
                            </form>
                        </div>
                </div>            
            </div>
        </div>
    </div>
</div>


@endsection