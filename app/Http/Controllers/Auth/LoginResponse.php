<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginResponse extends Controller
{
    public function loginResponse()
    {
        $checkrole = Auth::user()->role_id;

        if ($checkrole == '1') {
            return redirect()->route('super.admin');
        } elseif ($checkrole == '2') {
            return redirect()->route('admin');
        }
    }
}
