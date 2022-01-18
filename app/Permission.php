<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permissionphp
{
    public static function defaultPermissions()
    {
        return [
            'creat_user',
            'edit_user',
            'update_user',
        ];
    }
}
