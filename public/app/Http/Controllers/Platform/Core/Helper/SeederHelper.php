<?php

namespace Modules\Platform\Core\Helper;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Modules\Accounts\Entities\Account;
use Modules\Platform\User\Entities\User;

/**
 * Seeder Helper save or update data in table fill created at and updated at
 *
 * Class SeederHelper
 * @package Modules\Platform\Core\Helper
 */
class SeederHelper extends Seeder
{
    private $fCompayUser;

    public function firstAccountUserId(){
        return 2;
    }

    public function secondAccountUserId(){
        return 4;
    }

    public function firstAccountUser()
    {
        if ($this->fCompayUser != null) {
            return $this->fCompayUser;
        }
        $this->fCompayUser = User::findOrFail(2);

        return $this->fCompayUser;
    }

    public function firstAccount(){
        return 1;
    }

    public function secondAccount(){
        return 2;
    }

    private $sCompayUser;


    public function secondAccountUser()
    {
        if ($this->sCompayUser != null) {
            return $this->sCompayUser;
        }
        $this->sCompayUser = User::findOrFail(4);

        return $this->sCompayUser;
    }


    /**
     * Save or update database records
     *
     * @param $table
     * @param $attributes
     */
    public function saveOrUpdate($table, $attributes)
    {
        foreach ($attributes as $attr) {
            $record = \DB::table($table)->find($attr['id']);

            if ($record != null) {
                $attr['updated_at'] = Carbon::now();
                if ($record->created_at == null) {
                    $attr['created_at'] = Carbon::now();
                }

                \DB::table($table)->updateOrInsert(['id' => $attr['id']], $attr);
            } else {
                $attr['created_at'] = Carbon::now();

                \DB::table($table)->updateOrInsert(['id' => $attr['id']], $attr);
            }
        }
    }
}
