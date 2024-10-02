<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=> 'LG Mobile',
                "price"=>"12577 TK",
                "description"=> " a smartphone with 4GB RAM and more features.",
                "category"=>"mobile",
                "gallery"=>"https://cdn.mos.cms.futurecdn.net/2cKpPeBsjL5CtHLbKLxy96-970-80.jpg.webp",
            
            ],

            [
                'name'=> 'OPPO A77',
                "price"=>"17990 TK",
                "description"=> " a smartphone with 4GB RAM and more features.",
                "category"=>"mobile",
                "gallery"=>"https://dvf83rt16ac4w.cloudfront.net/upload/product/20230207_1675767754_774783.jpeg",
            
            ],

            [
                'name'=> 'SAMSUNG A15 5G',
                "price"=>"28199 TK",
                "description"=> " a smartphone with 6GB and 8GB RAM and more features.",
                "category"=>"mobile",
                "gallery"=>"https://dvf83rt16ac4w.cloudfront.net/upload/media/1711356480198222.jpeg",
            
            ],

            [
                'name'=> 'Huawei NOVA 12 SE',
                "price"=>"20000 TK",
                "description"=> " a smartphone with 8GB RAM Snapdragon and more features.",
                "category"=>"mobile",
                "gallery"=>"https://www.mobiledokan.co/wp-content/uploads/2024/03/Huawei-nova-12-SE-Green.webp",
            
            ],


        ]);
    }
}
