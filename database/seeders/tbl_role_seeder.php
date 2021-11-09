<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tbl_role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data_arr=array(
            ['id'=>1,'role'=>'Student'],
            ['id'=>2,'role'=>'Teacher'],
            ['id'=>3,'role'=>'Institute'],
            ['id'=>4,'role'=>'Super admin'],
            ['id'=>5,'role'=>'Principal'],
            ['id'=>6,'role'=>'Vice Principle'],
            ['id'=>7,'role'=>'Administration Staff'],
            ['id'=>8,'role'=>'Operation Manager'],
            ['id'=>9,'role'=>'Volunteer']
        );
        DB::table('roles')->insert($data_arr);
    }
}
