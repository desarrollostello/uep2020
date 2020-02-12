<?php

use App\Zone;
use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{
    public function run()
    {
        $zones = [
            [
                'id'         => 1,
                'name'      => 'ANDINA',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 2,
                'name'      => 'ATLÁNTICA',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 3,
                'name'      => 'ALTO VALLE',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 4,
                'name'      => 'VALLE MEDIO',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 5,
                'name'      => 'SUR',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ]
        ];

        Zone::insert($zones);
    }
}
