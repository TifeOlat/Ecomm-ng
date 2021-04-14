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
        DB::table('products')->insert([
            // [
            //     'name'=> 'Iphone mobile',
            //     'price'=> '25000',
            //     'category'=> 'Mobile',
            //     'description'=> 'A smart phone with 10gig ram and more features',
            //     'gallery'=> 'https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?cs=srgb&dl=pexels-jess-bailey-designs-788946.jpg&fm=jpg',
    
            // ],
            // [
            //     'name'=> 'Samsung mobile',
            //     'price'=> '30000',
            //     'category'=> 'Mobile',
            //     'description'=> 'A smart phone with 10gig ram and more features',
            //     'gallery'=> 'https://images.pexels.com/photos/47261/pexels-photo-47261.jpeg?cs=srgb&dl=pexels-mohi-syed-47261.jpg&fm=jpg',
    
            // ],
            // [
            //     'name'=> 'Panasonic TV',
            //     'price'=> '30000',
            //     'category'=> 'Televison',
            //     'description'=> 'A smart Televison with more features',
            //     'gallery'=> 'https://images.pexels.com/photos/6265837/pexels-photo-6265837.jpeg?cs=srgb&dl=pexels-max-vakhtbovych-6265837.jpg&fm=jpg',
    
            // ],
            [
                'name'=> 'Hisense Fridge',
                'price'=> '35000',
                'category'=> 'Fridge',
                'description'=> 'A smart Televison with more features',
                'gallery'=> 'https://images.pexels.com/photos/5824883/pexels-photo-5824883.jpeg?cs=srgb&dl=pexels-charlotte-may-5824883.jpg&fm=jpg',
    
            ],
        ]);
    }
}
