<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([

        	'cat_id' => '1',
        	'p_name' => 'Hp model-9999',
        	'p_slug' =>  'hp-model-9999',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70001',
        	'p_price' => '50000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '60',


        ]);
        Products::create([

        	'cat_id' => '2',
        	'p_name' => 'Hp model-2873',
        	'p_slug' =>  'hp-model-2873',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70002',
        	'p_price' => '60000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '0',


        ]);
        Products::create([

        	'cat_id' => '1',
        	'p_name' => 'DellLaptop',
        	'p_slug' =>  'dell-lapotop',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70003',
        	'p_price' => '55000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '60',


        ]);
        Products::create([

        	'cat_id' => '2',
        	'p_name' => 'Lenovo',
        	'p_slug' =>  'lenevo',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70004',
        	'p_price' => '40000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '100',


        ]);
        Products::create([

        	'cat_id' => '1',
        	'p_name' => 'Sony Vaio',
        	'p_slug' =>  'sonyvaio',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70005',
        	'p_price' => '80000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '60',


        ]);
        Products::create([

        	'cat_id' => '2',
        	'p_name' => 'Toshiba',
        	'p_slug' =>  'toshiba',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70006',
        	'p_price' => '58000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '60',


        ]);
        Products::create([

        	'cat_id' => '1',
        	'p_name' => 'Hp model-99994',
        	'p_slug' =>  'hp-model-99994',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70007',
        	'p_price' => '50000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '60',


        ]);
        Products::create([

        	'cat_id' => '2',
        	'p_name' => 'Hp model-28736',
        	'p_slug' =>  'hp-model-28736',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70008',
        	'p_price' => '60000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '0',


        ]);
        Products::create([

        	'cat_id' => '1',
        	'p_name' => 'Dell model-49348',
        	'p_slug' =>  'dell-model-49348',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70009',
        	'p_price' => '55000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '60',


        ]);
        Products::create([

        	'cat_id' => '2',
        	'p_name' => 'Lenovo model-8347',
        	'p_slug' =>  'lenevo-mdoel-8347',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70010',
        	'p_price' => '40000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '100',


        ]);
        Products::create([

        	'cat_id' => '1',
        	'p_name' => 'Sony Vaio model-9832',
        	'p_slug' =>  'sonyvaio-model-9832',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70011',
        	'p_price' => '80000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '60',


        ]);
        Products::create([

        	'cat_id' => '2',
        	'p_name' => 'Toshiba model-2',
        	'p_slug' =>  'tohiba-model-2',
        	'p_description' => 'Buy the best one',
        	'p_code' => '70012',
        	'p_price' => '58000',
        	'p_delivery_time' => 'In 3 days',
        	'p_delivery_charge' => '60',


        ]);
    }
}
