@extends('website/layouts/default')
@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Contact</h2>
              <p>Any, Question for Message.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="{{url('home')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact</span>
      </div>
    </div>
       

    <div class="site-section">
        <div class="container">
 @if(Session::has('msg'))
            <p class="alert alert-success" role="alert">{{Session::get('msg')}}</p>

        @endif

            <form action="{{url('contacts/store')}}" method="post">  
                @csrf    
                    <div class="row">      
                        <div class="col-md-6 form-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" class="form-control form-control-lg" name="first_name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" class="form-control form-control-lg" name="last_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="eaddress">Email Address</label>
                            <input type="email" id="eaddress" class="form-control form-control-lg" name="email"> 
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="tel">Tel. Number</label>
                            <input type="text" id="tel" class="form-control form-control-lg" name="number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Message</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control" name="text"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
            </form>
        </div>
    </div>


@endsection