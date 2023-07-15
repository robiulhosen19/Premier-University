@extends('admin/layouts/default')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Department Program</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">


                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class=" recent-sales overflow-auto">

                            <div class="card-body">
                                <!-- <h5 class="card-title">Recent Sales <span>| Today</span></h5> -->

                                <form action="{{url('course/store')}}" method="post">
                  <div class="row mb-3">
                      <label for="" class="col-md-4 col-lg-3 col-form-label">Price</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="price" type="text" class="form-control" id="" value="">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="" class="col-md-4 col-lg-3 col-form-label">Titel</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="titel" type="text" class="form-control" id="" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="" class="col-md-4 col-lg-3 col-form-label">Description</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="text" class="form-control" id="" style="height: 100px"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="" class="col-md-4 col-lg-3 col-form-label">Imaige</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="file" type="file" class="form-control" id="" value="">
                      </div>
                    </div>

                   


                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                  </form>


                            </div>

                        </div>
                    </div><!-- End Recent Sales -->



                </div>
            </div><!-- End Left side columns -->


        </div>

       
        
       
        
    </section>
</main><!-- End #main -->


@endsection


