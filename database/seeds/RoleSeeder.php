<?php

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advisor = Role::create([
            'name' => 'Advisor',
            'description' => 'Lowest level access' 
        ]);

        $seniorAdvisor = Role::create([
            'name' => 'Senior Advisor',
            'description' => 'Second Lowest level' 
        ]);
        
        $assistantManager = Role::create([
            'name' => 'Assistant Manager',
            'description' => 'Assistant Manager' 
        ]);

        $manager = Role::create([
            'name' => 'Manager',
            'description' => 'Manager' 
        ]);

        $seniorManager = Role::create([
            'name' => 'Senior Manager',
            'description' => 'Senior Manager' 
        ]);

        $regionalManager = Role::create([
            'name' => 'Regional Manager',
            'description' => 'Regional Manager' 
        ]);

        $headOfSales = Role::create([
            'name' => 'Head of Sales',
            'description' => 'Head of Sales' 
        ]);

        $complianceManager = Role::create([
            'name' => 'Compliance Manager',
            'description' => 'Compliance Manager' 
        ]);

        $Admin = Role::create([
            'id' => '99',
            'name' => 'Admin',
            'description' => 'Top level access/franchisee' 
        ]);
    }
}
