<?php

use Illuminate\Database\Seeder;
// use app\Video;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('videos')->truncate();
    DB::table('views')->truncate();
    DB::table('videos')->insert([
            ['name' => 'Cats Gone Wild', 'brand' => 'Meow', 'Published' => '2001-01-02'],
            ['name' => 'Superman', 'brand' => 'Time Warner', 'Published' => '2002-01-02']
        ]);
    DB::table('views')->insert([
            ['video_id' => 1, 'viewed_on' => '02-02-2014'],
            ['video_id' => 1, 'viewed_on' => '02-02-2015'],
            ['video_id' => 2, 'viewed_on' => '02-03-2015']
        ]);
    }
}
