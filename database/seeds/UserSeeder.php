<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            ['email'    => 'ali@mail.com'],
            [
                'name'   => 'ali',
                'role_id'   => '1',
                'password'   =>  Hash::make('abc123'),
            
            ]
        );
    }

}
