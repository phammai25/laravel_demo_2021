<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB,Auth;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ProfileController extends Controller
{
    public function index()
    {
//        $role = Role::create(['name' => 'vendor']);
//        $permission = Permission::create(['name' => 'blog_manage_others']);

        $role = Role::findById(3);
        $permission = Permission::findById(10);
        $role->givePermissionTo($permission);
        $admin = Auth::user()->id;
        return view('admin')->with('admin',$admin);
    }
}
