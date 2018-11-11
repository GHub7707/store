<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Menu;

/**
 * Created by PhpStorm.
 * User: 50xiuer
 * Date: 2018/11/11
 * Time: 20:28
 */
class IndexController extends BaseController
{
    public function index()
    {
        $list = Menu::all();
        return view('Admin.Menu.index')
            ->with('list', $list)
            ->with('routeName', $this->routeName);
    }


    public function edit()
    {
        $list = Menu::all();
        return view('Admin.Menu.edit')
            ->with('list', $list)
            ->with('routeName', $this->routeName);
    }
}