<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AddPermissionsAndRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $permissions = [

            ['name' => 'create users', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'read users', 'roles' => ['admin']],
            ['name' => 'find user', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'update user', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'delete user', 'roles' => ['admin']],

            ['name' => 'create collectors', 'roles' => ['admin']],
            ['name' => 'read collectors', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'find collector', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'update collector', 'roles' => ['admin', 'collector']],
            ['name' => 'delete collector', 'roles' => ['admin']],

            ['name' => 'create materials', 'roles' => ['admin']],
            ['name' => 'read materials', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'find material', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'update material', 'roles' => ['admin']],
            ['name' => 'delete material', 'roles' => ['admin']],

            ['name' => 'create zones', 'roles' => ['admin']],
            ['name' => 'read zones', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'find zone', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'update zone', 'roles' => ['admin']],
            ['name' => 'delete zone', 'roles' => ['admin']],

            ['name' => 'create schedule', 'roles' => ['admin', 'collector']],
            ['name' => 'read schedules', 'roles' => ['admin', 'collector']],
            ['name' => 'find schedule', 'roles' => ['admin', 'collector']],
            ['name' => 'update schedule', 'roles' => ['admin', 'collector']],
            ['name' => 'delete schedule', 'roles' => ['admin', 'collector']],

            ['name' => 'create requests', 'roles' => ['admin', 'user']],
            ['name' => 'read requests', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'find request', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'update request', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'delete request', 'roles' => ['admin']],

            ['name' => 'create comments', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'read comments', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'find comment', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'delete comment', 'roles' => ['admin', 'collector', 'user']],

            ['name' => 'create rating', 'roles' => ['user']],
            ['name' => 'read rating', 'roles' => ['admin', 'collector', 'user']],
            ['name' => 'find rating', 'roles' => ['admin', 'collector', 'user']],

            ['name' => 'read reports', 'roles' => ['admin', 'collector', 'user']],

        ];

        Role::create(['guard_name' => 'api', 'name' => 'admin']);
        Role::create(['guard_name' => 'api', 'name' => 'collector']);
        Role::create(['guard_name' => 'api', 'name' => 'user']);

        foreach ($permissions as $permission) {
            Permission::create(['guard_name' => 'api', 'name' => $permission['name']])
                ->syncRoles($permission['roles']);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $admin_role = Role::where('name', 'admin')->first();
        $admin_role->syncPermissions([]);

        $collector_role = Role::where('name', 'collector')->first();
        $collector_role->syncPermissions([]);

        $user_role = Role::where('name', 'user')->first();
        $user_role->syncPermissions([]);

        Permission::truncate();
        Role::truncate();
    }
}
