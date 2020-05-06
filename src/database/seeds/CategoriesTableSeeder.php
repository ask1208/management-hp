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
            ['category_name' => 'ニット'],
            ['category_name' => 'ブラウス'],
            ['category_name' => 'ボトムス'],
        ]);
    }
}
