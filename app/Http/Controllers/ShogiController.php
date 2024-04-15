<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ShogiController extends Controller
{
    //
    public function index()
    {
        $appName = '将棋アプリ';
        return view('shogi/index', compact('appName'));
    }
}
