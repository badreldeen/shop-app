<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //categories
        \App\Models\Category::insert([
            [
                #id=1
                'name' => 'Products',
                'slug' => 'products',
                'description' => 'This Prducts Catergoey Discriotion',
                'image' => 'products.png',
                'parent_id' => 0
            ],
            [
                #id=2
                'name' => 'CPU',
                'slug' => 'cpu',
                'description' => 'This CPU Catergoey Discriotion',
                'image' => 'processor',
                'parent_id' => 0
            ],
        ]); 
        \App\Models\Category::insert([   
              //Sub Categories
                //--> Products
                [
                    #id=3
                    'name' => 'mobile phone',
                    'slug' => 'mobile-phone',
                    'description' => 'This Mobile Phone Catergoey Discriotion',
                    'image' => 'mobile.png',
                    'parent_id' => 1,
                ],
                [
                    #id=4
                    'name' => 'Laptops',
                    'slug' => 'laptops',
                    'description' => 'This Laptop Catergoey Discriotion',
                    'image' => 'laptop.png',
                    'parent_id' => 1,
                ],
                [
                    #id=5
                    'name' => 'Headphones',
                    'slug' => 'headphones',
                    'description' => 'This headphones Catergoey Discriotion',
                    'image' => 'headphones.png',
                    'parent_id' => 1,
                ],
            
                //--> CPU
                [
                    #id=6
                    'name' => 'Intel',
                    'slug' => 'intel',
                    'description' => 'This Intel Catergoey Discriotion',
                    'image' => 'cpu.png',
                    'parent_id' => 2,
                ],
                [
                    #id=7
                    'name' => 'AMD',
                    'slug' => 'amd',
                    'description' => 'This AMD Catergoey Discriotion',
                    'image' => 'cpu.png',
                    'parent_id' => 2,
                ],
                [
                    #id=8
                    'name' => 'Snapdragon',
                    'slug' => 'snapdragon',
                    'description' => 'This snapdragon Catergoey Discriotion',
                    'image' => 'cpu.png',
                    'parent_id' => 2,
                ],
                [
                    #id=9
                    'name' => 'Exynos',
                    'slug' => 'exynos',
                    'description' => 'This exynos Catergoey Discriotion',
                    'image' => 'cpu.png',
                    'parent_id' => 2,
                ],

            
        ]);

        //companies

        \App\Models\Company::insert([ 
           
            [ 
                #id=1
                'name' =>'Apple',
                'image'=>'apple.svg',
                'description'=>'This Apple compnay'
            ],
            [ 
                #id=2
                'name' =>'Dell',
                'image'=>'dell.svg',
                'description'=>'This Dell compnay'
            ],
            [ 
                #id=3
                'name' =>'Asus',
                'image'=>'asus.svg',
                'description'=>'This Asus compnay'
            ],
            [ 
                #id=4
                'name' =>'Samsung',
                'image'=>'samsung.svg',
                'description'=>'This Samsung compnay'
            ]
        ]);

        //products

        \App\Models\Product::insert([ 
            
            //apple products
            [ 
                #id=1
                'product_name' =>'Apple Iphone',
                'slug' =>'apple-iphone',
                'description'=>'Apple Iphone Product',
                'category_id' =>'3',
                'company_id' =>'1',
                'price'=>3000.9,
                'image'=>'iphone.png',
            ],
            [ 
                #id=2
                'product_name' =>'Apple Macbook pro',
                'slug' =>'apple-macbook-pro',
                'description'=>'Apple Macbook pro Product',
                'category_id' =>'4',
                'company_id' =>'1',
                'price'=>7000,
                'image'=>'AppleMacbookpro.jpeg',
            ],
            [ 
                #id=3
                'product_name' =>'Apple Airbods',
                'slug' =>'apple-airbods',
                'description'=>'Apple Airbods Product',
                'category_id' =>'5',
                'company_id' =>'1',
                'price'=>99.99,
                'image'=>'appleAirbods.jpeg',
            ],
            //samsung products
            [ 
                #id=4
                'product_name' =>'Samsung Fold',
                'slug' =>'samsung-fold',
                'description'=>'Samsung Fold Product',
                'category_id' =>'3',
                'company_id' =>'4',
                'price'=>4500.9,
                'image'=>'SamsungFold.jpeg',
            ],
            [ 
                #id=5
                'product_name' =>'Samsung Galaxy Book Flex2',
                'slug' =>'samsung-galaxy-book-flex2',
                'description'=>'Samsung Galaxy Book Flex2 Product',
                'category_id' =>'4',
                'company_id' =>'4',
                'price'=>8000.9,
                'image'=>'SamsungGalaxyBookFlex2.jpeg',
            ],
            [ 
                #id=6
                'product_name' =>'Galaxy Buds Pro',
                'slug' =>'galaxy-buds-pro',
                'description'=>'Galaxy Buds Pro Product',
                'category_id' =>'5',
                'company_id' =>'4',
                'price'=>100.9,
                'image'=>'GalaxyBudsPro.jpeg',
            ],
            [ 
                #id=7
                'product_name' =>'Samsung Galaxy S22',
                'slug' =>'samsung-galaxy-s22',
                'description'=>'Samsung Galaxy S22 Product',
                'category_id' =>'3',
                'company_id' =>'4',
                'price'=>2200.9,
                'image'=>'SamsungGalaxyS22.jpeg',
            ]
        ]);
    }
}
