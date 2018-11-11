<?php

namespace App\Http\Controllers\Admin\AdminUser;

use App\Http\Controllers\Admin\BaseController;

/**
 * Created by PhpStorm.
 * User: 50xiuer
 * Date: 2018/11/11
 * Time: 18:47
 */
class IndexController extends BaseController
{
    public function index()
    {
        return view('Admin.AdminUser.index')->with('routeName', $this->routeName);
    }
}