 <!-- Bootstrap CSS -->
 <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">

 <!-- Fontawesome CSS -->
 <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
 <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/all.min.css') }}">

 <!-- Feathericon CSS -->
 <link rel="stylesheet" href="{{ url('assets/plugins/feather/feather.css') }}">

 <!-- Select2 CSS -->
 <link rel="stylesheet" type="text/css" href="{{ url('assets/css/select2.min.css') }}">

 <!-- Datatables CSS -->
 <link rel="stylesheet" href="{{ url('assets/plugins/datatables/datatables.min.css') }}">

 <!-- Calendar CSS -->
 <link rel="stylesheet" href="{{ url('assets/plugins/simple-calendar/simple-calendar.css') }}">

 <!-- Datepicker CSS -->
 <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker.min.css') }}">

 <!-- Slick CSS -->
 <link rel="stylesheet" type="text/css" href="{{ url('assets/plugins/slick/slick.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ url('assets/plugins/slick/slick-theme.css') }}">

 <link rel="stylesheet" type="text/css" href="{{ url('assets/plugins/light-gallery/css/lightgallery.min.css') }}">

 <!-- Summernote CSS -->
 <link rel="stylesheet" href="{{ url('assets/plugins/summernote/summernote-bs5.min.css') }}">

 @if (Route::is(['others-settings']))
     <!-- Ck Editor -->
     <link rel="stylesheet" href="{{ url('assets/css/ckeditor.css') }}">
 @endif

 @if (Route::is(['add-blog', 'edit-blog']))
     <!-- Tagsinput CSS -->
     <link rel="stylesheet" type="text/css" href="{{ url('assets/css/tagsinput.css') }}">
 @endif

 @if (Route::is(['seo-settings']))
     <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
 @endif

 <link rel="stylesheet" type="text/css" href="{{ url('assets/css/fullcalendar.min.css') }}">

 <!-- Main CSS -->
 <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">

 <link rel="stylesheet" type="text/css" href="{{ url('styles/default.css?time='.time()) }}">

