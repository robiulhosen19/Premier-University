
@extends('admin/layouts/default')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Student Education From </li>
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
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Program</th>
                                        <th>SSC/Eqivalent </th>
                                        <th>SSC-Group</th>
                                        <th>SSC-Institution</th>
                                        <th>HSC/Eqivalent </th>
                                        <th>HSC-Group</th>
                                        <th>HSC-Institution</th>
                                        <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($student_from as $d)
                                    <tr>
                                        <!-- <th scope="row">1</th> -->
                                        <td>{{ $d->frist_name }}</td>  
                                        <td> {{ $d->last_name }}</td> 
                                        <td>{{ $d->email }} </td> 
                                        <td>{{$d->department_id}} </td> 
                                        <td> {{$d->program_id}}</td> 
                                        <td> {{$d->ssc_eqivalent}}</td> 
                                        <td> {{$d->ssc_group}}</td> 
                                        <td> {{$d->ssc_institution}}</td>
                                        <td> {{$d->hsc_eqivalent}}</td> 
                                        <td> {{$d->hsc_group}}</td> 
                                        <td> {{$d->hsc_institution}}</td> 
                                        <td><span class="badge bg-success">Approved</span></td>

                                       
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


