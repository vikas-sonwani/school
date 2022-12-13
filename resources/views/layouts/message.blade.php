<div class="col-md-12">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
		{{ session('success') }}
	</div>

    @endif
    @if (session('error'))
	<div class="alert alert-danger mg-b-0" role="alert">
		{{ session('error') }}
	</div>
    @endif
</div>