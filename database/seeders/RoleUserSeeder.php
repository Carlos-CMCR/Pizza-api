<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $permission1 = Permission::create(['name' => 'enseñar usuario']);
        $permission2 = Permission::create(['name' => 'eliminar usuario']);



        $role = Role::create(['name' => 'admin'])->syncPermissions([$permission1,$permission2]);


        $user = User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        $user->assignRole($role);
    }
}
