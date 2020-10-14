<?php

namespace Modules\Platform\Core\Repositories;

use Bnb\Laravel\Attachments\Attachment;
use Modules\Platform\Core\Helper\FileHelper;

/**
 * Class AttachmentsRepository
 * @package Modules\Platform\Core\Repositories
 */
class AttachmentsRepository extends PlatformRepository
{
    public function model()
    {
        return Attachment::class;
    }




    /**
     * Sum and format storage
     *
     * @param $account
     * @param int $decimals
     * @return null|string
     */
    public function countFileSizeForAccountFormatted($account,$decimals=2)
    {

        if($account == null ){
            $account = session()->get('currentAccount');
        }

        $fileSizes = Attachment::where('uuid', $account->id)->sum('filesize');
        
        if (!empty($fileSizes)) {

            return FileHelper::formatSize($fileSizes);

        }
        return 0;
    }

    /**
     * Sum all file sizes for account
     * @param $account
     * @return mixed
     */
    public function countFileSizeForAccount($account)
    {

        if($account == null ){
            $account = session()->get('currentAccount');
        }

        $fileSizes = Attachment::where('uuid', $account->id)->sum('filesize');

        if (!empty($fileSizes)) {
            return $fileSizes/(1024*1024*1024);
        }
        return null;
    }

    public function findByKey($key)
    {
        try {
            return $this->findByField('key', $key);
        } catch (\Exception $exception) {
            return null;
        }
    }
}
