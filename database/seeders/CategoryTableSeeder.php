<?php

namespace Database\Seeders;
use App\Models\Category;
use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            [
                'name' => 'Books',
                'title' => 'Buy and Compare Books Online',
                'slug' => 'books',
                'thumbnail' => '01-books.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'icon' => '',
                'parent_id' => null,
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'name' => 'Tutorials',
                'title' => 'Buy Online Tutorials in Urdu',
                'slug' => 'tutorials',
                'thumbnail' => '03-tutorials.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'icon' => '',
                'parent_id' => null,
                'created_at' => $now, 'updated_at' => $now
            ]
        ]);
    }
}
