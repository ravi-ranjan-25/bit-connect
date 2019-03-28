<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Ravi Ranjan',
            'username' => 'raviranjan',
            'email'=> 'admin@hackiton.test',
            'admin'=> 1,
            'password'=>bcrypt('maverick'),
            'avatar' => asset('avatar/avatar.jpg'),
            'stream' => 'CSE',
            'year' => 2,
            'studentid' => 1712101017,
        ]);

        App\User::create([
            'name' => 'Labham',
            'username' => 'labham',
            'email'=> 'labham@hackiton.test',
            'admin'=> 0,
            'password'=>bcrypt('maverick'),
            'avatar' => asset('avatar/avatar.jpg'),
            'stream' => 'CSE',
                        'year' => 2,
            'studentid' => 1712101042    
        ]);

        
    }
}
