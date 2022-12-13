@extends('../layouts.main')
@section('content')


<div class="content-wrapper">

    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                <div class="form-section-header">Roles</div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control  @error('name') is-invalid @enderror" type="text" name="name">
                                    </div>
                                    <div class="field-placeholder">Name<span class="text-danger">*</span></div>

                                    @error('group_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <h4>Permission</h4>
                                </div>
                                
                                @foreach($permission as $perm)
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                        <div class="field-wrapper">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $perm->id }}" id="permission{{ $perm->id }}">
                                                <label class="form-check-label" for="permission{{ $perm->id }}">
                                                    {{ $perm->name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
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