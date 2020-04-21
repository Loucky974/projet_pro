<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        


        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@ird.com',
                'role'=>'user',
               'password'=> bcrypt('123456789'),
            ],
           
        ];
        foreach ($user as $key => $value) {
            User::create($value);
    }

    }
}
