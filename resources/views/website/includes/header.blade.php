<div class="container">
    <div class="d-flex align-items-center">
        <div class="site-logo">
            <a href="index.html" class="d-block">
                <img src="assets/website/images/logo.jpg" alt="Image" class="img-fluid">
            </a>
        </div>
        <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="active">
                        <a href="{{ url('/home')}}" class="nav-link text-left">Home</a>
                    </li>
                    <li class="has-children">
                        <a href="about.html" class="nav-link text-left">About Us</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('teacher')}}">Our Teachers</a></li>
                            <li><a href="{{ url('about')}}">Our School</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('admission')}}" class="nav-link text-left">Admissions</a>
                    </li>
                    <li>
                        <a href="{{ url('course')}}" class="nav-link text-left">Courses</a>
                    </li>
                    <li>
                        <a href="{{ url('contacts')}}" class="nav-link text-left">Contact</a>
                    </li>
                </ul>
                </ul>
            </nav>

        </div>
        <div class="ml-auto">
            <div class="social-wrap">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>

                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>
        </div>

    </div>
</div>