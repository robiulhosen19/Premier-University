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
                    <li class="">
                        <a href="{{ url('/home')}}" class="nav-link text-left">Home</a>
                    </li>
                    <li class="has-children">
                        <a href="#" class="nav-link text-left">Admissions</a>
                        <ul class="dropdown">
                            <li><a href="#" class="nav-link text-left">Application Guideline</a></li>
                            <li><a href="{{ url('admission')}}" class="nav-link text-left">Online Apply</a></li>
                            <li><a href="#" class="nav-link text-left"> Admitcard</a></li>
                            <li><a href="{{ url('course')}}" class="nav-link text-left">Programs</a></li>
                        </ul>
                    </li>
                    <li>
                    <li>
                        <a href="">About</a>
                    </li>

                    </li>
                    <li>
                    <li><a href="{{ url('contacts')}}">Contact</a></li>
                    </li>
@if(Session()->has('user_role') && Session()->get('user_role')) 
                    <li class="has-children">
                        <a href="" class="nav-link text-right">{{Session::get('user_fname')}} {{Session::get('user_lname')}}</a>
                        <ul class="dropdown">
                             
                            <li><a href="{{url('profile')}}">Profile</a></li>
                           
                            @if(Session()->has('user_role') && Session()->get('user_role') == 'Admin')
                            <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                            @endif
                            @if(Session()->has('user_role') && Session()->get('user_role'))
                            <li><a href="{{ url('user-logout')}}">Logout</a></li>
                            @endif
                        </ul>
                    </li>
 @endif
                </ul>
                </ul>
            </nav>

        </div>


    </div>
</div>