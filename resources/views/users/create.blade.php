@extends('../layouts.main')
@section('content')


<div class="content-wrapper">



    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                <div class="form-section-header">User</div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control  @error('name') is-invalid @enderror" type="text" name="name">
                                    </div>
                                    <div class="field-placeholder">Name<span class="text-danger">*</span></div>

                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control  @error('fee') is-invalid @enderror" type="email" name="email">
                                    </div>
                                    <div class="field-placeholder">Email<span class="text-danger">*</span></div>
                                    @error('min_age')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password">
                                    </div>
                                    <div class="field-placeholder">Password<span class="text-danger">*</span></div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control  @error('confirm_password') is-invalid @enderror" type="password" name="confirm_password">
                                    </div>
                                    <div class="field-placeholder">Confirm Password<span class="text-danger">*</span></div>
                                    @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <select class="role" id="role" name="role">
                                        <option value="">Select Roles</option>
                                        @foreach($roles as $role)
                                            <option  value="{{ $role->id }}"> {{ $role->name }} </option>
                                        @endforeach
                                    </select>
                                    <div class="field-placeholder">Roles</div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>

                    </div>

                </div>

            </form>

        </div>
    </div>
    <!-- Row end -->

</div>

@endsection