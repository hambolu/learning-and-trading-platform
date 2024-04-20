<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href="{{ asset('vendor/unicons-2.0.1/css/unicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/instructor-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/night-mode.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-steps.css') }}" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-select/docs/docs/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/semantic/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/jquery-ui-1.12.1/jquery-ui.css') }}" rel="stylesheet">


</head>

<body class="h-100 bg-white">
    @yield('content')
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('vendor/semantic/semantic.min.js') }}"></script>
    {{-- <script src="{{ asset('js/custom.js') }}"></script> --}}
    <script src="{{ asset('js/night-mode.js') }}"></script>
	<script src="{{ asset('js/jquery-steps.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			// Hide all submenus initially
			$('.sub_menu').hide();
	
			// Add click event handler to menu links
			$('.menu--link').click(function() {
				// Toggle visibility of the submenu associated with this menu item
				$(this).siblings('.sub_menu').toggle();
			});
		});
	</script>
	<script>
		ClassicEditor.create( document.querySelector( '#editor1' ) )
		.then( editor => {
			window.editor1 = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );

		ClassicEditor.create( document.querySelector( '#editor2' ) )
		.then( editor => {
			window.editor2 = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
		
		ClassicEditor.create( document.querySelector( '#editor3' ) )
		.then( editor => {
			window.editor3 = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
		
		ClassicEditor.create( document.querySelector( '#editor4' ) )
		.then( editor => {
			window.editor4 = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
	</script> 
	<script>
		$('#add-course-tab').steps({
		  onFinish: function () {
			alert('Wizard Completed');
		  }
		});		
	</script>
	<script>
		$( function() {
			$( ".sortable" ).sortable();
			$( ".sortable" ).disableSelection();
		} );
	</script>

</body>

</html>
