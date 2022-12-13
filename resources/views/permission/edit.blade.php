@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    


    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('permission.update',$permission->id) }}" method="POST">
            @method('PATCH')
			@csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Permission</div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('name') is-invalid @enderror" type="text" name="name" value="{{ $permission->name }}">
                                </div>
                                <div class="field-placeholder">Permission Name<span class="text-danger">*</span></div>
                                    
                                @error('name')
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($roles as $role)
                            <div class="col-xl-3 mb-3">
                                <div class="form-check">
                                    @if(in_array($role->id,$selected_role))
									    <input class="form-check-input" type="checkbox" name="roles[]" checked="checked" value="{{ $role->id }}" id="{{ $role->id }}" >
                                    @else
                                        <input class="form-check-input" type="checkbox" name="roles[]" value="" id="{{ $role->id }}" >
                                    @endif
									<label class="form-check-label" for="role{{ $role->id }}">
                                        {{ $role->name }}
								    </label>
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
    <!-- Row end -->

</div>

@endsection