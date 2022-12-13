@extends('layouts.main')
@section('content')
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         <div class="page-header">
                    <div>
                        <h4 class="main-content-title tx-24 mg-b-5">Change Password</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                           
                             <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                        </ol>

                    </div>
                </div>

        <div class="card">
           <div class="card-header">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5>Change Password</h5>  
                    </div>
                </div>
            </div>
            <div class="card-body">
                
                @include('layouts.message')
                 
                <form action="{{ route('candidate.updatePassword') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 offset-md-3">

                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control" type="password" name="current_password" id="name" value="">
                                </div>
                                <div class="field-placeholder">Current Password <span class="text-danger">*</span></div>
                            </div>
                             @error('current_password')
                                <div class="badge bg-danger mt-1">{{ $message }}</div>
                             @enderror
                        </div>
                      
                        <br clear="all">
                        <div class="col-md-6 offset-md-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control" type="password" name="new_password" id="name" value="" >
                                </div>
                                <div class="field-placeholder">New Password <span class="text-danger">*</span></div>
                            </div>
                             @error('new_password')
                                <div class="badge bg-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                         <br clear="all">
                        <div class="col-md-6 offset-md-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control" type="password" name="confirm_password" id="name" value="" >
                                </div>
                                <div class="field-placeholder">Confirm Password <span class="text-danger">*</span></div>
                            </div>
                             @error('confirm_password')
                                <div class="badge bg-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <br><br clear="all">
                        <div class="col-md-12 text-center mt-4">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                   
            </div>
        </div>
    </div>
</div>
@endsection