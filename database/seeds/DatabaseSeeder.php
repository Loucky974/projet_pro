<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Post;

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
                'role'=>'admin',
               'password'=> bcrypt('123456789'),
            ],
           
        ];
        foreach ($user as $key => $value) {
            User::create($value);

        }

            $post = [
                [
                   'date'=>'2020-05-02',
                   'mode'=>'6',
                    'canal'=>'2',
                   'image'=> 'img1.jpg',
                ],
                [
                    'date'=>'2020-05-03',
                    'mode'=>'6',
                     'canal'=>'2',
                    'image'=> 'img2.jpg',
                 ],
                 [
                    'date'=>'2020-05-04',
                    'mode'=>'3',
                     'canal'=>'2',
                    'image'=> 'img3.jpg',
                 ],
               
            ];
            foreach ($post as $key => $value) {
                Post::create($value);

            }

    }
}