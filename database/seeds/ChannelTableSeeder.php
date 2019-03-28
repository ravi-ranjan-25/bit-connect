<?php

use Illuminate\Database\Seeder;
use App\channel;
class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = [ 'title' => 'Computer Organisation', 'year' => 2];
        $channel2 = [ 'title' => 'Mathematics - III' , 'year' => 2];
        $channel3 = [ 'title' => 'Automata' , 'year' => 2];
        $channel4 = [ 'title' => 'Numerical anlaysis' , 'year' => 2];
        $channel5 = [ 'title' => 'Communication engg' , 'year' => 2];
        
        


        channel::create($channel1);
        channel::create($channel2);
        channel::create($channel3);
        channel::create($channel4);
        channel::create($channel5);

    }
}
