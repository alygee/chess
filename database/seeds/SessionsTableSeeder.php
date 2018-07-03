<?php

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            'session' => '3c7e5450-7e97-11e8-adc0-fa7ae01bbebc',
            'position' => 'r1bqkbnr/pppp1ppp/2n5/1B2p3/4P3/5N2/PPPP1PPP/RNBQK2R'
        ]);

        DB::table('sessions')->insert([
            'session' => 'e2d1b4e8-904b-465c-babf-16ac5b4e749c',
            'position' => 'r1k4r/p2nb1p1/2b4p/1p1n1p2/2PP4/3Q1NB1/1P3PPP/R5K1'
        ]);
    }
}
