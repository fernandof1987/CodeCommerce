<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/05/15
 * Time: 22:41
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('products')->truncate();

        $faker = Faker::create();

        foreach(range(1,50) as $i){

            Product::create([
                'name' => $faker->word(),
                'description' => $faker->name(),
                'price' => $faker->word(),
                'featured' => $faker->sentence(),
                'recommended' => $faker->word(),
            ]);

        }



    }
}