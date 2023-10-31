<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'client']);
        $role3 = Role::create(['name' => 'guest']);



        Permission::create(['name' => 'dashboard'])->assignRole($role1);
        //Permisos de administrador  de usuarios
        Permission::create(['name' => 'users.index'])->syncRoles($role1);
        Permission::create(['name' => 'users.store'])->syncRoles($role1);
        Permission::create(['name' => 'users.edit'])->syncRoles($role1);
        Permission::create(['name' => 'users.update'])->syncRoles($role1);
        Permission::create(['name' => 'admin.cas as'])->syncRoles($role1);
        Permission::create(['name' => 'user.change_status'])->syncRoles($role1);

        ///Permisos de casasas
        Permission::create(['name' => 'casa.index'])->syncRoles([$role1, $role2,$role3]);
        Permission::create(['name' => 'casa.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'casa.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'casa.show'])->syncRoles([$role1, $role2,$role3]);
        Permission::create(['name' => 'casa.administer'])->syncRoles([$role1, $role2,]);
        Permission::create(['name' => 'casa.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'casa.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'change_status'])->syncRoles([$role1, $role2]);



        //permisos d eplantillas que no seven
        Permission::create(['name' => 'virtual-reality'])->assignRole($role1);
        Permission::create(['name' => 'rtl'])->assignRole($role1);
        Permission::create(['name' => 'profile'])->assignRole([$role1, $role2]);
        Permission::create(['name' => 'profile-static'])->assignRole($role1);
        Permission::create(['name' => 'sign-in-static'])->assignRole($role1);
        Permission::create(['name' => 'page'])->assignRole($role1);

        //permisos de comentario
        Permission::create(['name' => 'comment.index'])->assignRole([$role1, $role2 ,$role3]);
        Permission::create(['name' => 'comment.create'])->assignRole([$role1, $role2]);
        Permission::create(['name' => 'comment.store'])->assignRole([$role1, $role2]);
        Permission::create(['name' => 'comment.update'])->assignRole([$role1, $role2]);
        Permission::create(['name' => 'comment.destroy'])->assignRole([$role1, $role2]);





    }
}
