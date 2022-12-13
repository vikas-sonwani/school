@extends('../layouts.main')
@section('content')

@push('header')

<link rel="stylesheet" href="vendor/megamenu/css/megamenu.css">
<!-- Search Filter JS -->
<link rel="stylesheet" href="{{ asset('vendor/search-filter/search-filter.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/search-filter/custom-search-filter.css') }}">

<!-- Data Tables -->
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css') }}" />
<link href="{{ asset('vendor/datatables/buttons.bs.css') }}" rel="stylesheet" />

@endpush

<div class="content-wrapper">
    <div class="breadcrumb-container mb-2">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route($index->sidebar->href.'.index') }}">{{ $index->sidebar->name }}</a></li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
    <div class="row gutters mb-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="d-flex justify-content-end">
                @foreach ($option_a as $op )
                    <a href="{{ $op->href }}" class="btn btn-info {{ $op->icon}}"><i class="icon-plus"></i>{{ $op->name }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-body">
                    <table id="academic_year" class="table v-middle dataTable no-footer" role="grid" aria-describedby="copy-print-csv_info">
                        <thead>
                            <tr role="row">
                                <th>SNO</th>
                                <th>ACADEMIC YEAR</th>
                                <th>DESCRIPTION</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <!-- Row end -->

    </div>
    @push('script')

    <script src="{{ asset('vendor/megamenu/js/megamenu.js') }}"></script>
    <script src="{{ asset('vendor/megamenu/js/custom.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/slimscroll/custom-scrollbar.js') }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset('vendor/search-filter/search-filter.js') }}"></script>
    <script src="{{ asset('vendor/search-filter/custom-search-filter.js') }}"></script>

    <!-- Data Tables -->
    <script src="{{ asset('vendor/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- Custom Data tables -->
    <script src="{{ asset('vendor/datatables/custom/custom-datatables.js') }}"></script>

    <!-- Download / CSV / Copy / Print -->
    <script src="{{ asset('vendor/datatables/buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/datatables/html5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/custom/academic_year.js') }}"></script>
    @endpush('script')
    @endsection