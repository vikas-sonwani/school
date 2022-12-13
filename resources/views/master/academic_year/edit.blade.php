@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    

    @include('layouts.message')

    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('academic_year.update',$academic_year->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Edit Academic Year</div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input value="{{ $academic_year->academic_code }}" class="form-control  @error('academic_code') is-invalid @enderror" type="text" name="academic_code">
                                </div>
                                <div class="field-placeholder">Academic Code<span class="text-danger">*</span></div>
                                    
                                @error('activity_name') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                                                 
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                            <div class="field-wrapper">
                                <textarea class="form-control  @error('academic_desc') is-invalid @enderror" rows="2" name="academic_desc">{{ $academic_year->academic_desc }}</textarea>
                                <div class="field-placeholder">Discription <span class="text-danger">*</span></div>
                                @error('academic_desc') 
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