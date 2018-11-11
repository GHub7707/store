<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: 50xiuer
 * Date: 2018/11/11
 * Time: 22:09
 */
class Menu extends Model
{
    protected function getPidAttribute($value)
    {
        if ($value == 0) {
            return '/';
        } else {
            return self::find($value)->name;
        }
    }

    protected function getRouteAttribute($value)
    {
        return $value ?: '/';
    }
}