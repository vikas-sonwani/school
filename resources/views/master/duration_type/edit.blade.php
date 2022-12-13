@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    

    @include('layouts.message')

    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('duration_type.update',$duration_type->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Edit Duraton Type</div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input value="{{ $duration_type->duration_type }}" class="form-control  @error('duration_type') is-invalid @enderror" type="text" name="duration_type">
                                </div>
                                <div class="field-placeholder">Duration Type<span class="text-danger">*</span></div>
                                    
                                @error('duration_type') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                                                 
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                            <div class="field-wrapper">
                                <textarea class="form-control  @error('duration_desc') is-invalid @enderror" rows="2" name="duration_desc">{{ $duration_type->duration_desc }}</textarea>
                                <div class="field-placeholder">Discription <span class="text-danger">*</span></div>
                                @error('duration_desc') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                           
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