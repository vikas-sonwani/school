@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    


    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @error('error')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <form action="{{ route('fees_category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Add Fees Category</div>
                        </div>
                        <div class="col-xl-6 mb-2">
                            <div class="field-wrapper">
                                <select class="form-select" id="level_id" name="level_id" required="required">
                                    <option value=""> -- Select Level -- </option>
                                    @foreach($levels as $level)
                                        <option value="{{ $level->id }}"> {{ $level->name }} </option>
                                    @endforeach
                                </select>
                                <div class="field-placeholder">Level</div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('academic_code') is-invalid @enderror" type="text" name="fees_category">
                                </div>
                                <div class="field-placeholder">Fees Category<span class="text-danger">*</span></div>
                                    
                                @error('fees_category') 
                                        <span class="text-danger">{{ $message }}</span>	
                                @enderror
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input class="form-control  @error('academic_code') is-invalid @enderror" type="number" name="amount">
                                </div>
                                <div class="field-placeholder">Amount<span class="text-danger">*</span></div>
                                    
                                @error('amount') 
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