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
            ['video_id' => 1, 'viewed_on' => '2015-02-02'],
            ['video_id' => 1, 'viewed_on' => '2012-02-02'],
            ['video_id' => 1, 'viewed_on' => '2011-02-02'],
            ['video_id' => 1, 'viewed_on' => '2010-02-02'],
            ['video_id' => 1, 'viewed_on' => '2009-02-02'],
            ['video_id' => 2, 'viewed_on' => '2001-02-02'],
            ['video_id' => 2, 'viewed_on' => '2012-02-02'],
            ['video_id' => 2, 'viewed_on' => '2014-02-02']
        ]);
    }
}
