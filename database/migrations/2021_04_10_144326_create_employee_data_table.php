<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_data', function (Blueprint $table) {
            $table->increments("employee_id");
            $table->integer("employee_fingerprint_id");
            $table->integer("employee_region_id");
            $table->string("employee_name", 25)->nullable();
            $table->integer("employee_number")->nullable();
            $table->string("employee_email", 50)->nullable();
            $table->string("employee_phone_number", 20)->nullable();
            $table->integer("employee_created_by");
            $table->integer("employee_updated_by")->nullable();
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
        Schema::dropIfExists('employee_data');
    }
}
