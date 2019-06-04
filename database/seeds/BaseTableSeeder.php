<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'ramon',
        //     'email' => 'ramon@gmail.com',
        //     'password' => 'password',
        // ]);

        DB::table('users')->insert([
            'name' => Str::random(5),
            'email' => Str::random(5) . '@gmail.com',
            'password' => bcrypt('secret'),
        ]);


        DB::table('business')->insert([
            'name' => '愛知こどもの国',
            'prefecture' => '愛知県',
            'address' => '西尾市東幡豆町南越田3番地',
            'contact' => '0563-62-4151',
            'url' => 'https://www.kodomo-aichi.jp/',
            'description' => '広大な児童総合遊園施設です',
            'rating' => 3
        ]);

        DB::table('business')->insert([
            'name' =>  'Roast&Grill Carne「カルネ」',
            'prefecture' => '愛知県',
            'address' => '西尾市永吉１丁目３８',
            'contact' => '0563-77-4463',
            'url' =>  ' https://carne.crayonsite.net/ ',
            'description' => '二階にプレイルームがあり、子連れランチに最適なレストランです',
            'rating' => 4
        ]);

        DB::table('business')->insert([
            'name'  => '愛知牧場',
            'prefecture' => '愛知県',
            'address' => '日進市米野木町南山９７７',
            'contact' => '0561-72-1300',
            'url' => 'http://www.aiboku.com/',
            'description' => '名古屋市から日帰りで行けるレジャー施設です',
            'rating' => 4
        ]);
        DB::table('business')->insert([
            'name' =>  '東京ディズニーランド',
            'prefecture' => '千葉県',
            'address' => '浦安市舞浜１−１',
            'contact' => '0570-00-8632',
            'url' =>  ' https://www.tokyodisneyresort.jp/tdl/',
            'description' => '千葉県にあるディズニーランドです。東京から電車で行くことができ、子連れにも最適な夢の国です。',
            'rating' => 5
        ]);
    }
}
