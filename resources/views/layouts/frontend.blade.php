<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/5.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/5.png" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color5.css" media="screen" id="color">


    <title>
        @yield('title') | Co-working Space
    </title>

</head>

{{-- <body data-spy="scroll" data-target="#scroll-spy"> --}}


@include('layouts.inc.frontend-navbar')

<main>
    @yield('content')
</main>

@include('layouts.inc.frontend-footer')






<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->


{{-- <!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}" ></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap.js')}}" ></script>

<!-- popper js-->
<script src="{{asset('assets/js/popper.min.js')}}" ></script>

<!-- wow js-->
<script src="{{asset('assets/js/wow.min.js')}}" ></script>

<!-- lazyload js-->
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

<!-- script js-->
<script src="{{asset('assets/js/landing-script.js')}}"></script>


<script>
    new WOW().init();
</script> --}}
 <!-- latest jquery-->
 <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

 <!-- popper js-->
 <script src="{{asset('assets/js/popper.min.js')}}"></script>

 <!-- slick js-->
 <script src="{{asset('assets/js/slick.js')}}"></script>

 <!-- menu js-->
 <script src="{{asset('assets/js/menu.js')}}"></script>

 <!-- lazyload js-->
 <script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

 <!-- Bootstrap js-->
 <script src="{{asset('assets/js/bootstrap.js')}}"></script>

 <!-- Bootstrap Notification js-->
 <script src="{{asset('assets/js/bootstrap-notify.min.js')}}"></script>

 <!-- Theme js-->
 <script src="{{asset('assets/js/script.js')}}"></script>

 <!-- latest jquery-->
 <script src="../assets/js/jquery-3.3.1.min.js"></script>

 <!-- exitintent jquery-->
 <script src="../assets/js/jquery.exitintent.js"></script>
 <script src="../assets/js/exit.js"></script>

 <script>
     $(window).on('load', function() {
         setTimeout(function() {
             $('#exampleModal').modal('show');
         }, 2500);
     });

     function openSearch() {
         document.getElementById("search-overlay").style.display = "block";
     }

     function closeSearch() {
         document.getElementById("search-overlay").style.display = "none";
     }
 </script>

</body>

</html>
