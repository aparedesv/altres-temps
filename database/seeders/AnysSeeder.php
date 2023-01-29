<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = config('constants.FIRST_YEAR');
        $lastYear = config('constants.LAST_YEAR');

        while ($year < $lastYear)
        {
            DB::table('anys')->insert([

                [
                    'any' => $year
                ],

            ]);

            $year++;
        }
    }
}
