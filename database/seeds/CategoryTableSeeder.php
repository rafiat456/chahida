<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Category::create([
    		'id' => 1,
    		'parent_id' => '0',
    		'cat_name' => 'Electronic',
    		'cat_status' => '1'
    	]);
    	Category::create([
    		'id' => 2,
    		'parent_id' => '0',
    		'cat_name' => 'Food',
    		'cat_status' => '1'
    	]);
    	Category::create([
    		'id' => 3,
    		'parent_id' => '0',
    		'cat_name' => 'Vegetables',
    		'cat_status' => '1'
    	]);
    	Category::create([
    		'parent_id' => '1',
    		'cat_name' => 'TV',
    		'cat_status' => '1'
    	]);
    	
    	Category::create([
    		'parent_id' => '1',
    		'cat_name' => 'Car',
    		'cat_status' => '1'
    	]);
    	Category::create([
    		'parent_id' => '2',
    		'cat_name' => 'Burger',
    		'cat_status' => '1'
    	]);
    	Category::create([
    		'parent_id' => '2',
    		'cat_name' => 'Pizza',
    		'cat_status' => '1'
    	]);
    	Category::create([
    		'parent_id' => '3',
    		'cat_name' => 'Alu',
    		'cat_status' => '1'
    	]);
    	Category::create([
    		'parent_id' => '3',
    		'cat_name' => 'Potol',
    		'cat_status' => '1'
    	]);
        //
    }
}
