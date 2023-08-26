<!DOCTYPE html>
<html lang="en">

<head>
@include('website.includes.head')

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
          <div class="ml-auto">
            <div class="social-wrap">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>

                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>
        </div>
            <!-- <p>APPLY ONLINE</p> -->

          </div>
          @if(session()->has('user_id'))
          <a href="{{ url('logout') }}">Logout</a>
          @else
          <div class="col-lg-3 text-right">
            <a href="{{url('login')}}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="{{url('student-register')}}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
          @endif
        </div>
      </div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    @include('website.includes.header')
    </header>


    @yield('content')
 

    @include('website.includes.footer')

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="assets/website/js/jquery-3.3.1.min.js"></script>
  <script src="assets/website/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/website/js/jquery-ui.js"></script>
  <script src="assets/website/js/popper.min.j"></script>
  <script src="assets/website/js/bootstrap.min.j"></script>
  <script src="assets/website/js/owl.carousel.min.js"></script>
  <script src="assets/website/js/jquery.stellar.min.js"></script>
  <script src="assets/website/js/jquery.countdown.min.js"></script>
  <script src="assets/website/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/website/js/jquery.easing.1.3.js"></script>
  <script src="assets/website/js/aos.js"></script>
  <script src="assets/website/js/jquery.fancybox.min.js"></script>
  <script src="assets/website/js/jquery.sticky.js"></script>
  <script src="assets/website/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="assets/website/js/main.js"></script>

</body>

</html>