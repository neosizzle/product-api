<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create products

        $products = [
            [
                'title' => 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Design',
                'description' => 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Designn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available',
                'image' => "https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/cleanarchitecture.jpg",
                'images'=> json_encode("{\"uri\" : [\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/cleanarchitecture.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse2.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse3.jpg\"]}"),
                'options'=>json_encode("{\"options\":[]}"),
                'price'=>123.24,
                'oldPrice'=>69,
                'avgRating'=>3.4,
                'ratings'=>1234,
                'slug'=>"asdf"
            ],
            [
                'title' => 'Logitech MX Master 3 Advanced Wireless Mouse for Mac - Bluetooth/USB',
                'description' => 'Features & details
                - MAGSPEED WHEEL: Ultra-fast, precise, quiet MagSpeed electromagnetic scrolling
                - DARKFIELD 4000 DPI SENSOR: Darkfield 4000 DPI sensor for precise tracking on any surface, even glass (up to 4mm in thickness)
                - COMFORTABLE DESIGN: Tactile reference for hand positioning makes it easy to stay oriented and in your flow
                - FLOW CROSS-COMPUTER CONTROL: Supports flow cross-computer control across multiple screens. Pair up to 3 devices via Bluetooth Low Energy or Unifying USB receiver`,
               ',
                'image' => "https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse1.jpg",
                'images'=> json_encode(" {\"uri\" : [\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse1.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse2.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse3.jpg\"]}"),
                'options'=>json_encode("{\"options\":[\"Black\" , \"Space Grey\"]}"),
                'price'=>123.24,
                'oldPrice'=>69,
                'avgRating'=>3.4,
                'ratings'=>1234,
                'slug'=>"asdf"
    
            ],
            [
                'title' => 'New 2021 Imac',
                'description' => 'IMAC FEATURES
                - MAGSPEED WHEEL: Ultra-fast, precise, quiet MagSpeed electromagnetic scrolling
                - DARKFIELD 4000 DPI SENSOR: Darkfield 4000 DPI sensor for precise tracking on any surface, even glass (up to 4mm in thickness)
                - COMFORTABLE DESIGN: Tactile reference for hand positioning makes it easy to stay oriented and in your flow
                - FLOW CROSS-COMPUTER CONTROL: Supports flow cross-computer control across multiple screens. Pair up to 3 devices via Bluetooth Low Energy or Unifying USB receiver`,
               ',
                'image' => "https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/imac1.jpg",
                'images'=> json_encode(" {\"uri\" : [\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/imac1.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse2.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse3.jpg\"]}"),
                'options'=>json_encode("{\"options\":[\"Blue\" , \"Red\"]}"),
                'price'=>122.24,
                'oldPrice'=>629,
                'avgRating'=>4.4,
                'ratings'=>834,
                'slug'=>"asdf"
    
            ],
            [
                'title' => 'Havit Mechanical Keyboard Wired 89 Keys Gaming Keyboard Red Switch Keyboard with PBT Keycaps for PC Gamer',
                'description' => 'KEYBOARD FEATURES n publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.`,
               ',
                'image' => "https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/keyboard1.jpg",
                'images'=> json_encode(" {\"uri\" : [\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/keyboard1.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse2.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse3.jpg\"]}"),
                'options'=>json_encode("{\"options\":[\"RGB\" , \"NO RGB\"]}"),
                'price'=>420,
                'oldPrice'=>69,
                'avgRating'=>4.9,
                'ratings'=>8124,
                'slug'=>"asdf"
    
            ],
            [
                'title' => 'Mouse Havit Mechanical Keyboard Wired 89 Keys Gaming Keyboard',
                'description' => 'KEYBOARD FEATURES HAVIT n publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.`,
               ',
                'image' => "https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse2.jpg",
                'images'=> json_encode(" {\"uri\" : [\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/keyboard1.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse2.jpg\",\"https://notjustdev-dummy.s3.us-east-2.amazonaws.com/images/products/mouse3.jpg\"]}"),
                'options'=>json_encode("{\"options\":[\"RGB\" , \"NO RGB\"]}"),
                'price'=>423,
                'oldPrice'=>623,
                'avgRating'=>4.9,
                'ratings'=>83234,
                'slug'=>"asdsdf"
    
            ]

            ];


        DB::table('products')->insert($products);

    }
}
