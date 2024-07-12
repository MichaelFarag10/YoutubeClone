<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'title' => 'AnyThing',
            'thumbnail' => '/videos/Thumbnails/screen.png',
            'video' => '/videos/video.mp4',
            'user' => 'Michael Farag',
            'views' => '34K views -12 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ]);
        DB::table('videos')->insert([
            'title' => 'AnyThing',
            'thumbnail' => '/videos/Thumbnails/screen.png',
            'video' => '/videos/video.mp4',
            'user' => 'Ayaa',
            'views' => '3K views -1 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ]);
        DB::table('videos')->insert([
            'title' => 'AnyThing',
            'thumbnail' => '/videos/Thumbnails/screen.png',
            'video' => '/videos/video.mp4',
            'user' => 'Mina',
            'views' => '5K views -5 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ]);
    }
}
