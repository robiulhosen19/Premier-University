<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string("frist_name");
            $table->string("last_name");
            $table->string("email");
            $table->string("tel");

            $table->string("father_name");
            $table->string("father_tel");
            $table->string("mother_name");
            $table->string("mother_tel");

            $table->string("per_addr");
            $table->string("pre_addr");

            $table->date("dath_of_birth");
            $table->string("nationality");
            $table->string("religion");
            $table->string("blood_group");

            $table->string("gender");
            $table->string("marital_stutas");

            $table->string("ssc_eqivalent");
            $table->string("ssc_group");
            $table->string("ssc_institution");

            $table->string("hsc_eqivalent");
            $table->string("hsc_group");
            $table->string("hsc_institution");
            

            $table->string("local_guardian");
            $table->string("local_guardian_tel");
            $table->string("local_guardian_email");
            $table->string("local_guardian_addr");
            $table->string("local_guardian_relisionship");

            $table->string("payment");
            $table->string("transction_id");

            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
