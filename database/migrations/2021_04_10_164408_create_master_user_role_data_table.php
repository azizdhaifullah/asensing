<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterUserRoleDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_user_role_data', function (Blueprint $table) {
            $table->increments("mrur_id");
            $table->string("mrur_name")->nullable();
            $table->enum("mrur_status",["Y","N"])->nullable();
            $table->string("mrur_data",)->nullable();
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
        Schema::dropIfExists('master_user_role_data');
    }
}
