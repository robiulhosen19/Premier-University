@extends('website/layouts/default')
@section('content')
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Admissions</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Admission</span>
      </div>
    </div>
    <!-- ======= Admission Section ======= -->
    
    <div class="site-section">
        <div class="container">
 @if(Session::has('msg'))
            <p class="alert alert-success" role="alert">{{Session::get('msg')}}</p>

        @endif

            <form action="" method="post">  
                @csrf   
                <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Select Department</label>
                            <select name="" id="" class="form-control form-control-lg">
                              <option value="">--Select Department--</option>
                            </select>
                        
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Select Program</label>
                            <select name="" id="" class="form-control form-control-lg">
                              <option value="">--Select Program--</option>
                            </select>
                           
                        </div>
                    </div> 
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
                        <div class="col-md-6 form-group">
                            <label for="fname">Payment Method</label>
                            <select name="" id="" class="form-control form-control-lg">
                             
                            <option value="">--Select Payment Method--</option>
                            <option value="">Bkash</option>
                            </select>
                      
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lname">Transaction Id</label>
                            <input type="text" id="lname" class="form-control form-control-lg" name="last_name">
                        </div>
                    </div>
                    
                    


                    
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="submit" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
            </form>
        </div>
    </div>

@endsection