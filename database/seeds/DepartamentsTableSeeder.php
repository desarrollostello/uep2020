<?php

use App\Departament;
use Illuminate\Database\Seeder;

class DepartamentsTableSeeder extends Seeder
{
    public function run()
    {
        $departaments = [
            [
                'id'         => 1,
                'name'      => 'Adolfo Alsina',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 2,
                'name'      => 'Avellaneda',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 3,
                'name'      => 'Bariloche',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 4,
                'name'      => 'Conesa',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 5,
                'name'      => 'El Cuy',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 6,
                'name'      => 'General Roca',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 7,
                'name'      => '9 de Julio',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
        	[
                'id'         => 8,
                'name'      => 'Ñorquincó',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
        	[
                'id'         => 9,
                'name'      => 'Pichi Mahuida',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
        	[
                'id'         => 10,
                'name'      => 'Pilcaniyeu',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
        	[
                'id'         => 11,
                'name'      => 'San Antonio',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
        	[
                'id'         => 12,
                'name'      => 'Valcheta',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
        	[
                'id'         => 13,
                'name'      => '25 de Mayo',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ]
        ];

        Departament::insert($departaments);
    }
}
