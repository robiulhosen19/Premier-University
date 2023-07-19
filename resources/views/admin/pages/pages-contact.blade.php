
@extends('admin/layouts/default')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
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
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <!-- <h5 class="card-title">Recent Sales <span>| Today</span></h5> -->

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                        <th>No.</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($show as $key=> $data)
                                    <tr>
                                        <!-- <th scope="row">1</th> -->
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->first_name }}</td>
                                        <td>{{ $data->last_name}}</td>
                                        <td>{{ $data->email}}</td>
                                        <td>{{ $data->phone}}</td>
                                        <td>{{ $data->text}}</td>
                                        <td>
                                            <a href="#" class="btn btn-success" >Edit</a>
                                            <a href="{{ url('contact/delete/'.$data->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure!')">Delete</a>
                                        </td>
                                    


                                    </tr>
                                    @endforeach
                                       
                                    </tbody>
                                </table>
                                <script>
                                    let table = new DataTable('#myTable');
                                </script>
                            </div>

                        </div>
                    </div><!-- End Recent Sales -->



                </div>
            </div><!-- End Left side columns -->


        </div>

       
        
       
        
    </section>
</main><!-- End #main -->


@endsection


