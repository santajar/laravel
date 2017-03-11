<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('taawun_roles')->insert(array(
          array('title'=>'Admin','slug'=>'admin'),
          array('title'=>'Staff','slug'=>'staff'),
          array('title'=>'Guest','slug'=>'guest'),
        ));
    }
}
