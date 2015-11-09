<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/9
 * Time: 8:57
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function startup(Request $request)
    {
        $device_id = $request->input("device_id");
        $os_type = $request->input("os_type");

        $data = [];
        return $data;
    }
}