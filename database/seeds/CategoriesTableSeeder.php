<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'mental_treatment',
            'category_name' => 'physical_treatment',
            'category_name' => 'work',
            'category_name' => 'aid',
            'category_name' => 'other',
        ]);
    }
}
