<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            [
            'name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'A smartphone with 8 GB ram and much more fetures',
            'category'=>'mobile',
            'gallery'=>'https://cdn.techjuice.pk/wp-content/uploads/2021/04/oppo-k3-pakistan-priceoye-qc93j.jpg'
            ],
            [
            'name'=>'penasonic TV',
            'price'=>'2000',
            'description'=>'A smart TV with much more fetures',
            'category'=>'tv',
            'gallery'=>'https://www.bhphotovideo.com/images/images2500x2500/Panasonic_TC_P65S2_TC_P65S2_65_1080p_Plasma_674082.jpg'
            ],
            [
            'name'=>'Samsung TV',
            'price'=>'3000',
            'description'=>'A smartTV with Androidsystem and much more fetures',
            'category'=>'tv',
            'gallery'=>'https://www.bhphotovideo.com/images/images2500x2500/Panasonic_TC_P65S2_TC_P65S2_65_1080p_Plasma_674082.jpg'
            ],
            [
            'name'=>'Whirlpool Refrigerator',
            'price'=>'1000',
            'description'=>'A smart Refrigerator and much more fetures',
            'category'=>'Refrigerator',
            'gallery'=>'http://1.bp.blogspot.com/-ZJ33zsEab_Y/Unejj0T555I/AAAAAAAAAvA/T1vAKCAhYTU/s1600/whirlpool-gi6fdrxxy-refrigerator.jpg'
            ]
        ]);
    }
}
