<!doctype html>
<html lang="en">
<head>
	@include('layouts.header')
		
	</head>
	<body>
		<!-- Loading wrapper end -->
		@include('sweetalert::alert')
		<!-- Page wrapper start -->
		<div class="page-wrapper">
			@include('layouts.sidebar')

			<div class="main-container">

				@include('layouts.topbar')

				<div class="content-wrapper-scroll">
					 <!-- Content wrapper start -->
                    <div class="content-wrapper">
						@yield('content')
						<div class="app-footer">© Yogasana 2022-23</div>
					</div>
				</div>

			</div>

		</div>
	    @include('layouts.script')

	</body>

</html>


                   
