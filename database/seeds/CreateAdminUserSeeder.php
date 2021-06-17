<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'Satoru Mikami',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('rimuruwangywangy'),
        ]);

        $role=Role::create(['name'=>'admin']);
        $permissions=Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
