
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{asset('health/assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('health/assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('health/assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('health/assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('health/assets/css/theme.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/bundles/izitoast/css/iziToast.min.css')}}">
  <link rel="stylesheet" type="text/css" href =" https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" >
</head>
<body>

 @include('front.body.header')

@yield('content')


 

 

 @include('front.body.footer')

<script src="{{asset('health/assets/js/jquery-3.5.1.min.j')}}s"></script>

<script src="{{asset('health/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('health/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('health/assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('health/assets/js/theme.js')}}"></script>
<script src="{{asset('admin/assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
<script src="{{asset('admin/assets/js/page/toastr.js')}}"></script>
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
</html>