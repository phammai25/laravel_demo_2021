<?php

namespace Modules\User\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;// laravel 8 no move User vao thu muc Model roi, nen em xem guide tren mang  phai de y
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB,Auth;
use Illuminate\Support\Facades\Schema;
class UserController extends Controller
{

    public function index()
    {
        if(isset($_GET['search'])){
            $users = User::where('first_name','LIKE','%'.$_GET['search'].'%')
                ->orWhere('email','LIKE','%'.$_GET['search'].'%')
                ->get();
        }
        else{
            $users = User::all();
        }
        return view('User::admin.index')->with('users',$users);
    }
    public function detail($id){
        $user = User::find($id);
        return view('User::admin.detail')->with('user',$user);
    }

    public function create(){
        return view('User::admin.create');

    }
    public function created(Request $request){
        $user = [
            'first_name' => $request->query('first_name'),
            'email' => $request->query('email'),
            'password' => $request->query('password'),
            'provider_id' => ''
        ];
        if(DB::table('users')->insert($user)){
            return  Redirect::to('/admin/user/index');
        }else{
            return view('User::admin.create');
        }
    }
    public function edit(Request $request,$id){
        $user = User::find($id);
        $user -> first_name = $request->query('first_name');
        $user -> email = $request->query('email');

        $user->save();
        return Redirect::to('/admin/user/index');
    }
}
