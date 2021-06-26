<?php

namespace Modules\Blog\Event;

use App\Http\Controllers\Controller;
use App\Models\Blog;// laravel 8 no move User vao thu muc Model roi, nen em xem guide tren mang  phai de y
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB,Auth;
use Illuminate\Support\Facades\Schema;
class EventController extends Controller
{

    public function index()
    {
        if(isset($_GET['search'])){
            $blogs = Blog::where('title','LIKE','%'.$_GET['search'].'%')
                ->get();
        }
        else{
            $blogs = Blog::all();
        }
        return view('Blog::event.index')->with('blogs',$blogs);
    }
    public function detail($id){
        $blog = Blog::find($id);
        return view('Blog::event.detail')->with('blog',$blog);
    }

    public function create(){
        return view('Blog::event.create');

    }
    public function created(Request $request){
        $blog = [
            'title' => $request->query('title'),
            'content' => $request->query('content'),
            'status' => $request->query('status'),
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => Auth::user()->id
        ];
        if(DB::table('blogs')->insert($blog)){
            return  Redirect::to('/blog/event/index');
        }else{
            return view('Blog::event.create');
        }
    }
    public function edit(Request $request,$id){
        $blog = Blog::find($id);
        $blog -> title = $request->query('title');
        $blog -> content = $request->query('content');

        $blog->save();
        return Redirect::to('/blog/event/index');
    }
    public function deleted($id){
        $blog = Blog::find($id);
        $blog->delete();
        return Redirect::to('/blog/event/index');

    }
}
