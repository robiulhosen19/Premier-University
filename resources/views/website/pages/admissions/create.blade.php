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

        <form id="add_mission" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Select Department</label>
                    <select name="department" id="department" class="form-control form-control-lg">
                        <option value="">--Select Department--</option>
                        @foreach( $depart as $d )
                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-6 form-group">
                    <label for="">Select Program</label>
                    <select name="program" id="program" class="form-control form-control-lg">
                        <option value="">--Select Program--</option>

                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">First Name</label>
                    <input type="text" id="first_name" class="form-control form-control-lg" name="first_name">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="last_name" class="form-control form-control-lg" name="last_name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email Address</label>
                    <input type="email" id="email" class="form-control form-control-lg" name="email">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Tel. Number</label>
                    <input type="text" id="tel" class="form-control form-control-lg" name="tel">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Father's Name</label>
                    <input type="text" id="fathersname" class="form-control form-control-lg" name="fathersname">

                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Father's Mobile</label>
                    <input type="text" id="f_mobile" class="form-control form-control-lg" name="f_mobile">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Mother's Name</label>
                    <input type="text" id="mothersname" class="form-control form-control-lg" name="mothersname">

                </div>
                <div class="col-md-6 form-group">
                    <label for="">Mother's mobile</label>
                    <input type="text" id="m_mobile" class="form-control form-control-lg" name="m_mobile">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Permanet Address</label>
                    <input type="text" id="permanet" class="form-control form-control-lg" name="permanet">

                </div>
                <div class="col-md-6 form-group">
                    <label for="">Present Address</label>
                    <input type="text" id="present" class="form-control form-control-lg" name="present">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="fname">Date Of Birth</label>
                    <input type="date" id="dob" class="form-control form-control-lg" name="dob">

                </div>
                <div class="col-md-3 form-group">
                    <label for="">Nationality</label>
                    <input type="text" id="nationality" class="form-control form-control-lg" name="nationality">
                </div>
                <div class="col-md-3 form-group">
                    <label for="fname">Religion</label>
                    <input type="text" id="religion" class="form-control form-control-lg" name="religion">

                </div>
                <div class="col-md-3 form-group">
                    <label for="">Blood Group</label>
                    <select name="blood_group" id="blood_group" class="form-control form-control-lg">

                        <option value="">Select Blood Group</option>
                        <option value="A+(ve)">A+(ve)</option>
                        <option value="B+(ve)">B+(ve)</option>
                        <option value="O+(ve)">O+(ve)</option>
                        <option value="A-(ve)">A-(ve)</option>
                        <option value="A-(ve)">A-(ve)</option>
                        <option value="O-(ve)">O-(ve)</option>
                        <option value="AB+(ve)">AB+(ve)</option>
                        <option value="AB-(ve)">AB-(ve)</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Gender</label>
                 <select name="gender" id="gender" class="form-control form-control-lg">
                    <option value="">Select Gender</option>   
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                 </select>

                </div>
                <div class="col-md-6 form-group">
                <label for="">Marital Stutas</label>
                <select name="mar_stu" id="mar_stu" class="form-control form-control-lg">
                    
                    <option value="">Select Marital Sturas</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                </select>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="">SSC/Eqivalent</label>
                    <input type="text" id="ssc_eqi" class="form-control form-control-lg" name="ssc_eqi">

                </div>
                <div class="col-md-4 form-group">
                    <label for="">Group</label>
                    <input type="text" id="ssc_group" class="form-control form-control-lg" name="ssc_group">
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Institution</label>
                    <input type="text" id="ssc_institution" class="form-control form-control-lg" name="ssc_institution">

                </div>


            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="">HSC/Eqivalent</label>
                    <input type="text" id="hsc_eqi" class="form-control form-control-lg" name="hsc_eqi">

                </div>
                <div class="col-md-4 form-group">
                    <label for="">Group</label>
                    <input type="text" id="hsc_group" class="form-control form-control-lg" name="hsc_group">
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Institution</label>
                    <input type="text" id="hsc_institution" class="form-control form-control-lg" name="hsc_institution">

                </div>
            </div>

            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="">Local Guardian</label>
                    <input type="text" id="lguardian" class="form-control form-control-lg" name="lguardian">

                </div>
                <div class="col-md-3 form-group">
                    <label for="">Mobile Number</label>
                    <input type="text" id="g_mobile" class="form-control form-control-lg" name="g_mobile">
                </div>
                <div class="col-md-3 form-group">
                    <label for="">Email</label>
                    <input type="email" id="g_email" class="form-control form-control-lg" name="g_email">

                </div>
                <div class="col-md-3 form-group">
                    <label for="">Address</label>
                    <input type="text" id="g_address" class="form-control form-control-lg" name="g_address">
                </div>

                <div class="col-md-12 form-group">
                    <label for="">Relisionship With Local Guardian</label>
                    <input type="text" id="g_relis" class="form-control form-control-lg" name="g_relis">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Payment Method</label>
                    <select name="payment" id="payment" class="form-control form-control-lg">

                        <option value="">--Select Payment Method--</option>
                        <option value="Bkash">Bkash</option>
                        <option value="Roket">Roket</option>
                    </select>

                </div>
                <div class="col-md-6 form-group">
                    <label for="">Transaction Id</label>
                    <input type="text" id="transaction" class="form-control form-control-lg" name="transaction">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#department").change(function() {
            var departmentID = $(this).val();
            console.log(departmentID);
            $("#program").empty();
            var str = '<option value="">--Select Program--</option>';
            $.ajax({
                url: 'http://127.0.0.1:8000/api/programs/' + departmentID,
                dataType: "json",
                type: 'GET',
                success: function(res) {
                    var programs = res.programs;
                    var len = programs.length;
                    for (var i = 0; i < len; i++) {
                        str += '<option value=" ' +programs[i].id + ' ">' +programs[i].name+ '</option>';
                       
                    }
                    $("#program").append(str);
                }

            });
        })
        $("#add_mission").submit(function(e) {
            e.preventDefault();
            //alert($("#first_name").val());
            var  department  =$("#department").val();
            var  program =$("#program").val();
            var  first_name  =$("#first_name").val();
            var  last_name =$("#last_name").val();
            var  email =$("#last_name").val();
            var  tel =$("#tel").val();
            var  fathersname =$("#fathersname").val();
            var  f_mobile =$("#f_mobile").val();
            var  mothersname =$("#mothersname").val();
            var  m_mobile =$("#m_mobile").val();
            var  permanet =$("#permanet").val();
            var  present =$("#present").val();
            var  dob =$("#dob").val();
            var  nationality =$("#nationality").val();
            var  religion =$("#religion").val();
            var  blood_group =$("#blood_group").val();
            var  gender =$("#gender").val();
            var  mar_stu =$("#mar_stu").val();
            var  ssc_eqi =$("#ssc_eqi").val();
            var  ssc_group =$("#ssc_group").val();
            var  ssc_institution =$("#ssc_institution").val();
            var  hsc_eqi =$("#hsc_eqi").val();
            var  hsc_group =$("#hsc_group").val();
            var  hsc_institution =$("#hsc_institution").val();
            var  lguardian =$("#lguardian").val();
            var  g_mobile =$("#g_mobile").val();
            var  g_email =$("#g_email").val();
            var  g_address =$("#g_address").val();
            var  g_relis =$("#g_relis").val();
            var  payment =$("#payment").val();
            var  transaction =$("#transaction").val();

            $.ajax({
                url: 'http://127.0.0.1:8000/api/admission',
                datatype: "json",
                type: 'post',
                data: {
                    department :  department  ,
                    program :   program,
                    first_name :  first_name  ,
                    last_name :   last_name ,
                    email :   email ,
                    tel :   tel ,
                    fathersname :   fathersname ,
                    f_mobile :   f_mobile ,
                    mothersname :    mothersname,
                    m_mobile :   m_mobile ,
                    permanet :   permanet ,
                    present :  present ,
                    dob :  dob  ,
                    nationality : nationality   ,
                    religion :   religion ,
                    blood_group : blood_group   ,
                    gender :  gender  ,
                    mar_stu :   mar_stu ,
                    ssc_eqi :   ssc_eqi ,
                    ssc_group :   ssc_group ,
                    ssc_institution :   ssc_institution ,
                    hsc_eqi :  hsc_eqi  ,
                    hsc_group :   hsc_group ,
                    hsc_institution :    hsc_institution,
                    lguardian :   lguardian ,
                    g_mobile :    g_mobile,
                    g_email :   g_email ,
                    g_address :  g_address  ,
                    g_relis : g_relis   ,
                    payment :  payment  ,
                    transaction :   transaction 
                },
                success: function(res) {
                    console.log(res);
                    $('#add_mission')[0].reset();
                }
            })
        });
    })
</script>
@endsection