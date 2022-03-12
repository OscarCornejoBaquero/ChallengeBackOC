<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'first_name' => 'Oscar Leonardo',
                'last_name' => 'Cornejo Baquero',
                'identification_card' => '0927218487',
                'email' => 'oscar.corneb@gmail.com',
                'cell_phone' => '0981814691'
            ],
            [
                'first_name' => 'Saskya Esperanza',
                'last_name' => 'Zambrano Naranjo',
                'identification_card' => '0957218487',
                'email' => 'saskya.corneb@gmail.com',
                'cell_phone' => '0982134691'
            ],
            [
                'first_name' => 'Isabella Sasha',
                'last_name' => 'Cornejo Zambrano',
                'identification_card' => '0927218457',
                'email' => 'isa.bella@gmail.com',
                'cell_phone' => '0981554691'
            ],
            [
                'first_name' => 'Angela Edilma',
                'last_name' => 'Baquero Romo',
                'identification_card' => '0925258487',
                'email' => 'angela.baque@gmail.com',
                'cell_phone' => '0981814111'
            ],
            [
                'first_name' => 'Pro Cat',
                'last_name' => 'Fito Colorito',
                'identification_card' => '0988218487',
                'email' => 'fito@gmail.com',
                'cell_phone' => '0912814691'
            ]
        ]);
    }
}
