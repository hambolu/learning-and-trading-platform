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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <!-- Custom Styles -->
    <style>
        #togglePassword {
            cursor: pointer;
        }
    </style>
</head>
<body class="h-100 bg-white">
    @yield('content')

    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('vendor/semantic/semantic.min.js') }}"></script>
    <script src="{{ asset('js/night-mode.js') }}"></script>
    <script src="{{ asset('js/jquery-steps.min.js') }}"></script>
    <!-- Share.js -->
    <script src="{{ asset('js/share.js') }}"></script>
    <!-- Additional scripts -->
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
        function copyToClipboard(text) {
            var dummy = document.createElement("textarea");
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand("copy");
            document.body.removeChild(dummy);
            
            alert("Link copied to clipboard!");
        }
    </script>
    <script>
        ClassicEditor.create( document.querySelector( '#editor1' ) )
        .then( editor => {
            window.editor1 = editor;
        } )
        .catch( err => {
            console.error( err.stack );
        } );

        // More ClassicEditor.create() calls for other editors
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
