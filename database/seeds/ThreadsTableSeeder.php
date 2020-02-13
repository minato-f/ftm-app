<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'test',
            'body' => 'test',
        ]);
    }
}
