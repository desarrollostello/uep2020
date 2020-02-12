<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            SectorsTableSeeder::class,
            ZonesTableSeeder::class,
            DestinationCreditsTableSeeder::class,
            CivilStatesTableSeeder::class,
        	DepartamentsTableSeeder::class,
        	PeriodicitiesTableSeeder::class,
        	StatesTableSeeder::class,
        	GuarantiesTableSeeder::class,
        	LegalFiguresTableSeeder::class,
        	ProvincesTableSeeder::class,
        	CreditLinesTableSeeder::class,
        ]);
    }
}
