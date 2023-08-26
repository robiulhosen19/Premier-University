
@extends('admin/layouts/default')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Student Information </li>
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
                                       
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mobile</th>
                                        <th>Date Of Birth</th>
                                        <th>Permanet Address</th>
                                        <th>Present Address </th>
                                        <th>Nationality</th>
                                        <th>Religion</th>
                                        <th>Blood Group</th>
                                        <th>Gender</th>
                                        <th>Marital Stutas</th>
                                        

                                        </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($student_from as $d)
                                    <tr>
                                        <!-- <th scope="row">1</th> -->
                                        <td>{{ $d->frist_name }}</td>  
                                        <td> {{ $d->last_name }}</td> 
                                        <td>{{ $d->tel }} </td> 
                                        <td>{{ $d->dath_of_birth }} </td> 
                                        <td> {{$d->per_addr}}</td> 
                                        <td> {{$d->pre_addr}}</td> 
                                        <td> {{$d->nationality}}</td> 
                                        <td> {{$d->religion}}</td>
                                        <td> {{$d->blood_group}}</td> 
                                        <td> {{$d->gender}}</td> 
                                        <td> {{$d->marital_stutas}}</td> 
                                        

                                       
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


