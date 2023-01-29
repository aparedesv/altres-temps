<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'andreu paredes',
                'email' => 'info@osonaweb.cat',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin2023')
            ],

        ]);
    }
}
