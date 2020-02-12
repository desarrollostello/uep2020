<?php

use App\Guarantie;
use Illuminate\Database\Seeder;

class GuarantiesTableSeeder extends Seeder
{
    public function run()
    {
        $guaranties = [
            [
                'id'         => 1,
                'name'      => 'PERSONALES',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 2,
                'name'      => 'HIPOTECARIAS',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 3,
                'name'      => 'PRENDARIAS',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 4,
                'name'      => 'MIXTAS',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ]
        ];

        Guarantie::insert($guaranties);
    }
}