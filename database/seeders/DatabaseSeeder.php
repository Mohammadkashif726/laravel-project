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
            tbl_institute_type_seeder::class,
            tbl_institute_list_seeder::class,
            tbl_degrees_levels_seeder::class,
            tbl_degree_list_seeder::class,
            ExperienceTypeSeeder::class,
            SubjectCategoriesTableSeeder::class,
            SubjectsTableSeeder::class,
            SubjectSubjectCategoryTableSeeder::class,
            tbl_tutor_fee_types_seeder::class,
            tbl_blog_categories_seeder::class,
            tbl_areas_seeder::class,
            tbl_event_categories_seeder::class,
            TutorialCategories::class,
            TutorialSubCategories::class,
            CategoryTableSeeder::class,
            CouponsTableSeeder::class,
            LanguagesTableSeeder::class,
            OrderStatusTableSeeder::class,
            PaymentTypeTableSeeder::class,
            CurrencySeeder::class,
            EmploymentTypeSeeder::class,
            ContractTypeSeeder::class,
            SeniorityLevelSeeder::class,
            IndustriesTableSeeder::class,
            JobStatusesTableSeeder::class,
            tbl_karachi_school_seeder::class,
            PermissionTableSeeder::class,
        ]);

        // factory(App\Models\User::class, 10)->create();

        // factory(\App\Product::class, 50)->create();
    }
}
