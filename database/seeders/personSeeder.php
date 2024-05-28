<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('person')->insert([
            'idPerson' => '1301213056',
            'name' => 'Faqih',
            'number' => '0895358683283',
            'created_at' => now()
        ]);
    }
}

