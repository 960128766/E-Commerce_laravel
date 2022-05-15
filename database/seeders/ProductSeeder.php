<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'apple mobile',
                'price' => '699',
                'description' => 'a smartphone with feature ',
                'category' => 'mobile',
                'gallery' => 'https://fdn.gsmarena.com/imgroot/news/22/05/zte-axon-40-ultra-and-pro-announcement/inline/-1200/gsmarena_001.jpg',
            ],
            [
                'name' => 'huawi mobile',
                'price' => '400',
                'description' => 'a smartphone with 8g ram ',
                'category' => 'mobile',
                'gallery' => 'https://d124ep1ou7ef1k.cloudfront.net/wp-content/uploads/2022/03/Galaxy_A33_5G_MA_Thumb-960x640.jpg',
            ],
            [
                'name' => 'samsung tv',
                'price' => '900',
                'description' => 'a tv with with feature ',
                'category' => 'tv',
                'gallery' => 'https://cdn.mos.cms.futurecdn.net/HpTkm88jZpK6WxTYrdqKSD-970-80.jpg.webp',
            ],
            [
                'name' => 'aaa tv',
                'price' => '345',
                'description' => 'a tv fine ',
                'category' => 'tv',
                'gallery' => 'https://cdn.mos.cms.futurecdn.net/cuC6EjnkCFm8t5AfZriFmC-970-80.jpg.webp',
            ],
            [
                'name' => 'samsung fridge',
                'price' => '700',
                'description' => 'a fridge with feature ',
                'category' => 'fridge',
                'gallery' => 'https://emoolo.com/images/product/Fridge.jpg',
            ]
       ]);
    }
}
