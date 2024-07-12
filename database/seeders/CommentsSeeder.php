<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user' => 'Michael Farag',
            'time' => '2 months ago',
            'text' => 'what a bad video',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('comments')->insert([
            'user' => 'Maro',
            'time' => '3 months ago',
            'text' => 'what is that',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('comments')->insert([
            'user' => 'Nourah',
            'time' => '2 months ago',
            'text' => 'Love this video',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('comments')->insert([
            'user' => 'Mariam',
            'time' => '2 months ago',
            'text' => 'You are not here',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
