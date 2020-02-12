<?php

use App\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    public function run()
    {
        $provinces = [
            [
                'id'         => 1,
                'name'      => 'RIO NEGRO',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ]
        ];

        Province::insert($provinces);
    }
}