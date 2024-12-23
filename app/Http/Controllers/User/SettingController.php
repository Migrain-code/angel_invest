<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings()
    {
        return view('user.settings.index');
    }

    public function buy()
    {
        return view('user.buy.index');
    }
}
