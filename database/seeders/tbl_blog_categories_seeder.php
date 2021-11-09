<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tbl_blog_categories_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_arr=array(
            [   'id' => 1,
                'title' => 'Academic',
                'slug' => 'academic',
                'description' => 'This is sample description This is sample description This is sample description This is sample description',
                'featured_image' => 'https://www.tpsworldwide.com/wp-content/uploads/2018/10/IRIS-5-Benchmark-with-IBM-Power-8-TPS-Worldwide-002.png'
            ],
            [   'id' => 2,
                'title' => 'Arts Craft & Music',
                'slug' => 'arts-craft-music',
                'description' => 'This is sample description This is sample description This is sample description This is sample description',
                'featured_image' => 'https://www.tpsworldwide.com/wp-content/uploads/2018/10/IRIS-5-Benchmark-with-IBM-Power-8-TPS-Worldwide-002.png'
            ],
            [   'id' => 3,
                'title' => 'Health, Fitness & Sports',
                'slug' => 'health-fitness-sports',
                'description' => 'This is sample description This is sample description This is sample description This is sample description',
                'featured_image' => 'https://www.tpsworldwide.com/wp-content/uploads/2018/10/IRIS-5-Benchmark-with-IBM-Power-8-TPS-Worldwide-002.png'
            ],
            [   'id' => 4,
                'title' => 'Life Style',
                'slug' => 'life-style',
                'description' => 'This is sample description This is sample description This is sample description This is sample description',
                'featured_image' => 'https://www.tpsworldwide.com/wp-content/uploads/2018/10/IRIS-5-Benchmark-with-IBM-Power-8-TPS-Worldwide-002.png'
            ],
            [   'id' => 5,
                'title' => 'Languages',
                'slug' => 'languages',
                'description' => 'This is sample description This is sample description This is sample description This is sample description',
                'featured_image' => 'https://www.tpsworldwide.com/wp-content/uploads/2018/10/IRIS-5-Benchmark-with-IBM-Power-8-TPS-Worldwide-002.png'
            ],
            [   'id' => 6,
                'title' => 'Islamic Education',
                'slug' => 'islamic-education',
                'description' => 'This is sample description This is sample description This is sample description This is sample description',
                'featured_image' => 'https://www.tpsworldwide.com/wp-content/uploads/2018/10/IRIS-5-Benchmark-with-IBM-Power-8-TPS-Worldwide-002.png'
            ],
            [   'id' => 7,
                'title' => 'Professional',
                'slug' => 'professional',
                'description' => 'This is sample description This is sample description This is sample description This is sample description',
                'featured_image' => 'https://www.tpsworldwide.com/wp-content/uploads/2018/10/IRIS-5-Benchmark-with-IBM-Power-8-TPS-Worldwide-002.png'
            ],
            [   'id' => 8,
                'title' => 'Information Technology',
                'slug' => 'information-technology',
                'description' => 'This is sample description This is sample description This is sample description This is sample description',
                'featured_image' => 'https://www.tpsworldwide.com/wp-content/uploads/2018/10/IRIS-5-Benchmark-with-IBM-Power-8-TPS-Worldwide-002.png'
            ]
        );
        DB::table('blog_categories')->insert($data_arr);
    }
}
