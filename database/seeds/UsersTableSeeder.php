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
        $user = App\User::create([

            'name' => 'Ninja Chaw',
            'email' => 'boy@coding.com',
            'password' => bcrypt('asdasdasd'),
            'admin' => 1
        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/users/1.jpg',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eveniet laboriosam laborum minus odit quidem, voluptate! Consequuntur, cum earum, incidunt ipsam iure mollitia nisi repellendus tenetur vitae voluptatem voluptatibus voluptatum?',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
