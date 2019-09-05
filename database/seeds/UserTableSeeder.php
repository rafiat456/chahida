<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'u_email' =>  'mdrakibul439@gmail.com',
            'u_name' =>  'Md.rakibul Hasan',
            'u_city' => 'Dhaka',
            'u_address' => 'khilgaon,Dhaka',
            'u_mobile' => '01675706439',
            'user_verification' => 'yes',
            'password' => '$2y$10$.XB30GO4jn7bx7EauLrWkugIaCNGxiQCgrFTeFDeSSrGdQYd6Rneq'
        ]);
    }
}
