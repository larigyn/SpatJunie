<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    //spatie
    public static function defaultPermissions()
    {
        return [           
            'viewPost',
            'addPost',
            'editPost',
            'deletePost',
        ];
    }
}
