<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
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
