<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_data', function (Blueprint $table) {
            $table->increments("user_id");
            $table->integer("user_role_id");
            $table->integer("user_region_id");
            $table->string("user_username", 20);
            $table->string("user_password");
            $table->enum("user_status",["Y","N"]);
            $table->integer("user_created_by");
            $table->integer("user_updated_by");
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
        Schema::dropIfExists('users_data');
    }
}
