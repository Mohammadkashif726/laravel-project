<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call([
            tbl_role_seeder::class,
            tbl_country_seeder::class,
            tbl_state_seeder::class,
            tbl_city_seeder::class,
            tbl_blog_categories_seeder::class,
            tbl_areas_seeder::class,
            CategoryTableSeeder::class,
            CurrencySeeder::class,
            ExperienceSeeder::class,
            CitySeeder::class,
            TourSeeder::class,
            TourHostSeeder::class,
            UserIdentity::class,
            CountriesSeeder::class,
            CityExperience::class,
        ]);

        // factory(App\Models\User::class, 10)->create();

        // factory(\App\Product::class, 50)->create();
    }
}
