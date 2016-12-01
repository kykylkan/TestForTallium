<?php

use Illuminate\Database\Seeder;

class SectorsSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->insert([
            'name' => 'A1',
        ]);
        DB::table('sectors')->insert([
            'name' => 'B1',
        ]);
        DB::table('sectors')->insert([
            'name' => 'C1',
        ]);
        DB::table('sectors')->insert([
            'name' => 'D1',
        ]);
        DB::table('sectors')->insert([
            'name' => 'E1',
        ]);
        DB::table('sectors')->insert([
            'name' => 'Фан-зона',
        ]);
    }
}
