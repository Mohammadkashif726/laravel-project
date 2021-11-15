<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserIdentity extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['id'=>1, 'full_name'=> 'Mohammad Kashif', 'is_host'=>false],
            ['id'=>2, 'full_name'=> 'Mohammad Owais', 'is_host'=>true],
            ['id'=>3, 'full_name'=> 'Amjad Khan', 'is_host'=>true],
            ['id'=>4, 'full_name'=> 'Mohammad Owais', 'is_host'=>false],
            ['id'=>5, 'full_name'=> 'Mohammad Subhan', 'is_host'=>false],
        );
        DB::table('user_identities')->insert($data);
    }
}
