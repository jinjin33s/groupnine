<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/seed', function(){
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
});

Route::get('/', function(){
    return DB::table('videos')->get();
});
