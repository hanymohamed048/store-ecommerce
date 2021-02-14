<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatebaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_locale' => 'en',
            'default_timezone' => 'Aisa/Dhaka',
            'reviews_enabled' =>true ,
            'auto_approve_reviews' => true ,
            'supported_currencies' =>['USD','LE'],
            'default_currency'=>'USD',
            'store_email'=>'admin@ecommerce.test',
            'search_engine'=>'mysql',
            'local_pickup_cost'=> 0,
            'flat_rate_cost'=> 0 ,
            'translatable' => [
                'store_name'=>'fleatcart',
                'free_shipping_label' => 'Free shipping',
                'local_label' =>'local shipping',
                'outer_label' => 'outer_shipping' ,
            ],

        ]);
    }
}
