<?php

use App\LegalFigure;
use Illuminate\Database\Seeder;

class LegalFiguresTableSeeder extends Seeder
{
    public function run()
    {
        $legalFigures = [
            [
                'id'         => 1,
                'name'      => 'SOCIEDAD ANÓNIMA (SA)',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 2,
                'name'      => 'MONOTRIBUTISTA',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 3,
                'name'      => 'UNIPERSONAL',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 4,
                'name'      => 'SOCIEDAD DE RESPONSABILIDAD LIMITADA (SRL)',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ]
        ];

        LegalFigure::insert($legalFigures);
    }
}