<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB,Auth;
use Illuminate\Support\Facades\Schema;


class ProfileController extends Controller
{
    public function index()
    {
        $admin = Auth::user();
        return view('admin')->with('admin',$admin);
    }
}
