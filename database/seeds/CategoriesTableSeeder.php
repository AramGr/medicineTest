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

            [
                'title' => 'Antipyretics'
            ],
            [
                'title' => 'Analgesics'
            ],
            [
                'title' => 'Antimalarial'
            ],
            [
                'title' => 'Antibiotics'
            ],
            [
                'title' => 'Antiseptics'
            ],

        ]);
    }
}
