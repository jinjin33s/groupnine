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
        Video::create(['name' => 'Cats', 'brand' => 'meow', 'published' => '2001-01-02']);
    }
}
