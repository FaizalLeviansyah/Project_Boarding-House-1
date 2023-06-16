<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            IndoRegionProvinceSeeder::class,
            IndoRegionRegencySeeder::class,
            IndoRegionDistrictSeeder::class,
            IndoRegionVillageSeeder::class,
            AddRoleAdmin::class,
            RoleSeeder::class,
            IndoBankSeeder::class,
            KamarSeeder::class,
            KamarsSeeder::class,
            TransactionsSeeder::class,
            PaymentsSeeder::class,
            ReviewSeeder::class
            
        ]);
        
    }
}
