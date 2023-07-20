

@extends('admin/layouts/default')
@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pending Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Pending User List</li>
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
                  <h5 class="card-title">All User <span>| Pending</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                      <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($pending_users as $p)
                    <tr>
                        <td>{{$p->first_name}} {{$p->last_name}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->role}}</td>
                        <td>
                            @if($p->status) 
                            <span class="badge badge-pill badge-success"> Approved</span>
                            @else
                            <span class="badge bg-danger">Not Approved</span>
                            
                            @endif


                        </td>
                        <td>
                            <a href="{{url('admin/approve-user/'.$p->id)}}" class="badge bg-success"  >Approved</a>
                            
                        </td>
                        
                    </tr>
                    @endforeach
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            

          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>
  </main><!-- End #main -->


  @endsection