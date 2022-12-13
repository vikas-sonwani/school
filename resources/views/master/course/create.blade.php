@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    


    @include('layouts.message')
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Add Course</div>
                        </div>
                        <div class="col-xl-6 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="academic_year" name="academic_year" required="required">
                                    <option value=""> -- Select Academic Year -- </option>
                                    @foreach($levels as $level)
                                        <option value="{{ $level->id }}"> {{ $level->name }} </option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Academic Year</div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="academic_level" name="academic_level" required="required">
                                    <option value=""> -- Select Level -- </option>
                                    @foreach($academic_year as $year)
                                        <option value="{{ $year->id }}"> {{ $year->academic_code }} </option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Academic Level <span class="text-danger">*</span></div>
                                @error('academic_level') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="duration_type" name="duration_type" required="required">
                                    <option value=""> -- Select Duration Type -- </option>
                                    @foreach($duration_type as $duration)
                                        <option value="{{ $duration->id }}"> {{ $duration->duration_type }} </option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Duration Type <span class="text-danger">*</span></div>
                                @error('duration_type') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('duration_count') is-invalid @enderror" type="text" name="duration_count">
                                </div>
                                <div class="field-placeholder">Duration Count<span class="text-danger">*</span></div>
                                    
                                @error('duration_count') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('short_name') is-invalid @enderror" type="text" name="short_name">
                                </div>
                                <div class="field-placeholder">Short Name<span class="text-danger">*</span></div>
                                    
                                @error('short_name') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('full_name') is-invalid @enderror" type="text" name="full_name">
                                </div>
                                <div class="field-placeholder">Full name<span class="text-danger">*</span></div>
                                    
                                @error('full_name') 
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