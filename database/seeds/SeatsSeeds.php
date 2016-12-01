<?php

use Illuminate\Database\Seeder;

class SeatsSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 5) AS $row)
        {
            foreach(range(1, 10) AS $seat)
            {
                DB::table('seats')->insert([
                    'sector_id' => '1',
                    'row' => $row,
                    'place' => $seat,
                ]);
            }
        }
    }
}
