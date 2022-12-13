@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    


    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('level.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Add Level</div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input  class="form-control  @error('name') is-invalid @enderror" type="text" name="name">
                                </div>
                                <div class="field-placeholder">Name<span class="text-danger">*</span></div>
                                    
                                @error('name') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('type') is-invalid @enderror" type="text" name="type">
                                </div>
                                <div class="field-placeholder">Type<span class="text-danger">*</span></div>
                                    
                                @error('type') 
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