<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_arr=array(
            ['id'=>1, 'title'=>'Food Tour'],
            ['id'=>2, 'title'=>'City Hightlight Tour'],
            ['id'=>3, 'title'=>'Wine and Beer Tour'],
            ['id'=>4, 'title'=>'Day Trip'],
            ['id'=>5, 'title'=>'Off the beaten Track Tour'],
            ['id'=>6, 'title'=>'Shopping Tour'],
            ['id'=>7, 'title'=>'Multi day Trip'],
        );

        DB::table('experiences')->insert($data_arr);
    }
}
