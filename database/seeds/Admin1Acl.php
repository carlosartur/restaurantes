<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Admin1Acl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $role = Role::find(1);
        $permission = Permission::find(1);
        $permissionCart = Permission::where('name', 'cart')->first();
        if (!$role) {
            $role = Role::create(['name' => 'admin']);
        }

        if (!$permission) {
            $permission = Permission::create(['name' => 'crud']);
            $permission->assignRole($role);
        }

        if (!$permissionCart) {
            $permissionCart = Permission::create(['name' => 'cart']);
            $permissionCart->assignRole($role);
        }

        if (!$user) {
            $user = User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('1234'),
            ]);
        }
        $role->givePermissionTo(['crud', 'cart']);
        $user->assignRole($role);
    }
}
