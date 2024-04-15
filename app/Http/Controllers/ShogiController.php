<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ShogiController extends Controller
{
    //
    public function index()
    {
        $appName = '将棋アプリ';
        $MyKing = 59; // 追加
        return view('shogi/index', compact('appName', 'MyKing')); // ビューにも渡す
    }
}
