<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parm = [
            'last_name' => '',
            'first_name' => '',
            'gender' => '',
            'email' => '',
            'tell' => '',
            'address' => '',
            'building' => '',
            'detail' => '',
            'content' => '',
        ];
    }
}
