<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/bundles/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/bundles/codemirror/lib/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/bundles/codemirror/theme/duotone-dark.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/bundles/jquery-selectric/selectric.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('admin/assets/img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/bundles/izitoast/css/iziToast.min.css')}}">
    <link rel="stylesheet" type="text/css" href =" https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >
    
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('admin.component.navbar')
      @include('admin.component.sidebar')
        <!-- Main Content -->
        @yield('content')
       @include('admin.component.footer')
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{asset('admin/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('admin/assets/js/page/index.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('admin/assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('admin/assets/js/custom.js')}}"></script>
<script src="{{asset('admin/assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
<script src="{{asset('admin/assets/js/page/ckeditor.js')}}"></script>
  <!-- Page Specific JS File -->
<script src="{{asset('admin/assets/js/page/toastr.js')}}"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>
 <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- Template JS File -->
  <script src="{{asset('admin/assets/bundles/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('admin/assets/bundles/codemirror/lib/codemirror.js')}}"></script>
  <script src="{{asset('admin/assets/bundles/codemirror/mode/javascript/javascript.js')}}"></script>
  <script src="{{asset('admin/assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
  <script src="{{asset('admin/assets/bundles/ckeditor/ckeditor.js')}}"></script>

  <script>

 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break;
 }
 @endif
</script>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
