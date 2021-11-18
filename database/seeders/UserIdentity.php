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
            ['id'=>6, 'full_name'=> 'Mohammad Arham', 'is_host'=>true],
            ['id'=>7, 'full_name'=> 'Umar Khan', 'is_host'=>false],
            ['id'=>8, 'full_name'=> 'ikram ul haq', 'is_host'=>false],
            ['id'=>9, 'full_name'=> 'ibrahim jamshed', 'is_host'=>false],
            ['id'=>10, 'full_name'=> 'Abdul khaliq', 'is_host'=>false],
            ['id'=>11, 'full_name'=> 'zain khalid', 'is_host'=>false],
            ['id'=>12, 'full_name'=> 'Mohammad Shahood', 'is_host'=>false],
            ['id'=>13, 'full_name'=> 'Zaeem Siddiqui', 'is_host'=>false],
            ['id'=>14, 'full_name'=> 'Moiz uddin', 'is_host'=>false],
            ['id'=>15, 'full_name'=> 'Abdur Raheem', 'is_host'=>false],
            ['id'=>16, 'full_name'=> 'Hamza', 'is_host'=>false],
            ['id'=>17, 'full_name'=> 'Maaz', 'is_host'=>false],
            ['id'=>18, 'full_name'=> 'Sohaib', 'is_host'=>false],
            ['id'=>19, 'full_name'=> 'Muneerullah', 'is_host'=>false],
            ['id'=>20, 'full_name'=> 'Manzoor', 'is_host'=>true],
            ['id'=>21, 'full_name'=> 'Mohammad Nadeem', 'is_host'=>true],
            ['id'=>22, 'full_name'=> 'Mohammad Rizwan', 'is_host'=>false],
            ['id'=>23, 'full_name'=> 'Imad Wasim', 'is_host'=>false],
            ['id'=>24, 'full_name'=> 'Shaheen Afridi', 'is_host'=>false],
            ['id'=>25, 'full_name'=> 'Shahid Khan', 'is_host'=>false],
            ['id'=>26, 'full_name'=> 'Hassan', 'is_host'=>false],
            ['id'=>27, 'full_name'=> 'Babar Azam', 'is_host'=>false],
            ['id'=>28, 'full_name'=> 'Inzamam', 'is_host'=>false],
            ['id'=>29, 'full_name'=> 'Ahad', 'is_host'=>false],
            ['id'=>30, 'full_name'=> 'Jahanzaib', 'is_host'=>false],
            ['id'=>31, 'full_name'=> 'umer', 'is_host'=>true],
            ['id'=>32, 'full_name'=> 'Asif', 'is_host'=>false],
            ['id'=>33, 'full_name'=> 'Adnan', 'is_host'=>false],
            ['id'=>34, 'full_name'=> 'Zubair', 'is_host'=>true],
            ['id'=>35, 'full_name'=> 'Zahid', 'is_host'=>false],
            ['id'=>36, 'full_name'=> 'Idrees', 'is_host'=>false],
            ['id'=>37, 'full_name'=> 'Kumail', 'is_host'=>false],
            ['id'=>38, 'full_name'=> 'Ahmed', 'is_host'=>false],
            ['id'=>39, 'full_name'=> 'Jaffer', 'is_host'=>true],
            ['id'=>40, 'full_name'=> 'Wajid', 'is_host'=>true],
        );
        DB::table('user_identities')->insert($data);
    }
}
