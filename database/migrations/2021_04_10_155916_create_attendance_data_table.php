<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_data', function (Blueprint $table) {
            $table->increments("attendace_id");
            $table->integer("attendance_employee_id");
            $table->time("attendance_clock_in")->nullable();
            $table->time("attendance_clock_out")->nullable();
            $table->date("attendance_date")->nullable();
            $table->string("attendance_uniform_image_path")->nullable();
            $table->string("attendance_face_image_path")->nullable();
            $table->enum("attendance_status", ["approved","rejected","default"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_data');
    }
}
