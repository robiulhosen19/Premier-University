<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Moddels\Program;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function create(){
        $depart = Department::all();
       

        return view('website.pages.admissions.create', compact('depart'));
    }
    public function getstore(request $req){
        $obj = new Admission();
        
        $obj->  department_id= $req->department;
        $obj-> program_id = $req->program;
        $obj->  frist_name= $req->first_name;
        $obj-> last_name = $req->last_name;
        $obj-> email = $req->email;
        $obj-> tel = $req->tel;
        $obj->  father_name= $req->fathersname;
        $obj-> father_tel = $req->f_mobile;
        $obj->  mother_name= $req->mothersname;
        $obj-> mother_tel = $req->m_mobile;
        $obj-> per_addr = $req->permanet;
        $obj-> pre_addr = $req->present;
        $obj-> dath_of_birth = $req->dob;
        $obj-> nationality = $req->nationality;
        $obj-> religion = $req->religion;
        $obj-> blood_group = $req->blood_group;
        $obj-> gender = $req->gender;
        $obj-> marital_stutas = $req->mar_stu;
        $obj->  ssc_eqivalent= $req->ssc_eqi;
        $obj-> ssc_group = $req->ssc_group;
        $obj-> ssc_institution = $req->ssc_institution;
        $obj-> hsc_eqivalent = $req->hsc_eqi;
        $obj->  hsc_group= $req->hsc_group;
        $obj-> hsc_institution = $req->hsc_institution;
        $obj-> local_guardian = $req->lguardian;
        $obj-> local_guardian_tel = $req->g_mobile;
        $obj-> local_guardian_email = $req-> g_email;
        $obj-> local_guardian_addr = $req->g_address;
        $obj-> local_guardian_relisionship = $req->g_relis;
        $obj-> payment = $req->payment;
        $obj-> transction_id = $req->transaction;

        if($obj->save()){
            
            return response()->json([
                'admission' => $obj
            ]);


        }
    }
   
}
