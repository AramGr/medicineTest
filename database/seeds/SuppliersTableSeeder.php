<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([

            [
                'name' => 'Pharm 1'
            ],
            [
                'name' => 'Pharm 2'
            ],
            [
                'name' => 'Pharm 3'
            ],
            [
                'name' => 'Pharm 4'
            ],
            [
                'name' => 'Pharm 5'
            ],

        ]);
    }
}
