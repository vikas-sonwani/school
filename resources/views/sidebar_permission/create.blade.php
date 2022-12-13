@extends('../layouts.main')
@section('content')


<div class="content-wrapper">
    @include('layouts.message')
    <div class="row gutters">
        <div class="col-lg-12 col-xl-12 col-md-12 ">
            <form action="{{ route('sidebar_permission.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                <div class="form-section-header">SideBar Permission Mapping</div>
                            </div>
                            <div class="col-xl-6 mb-2">
                                <div class="field-wrapper">
                                    <select class="form-select" id="sidebar_id" name="sidebar_id" required="required">
                                        <option value=""> -- Select Sidebar -- </option>
                                        @foreach($sidebar as $side)
                                            <option value="{{ $side->id }}"> {{ $side->name }} </option>
                                        @endforeach
                                    </select>
                                    <div class="field-placeholder">Sidebar</div>
                                </div>
                            </div>
                            <div class="col-xl-6 mb-2">
                                <div class="field-wrapper">
                                    <select class="form-select" id="permission_id" name="permission_id" required="required">
                                        <option value=""> -- Select Permission -- </option>
                                        @foreach($permission as $per)
                                            <option value="{{ $per->id }}"> {{ $per->name }} </option>
                                        @endforeach
                                    </select>
                                    <div class="field-placeholder">Permission</div>
                                </div>
                                @error('permission_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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