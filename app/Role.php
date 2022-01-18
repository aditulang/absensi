<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Rolephp
{
    public static function defaultRoles()
    {
        return [
            'admin',
            'walikelas',
            'siswa',
        ];
    }
}
