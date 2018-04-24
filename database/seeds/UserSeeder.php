<?php

use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //$role_admin = Role::where(‘name’, ‘Admin’)->first();
    //$role_advisor  = Role::where(‘name’, ‘Advisor’)->first();

        $user = User::create([
            'first_name' => 'system',
            'last_name' => 'admin',
            'contact_no' => '123434',
            'email' => 'admin@ortel.com',
            'password' => bcrypt('admin4659'),
        ]);
        $user->roles()->attach(99);

        $user = User::create([
            'first_name' => 'john',
            'last_name' => 'snow',
            'contact_no' => '3213124',
            'email' => 'advisor@ortel.com',
            'password' => bcrypt('advisor4659'),
        ]);
        $user->roles()->attach(1);
    }

}