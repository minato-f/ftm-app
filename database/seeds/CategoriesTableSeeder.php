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
        $names = ['メンタルクリニック', 'ホルモン治療・手術', '仕事・就活', '妊活', 'その他'];
      
        foreach ($names as $name) {
          DB::table('categories')->insert(['name' => $name]);
        }
    }
}
