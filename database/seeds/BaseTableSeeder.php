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
            'rating' => 3,
            'image' => 'images/aichi_kodomono_kuni.jpg',
        ]);

        DB::table('business')->insert([
            'name' =>  'Roast&Grill Carne「カルネ」',
            'prefecture' => '愛知県',
            'address' => '西尾市永吉１丁目３８',
            'contact' => '0563-77-4463',
            'url' =>  ' https://carne.crayonsite.net/ ',
            'description' => '二階にプレイルームがあり、子連れランチに最適なレストランです',
            'rating' => 4,
            'image' => 'images/oyakoCafe.jpg',
        ]);

        DB::table('business')->insert([
            'name'  => '愛知牧場',
            'prefecture' => '愛知県',
            'address' => '日進市米野木町南山９７７',
            'contact' => '0561-72-1300',
            'url' => 'http://www.aiboku.com/',
            'description' => '名古屋市から日帰りで行けるレジャー施設です',
            'rating' => 4,
            'image' => 'images/愛知牧場.jpeg',
        ]);
        DB::table('business')->insert([
            'name' =>  '東京ディズニーランド',
            'prefecture' => '千葉県',
            'address' => '浦安市舞浜１−１',
            'contact' => '0570-00-8632',
            'url' =>  ' https://www.tokyodisneyresort.jp/tdl/',
            'description' => '千葉県にあるディズニーランドです。東京から電車で行くことができ、子連れにも最適な夢の国です。',
            'rating' => 5,
            'image' => 'images/ディズニーランド.jpeg',
        ]);
        DB::table('business')->insert([
            'name' => 'KICHIRI 渋谷 宮益坂下',
            'prefecture' => '東京都',
            'address' => '渋谷区渋谷1-15-19',
            'contact' => '03-6418-6788',
            'url' => '	http://www.kichiri.co.jp/shop/kichiri-new-japan-style/007/',
            'description' => 'キッズチェア、オムツ替え施設、授乳室も完備のダイニングレストラン',
            'rating' => 3,
            'image' => 'images/tokyorestaurant.jpg',
        ]);

        DB::table('business')->insert([
            'name' => 'キッズプラザ大阪',
            'prefecture' => '大阪府',
            'address' => '大阪市北区扇町2-1-7',
            'contact' => '06-6311-6601',
            'url' => 'http://www.kidsplaza.or.jp/',
            'description' => '子どもたちが遊びや体験を通して科学や社会の仕組みを学ぶことができる参加体験型博物館',
            'rating' => 4,
            'image' => 'images/kidsland.jpg',
        ]);
        DB::table('business')->insert([
            'name' => 'Baby Land（ベビーランド）',
            'prefecture' => '大阪府',
            'address' => '大阪市旭区新森6-11-27 3F',
            'contact' => '06-6954-0011',
            'url' => 'https://baby-land1504.com/',
            'description' => '広いキッズスペースです',
            'rating' => 4,
            'image' => 'images/oyakoCafe.jpg',
        ]);
        DB::table('business')->insert([
            'name' => 'いちごハウス　こもの園',
            'prefecture' => '三重県',
            'address' => '三重郡菰野町神森107',
            'contact' => '059-394-1519',
            'url' => 'http://www5.cty-net.ne.jp/~t1212/',
            'description' => 'いちご狩り施設です',
            'rating' => 3,
            'image' => 'images/berries-delicious-fresh-393768.jpg',
        ]);
        DB::table('business')->insert([
            'name' => 'ナガシマスパーランド',
            'prefecture' => '三重県',
            'address' => '桑名市長島町浦安333番地',
            'contact' => '0594-45-1111',
            'url' => 'https://www.nagashima-onsen.co.jp/',
            'description' => '東海最大級の遊園地です',
            'rating' => 3,
            'image' => 'images/architecture-engineering-entertainment-106155.jpg',
        ]);
        DB::table('business')->insert([
            'name' => 'レゴランド',
            'prefecture' => '東京都',
            'address' => '港区台場1-6-1デックス東京ビーチ　アイランドモール 3階',
            'contact' => '0800-100-5346',
            'url' => 'https://tokyo.legolanddiscoverycenter.jp/',
            'description' => '東京のお台場にあるレゴランドです',
            'rating' => 4,
            'image' => 'images/blur-blurred-background-close-up-1660662.jpg',
        ]);
    }
}
