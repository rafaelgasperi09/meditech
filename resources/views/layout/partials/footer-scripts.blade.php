<!-- jQuery -->
<script src="{{ URL::asset('/assets/js/jquery-3.7.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Feather Js -->
<script src="{{ URL::asset('/assets/js/feather.min.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ URL::asset('/assets/js/jquery.slimscroll.js') }}"></script>

<!-- Select2 Js -->
<script src="{{ URL::asset('/assets/js/select2.min.js') }}"></script>

<!-- Datatables JS -->
<script src="{{ URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/plugins/datatables/datatables.min.js') }}"></script>

<!-- counterup JS -->
<script src="{{ URL::asset('/assets/js/jquery.waypoints.js') }}"></script>
<script src="{{ URL::asset('/assets/js/jquery.counterup.min.js') }}"></script>

<!-- Apexchart JS -->
<script src="{{ URL::asset('/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/plugins/apexchart/chart-data.js') }}"></script>

<!-- Calendar Js -->
<script src="{{ URL::asset('/assets/plugins/simple-calendar/jquery.simple-calendar.js') }}"></script>
<script src="{{ URL::asset('/assets/js/calander.js') }}"></script>

<!-- Circle Progress JS -->
<script src="{{ URL::asset('/assets/js/circle-progress.min.js') }}"></script>

<!-- Slick JS -->
<script src="{{ URL::asset('/assets/plugins/slick/slick.js') }}"></script>

<!-- Datepicker Core JS -->
<script src="{{ URL::asset('/assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

<script src="{{ URL::asset('/assets/plugins/light-gallery/js/lightgallery-all.min.js') }}"></script>

<!-- Summernote JS -->
<script src="{{ URL::asset('/assets/plugins/summernote/summernote-bs5.min.js') }}"></script>

<!-- Ck Editor JS -->
<script src="{{ URL::asset('/assets/js/ckeditor.js') }}"></script>

<!-- Full Calendar -->
<script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/jquery.fullcalendar.js') }}"></script>

@if (Route::is(['add-blog', 'edit-blog']))
    <!-- Tagsinput JS -->
    <script src="{{ URL::asset('/assets/js/tagsinput.js') }}"></script>
@endif

@if (Route::is(['seo-settings']))
    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
@endif

<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<!-- Custom JS -->
<script src="{{ URL::asset('/assets/js/app.js') }}"></script>

<script src="{{ URL::asset('/assets/js/custom.js?time='.time()) }}"></script>
