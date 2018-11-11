<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/**
 * Created by PhpStorm.
 * User: 50xiuer
 * Date: 2018/11/11
 * Time: 19:05
 */
class BaseController extends Controller
{
    /**
     * 传递到试图的数据
     * @var array
     */
    protected $routeName;

    public function __construct(Request $request)
    {
        $this->routeName = str_replace('/', '-', $request->path());
    }
}