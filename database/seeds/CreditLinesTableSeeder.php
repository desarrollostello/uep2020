<?php

use App\CreditLine;
use Illuminate\Database\Seeder;

class CreditLinesTableSeeder extends Seeder
{
    public function run()
    {
        $creditLines = [
            [
                'id'         => 1,
                'name'      => 'Reactivación Productiva',
            	'description' =>'Micro, Pequeñas y Medianas empresas, industriales, mineras, agropecuarias y de turismo, como así también de servicios cuando complementen la faz productiva de dichas actividades, y que se encuentren dentro de los siguientes parámetros previos al proyecto',
            	'maximum_amount' =>'$6.000.000',
            	'maximum_grace' =>'24 meses',
            	'maximum amortization' =>'84 meses',
            	'rate' =>'30%',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 2,
                'name'      => 'Programa ALFALFA',
            	'description' =>'Línea de Créditos para la Alfalfa',
            	'maximum_amount' =>'$2.500.000',
            	'maximum_grace' =>'12 meses',
            	'maximum amortization' =>'48 meses',
            	'rate' =>'30%',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 3,
                'name'      => 'Programa ENERGÍAS ALTERNATIVAS',
            	'description' =>'Ofrecer una herramienta de financiación a productores y emprendedores rionegrinos sin acceso a la red eléctrica, con acceso dificultoso, o con intenciones de reconversión a sistemas de energías limpias. Así, esta línea facilita la adquisición de equipos híbridos de autogeneración de energía eléctrica, con el fin de incrementar las posibilidades de producción de los emprendedores de Río Negro, mejorar su calidad de vida, y contribuir al cuidado del medio ambiente. ',
            	'maximum_amount' =>'$160.000',
            	'maximum_grace' =>'12 meses',
            	'maximum amortization' =>'36 meses',
            	'rate' =>'30%',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 4,
                'name'      => 'Reactivación Productiva - Sector Frutícola',
            	'description' =>'Destinado a la Reconverción de las Plantaciones, Reposición por fallas, Aumento de la Superficie Implantada, Nuevas Superficies',
            	'maximum_amount' =>'$6.000.000',
            	'maximum_grace' =>'3 / 6 años según variedad',
            	'maximum amortization' =>'3 / 6 años según variedad',
            	'rate' =>'30%',
                'created_at' => '2019-04-15 19:13:32',
                'updated_at' => '2019-04-15 19:13:32',
                'deleted_at' => null,
            ]
        ];

        CreditLines::insert($creditLines);
    }
}