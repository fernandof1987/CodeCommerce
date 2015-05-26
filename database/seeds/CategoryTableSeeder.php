<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/05/15
 * Time: 22:41
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;

class CategoryTableSeed extends Seeder
{
    public function run()
    {

        DB::table('categories')->truncate();

        Catrgory::create([
            'name' => 'Category 1',
            'description' => 'Description category 1'
        ]);

    }
}