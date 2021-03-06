<?php

namespace Modules\Platform\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Platform\Core\Helper\CrudHelper;
use Modules\Platform\User\Repositories\RoleRepository;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

/**
 * Class SettingsSeeder
 */
class PermissionsSeeder extends Seeder
{

    private static $_DEFAULT_ROLES = array(
        ['id' => '1', 'display_name' => 'Admin', 'name' => 'admin', 'guard_name' => 'web'],
        ['id' => '2', 'display_name' => 'Account Manager', 'name' => 'account_manager', 'guard_name' => 'web'],
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->clear();

        $this->addAdminPermissions();
        $this->addAccountManagerPermissions();
    }

    private function clear()
    {
        \Schema::disableForeignKeyConstraints();

        DB::table('roles')->truncate();
        DB::table('role_has_permissions')->truncate();
    }

    private function addAdminPermissions()
    {

        //Insert role & attach permissions

        //Default Permission & Role seeder
        $roleRepo = \App::make(RoleRepository::class);

        // Synchronize permissions
        $result = $roleRepo->synchModulePermissions(true);


        app(PermissionRegistrar::class)->forgetCachedPermissions();

        DB::table('roles')->insert(CrudHelper::setDatesInArray(self::$_DEFAULT_ROLES));

        $admin = \Spatie\Permission\Models\Role::findById(1);

        $permissions = \Spatie\Permission\Models\Permission::all();

        if (count($permissions) == 0) {
            $roleRepo->synchModulePermissions();

            $permissions = Permission::all();
        }

        foreach ($permissions as $permission) {
            $admin->permissions()->attach($permission->id);
        }
    }

    private function addAccountManagerPermissions(){

        $roleRepo = \App::make(RoleRepository::class);

        $accountManager = \Spatie\Permission\Models\Role::findById(2);

        $permissions = \Spatie\Permission\Models\Permission::all()->where('name','!=','settings.access');

        if (count($permissions) == 0) {
            $roleRepo->synchModulePermissions();

            $permissions = Permission::all();
        }

        foreach ($permissions as $permission) {
            $accountManager->permissions()->attach($permission->id);
        }
    }
}
