@extends('website/layouts/default')
@section('content')
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Courses</h2>
              <p>All Department Course List</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Courses</span>
      </div>
    </div>

   
    <div class="site-section">
        <div class="container">
            <div class="row">
 @foreach ($show as $s)

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="course-single.html"><img src="images/course_1.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">{{$s->price}}</div>
                        <div class="category"><h3>{{$s->catagory}}</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                       
                        <p class="desc mb-4">{{$s->text}}</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>
@endforeach

            </div>
        </div>
    </div>

@endsection