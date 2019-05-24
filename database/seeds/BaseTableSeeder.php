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

        DB::table('business')->insert([
            'name' => 'Ramon\'s business',
            'prefecture' => 'Mie',
            'address' => 'Kuwana-Shi',
            'contact' => '1234-5678-90',
            'url' => 'rb.com',
            'description' => 'Fashionable shoes.',
            'rating' => 2
        ]);

        DB::table('business')->insert([
            'name' => 'Minami Koen Park',
            'prefecture' => 'Tokyo',
            'address' => 'Kuwana-Shi',
            'contact' => '1234-5678-90',
            'url' => 'rb.com',
            'description' => 'Fashionable shoes.',
            'rating' => 3
        ]);

        DB::table('business')->insert([
            'name' => 'Ramon\'s club',
            'prefecture' => 'Mie',
            'address' => 'Kuwana-Shi',
            'contact' => '1234-5678-90',
            'url' => 'rb.com',
            'description' => 'Fashionable shoes.',
            'rating' => 4
        ]);
    }
}
