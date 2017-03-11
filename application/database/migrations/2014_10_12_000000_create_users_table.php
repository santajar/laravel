<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taawun_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
      			$table->string('email', 150)->unique();
      			$table->string('password', 60);
      			$table->integer('role_id')->unsigned();
      			$table->integer('seen')->unsigned();
      			$table->boolean('valid')->default(false);
      			$table->boolean('confirmed')->default(false);
      			$table->string('confirmation_code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
