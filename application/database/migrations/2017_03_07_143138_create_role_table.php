<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taawun_roles', function(Blueprint $table)
    		{
    			$table->increments('id');
    			$table->string('title', 50);
    			$table->string('slug', 15);
    			$table->timestamps();
    		});

    		Schema::table('taawun_users', function(Blueprint $table) {
    			$table->foreign('role_id')->references('id')->on('taawun_roles')->onDelete('restrict')->onUpdate('restrict');
    		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
