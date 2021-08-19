<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo',
                'price' => '2000',
                'description' => 'smart phone char char',
                'category' => 'mobile',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_d39orZJttXYyUNtOzOWXiq3wzc_Cayezwe1oDsYXDSzQAnOUy_ZJtRVJBSCt-KIoOA9yQTE&usqp=CAc'
            ],
            [
                'name' => 'Nokia',
                'price' => '2000',
                'description' => 'smart phone char char',
                'category' => 'mobile',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_d39orZJttXYyUNtOzOWXiq3wzc_Cayezwe1oDsYXDSzQAnOUy_ZJtRVJBSCt-KIoOA9yQTE&usqp=CAc'

            ],
            [
                'name' => 'samsung',
                'price' => '2000',
                'description' => 'smart phone char char',
                'category' => 'tv',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_d39orZJttXYyUNtOzOWXiq3wzc_Cayezwe1oDsYXDSzQAnOUy_ZJtRVJBSCt-KIoOA9yQTE&usqp=CAc'

            ],
            [
                'name' => 'Lg',
                'price' => '2000',
                'description' => 'smart phone char char',
                'category' => 'mobile',
                'gallery' => 'https://www.techadvisor.com/cmsdata/slideshow/3686770/lg_v40_thinq_review_4_thumb1200_4-3.jpg'

            ]
        ]);
    }
}
