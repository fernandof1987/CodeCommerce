<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/05/15
 * Time: 22:41
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('users')->truncate();

        User::create([
            'name' => 'Fernando',
            'email' => 'fernandof1987@gmail.com',
            'password' => Hash::make('123456')
        ]);

        $faker = Faker::create();

        foreach(range(1,20) as $i){

            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->word())
            ]);

        }



    }
}