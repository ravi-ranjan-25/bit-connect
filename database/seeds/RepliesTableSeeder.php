<?php

use Illuminate\Database\Seeder;
use App\reply;
class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reply1 = [
           'discussion_id' => 1,
           'user_id' =>  1,
           'content' => 'Morbi vel sem quis erat elementum semper at egestas mauris. Donec convallis elit et metus posuere ultricies. Vivamus in tortor laoreet, faucibus sapien in, faucibus ipsum. Quisque pharetra turpis in posuere suscipit. Etiam dictum, risus a interdum malesuada, mi mauris eleifend lorem, et sodales metus risus nec ex.'        

        ];
        
        $reply2 = [
            'discussion_id' => 2,
            'user_id' =>  2,
            'content' => 'Morbi vel sem quis erat elementum semper at egestas mauris. Donec convallis elit et metus posuere ultricies. Vivamus in tortor laoreet, faucibus sapien in, faucibus ipsum. Quisque pharetra turpis in posuere suscipit. Etiam dictum, risus a interdum malesuada, mi mauris eleifend lorem, et sodales metus risus nec ex.'        
 
         ];
         
        $reply3 = [
            'discussion_id' => 3,
            'user_id' =>  2,
            'content' => 'Morbi vel sem quis erat elementum semper at egestas mauris. Donec convallis elit et metus posuere ultricies. Vivamus in tortor laoreet, faucibus sapien in, faucibus ipsum. Quisque pharetra turpis in posuere suscipit. Etiam dictum, risus a interdum malesuada, mi mauris eleifend lorem, et sodales metus risus nec ex.'        
 
         ];
         
        $reply4 = [
            'discussion_id' => 3,
            'user_id' =>  1,
            'content' => 'Morbi vel sem quis erat elementum semper at egestas mauris. Donec convallis elit et metus posuere ultricies. Vivamus in tortor laoreet, faucibus sapien in, faucibus ipsum. Quisque pharetra turpis in posuere suscipit. Etiam dictum, risus a interdum malesuada, mi mauris eleifend lorem, et sodales metus risus nec ex.'        
 
         ];

         reply::create($reply1);
         reply::create($reply2);
         reply::create($reply3);
         reply::create($reply4);

        }
}
