<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use App\Models\Peserta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.index',[
            'title'=>'PF | Admin',
            'events'=>Event::all(),
            'peserta'=>Peserta::all()
        ]);
    }

    // public function cetak_pdf()
    // {
    //     $peserta = Peserta::all();
    //     $details = ['peserta'=>$peserta,'title'=>'PF | Admin','events'=>Event::all()];
    //     $pdf = PDF::loadView('admins.index',$details)->setPaper('a4','portrait');
    //     return $pdf->download('daftar-peserta.pdf');
    // }

    public function users()
    {
        return view('admins.user',[
            'title'=> 'PF | Daftar Pengguna',
            'users'=> User::all()
        ]);
    }
    public function post_index()
    {
        return view('admins.post.index',[
            'title'=>'PF | Postingan Admin',
            'posts'=>Post::where('user_id',auth()->user()->id)->get(),
        ]);
    }

    public function post_create()
    {
        return view('admins.post.create',[
            'title'=>'PF | Buat Postingan'
        ]);
    }

    public function post_store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=>'required|max:255',
            'slug'=>'required|unique:posts',
            'body'=>'required',
            'images'=>'image|file|max:1024'
        ]);

        if($request->file('images')) {
            $validatedData['images'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excert'] = Str::limit(strip_tags($request->body),100,'...');

        Post::create($validatedData);

        return redirect(route('post'))->with('success','Postingan Baru berhasil ditambahkan');
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('dashboard/post')->with('success','Postingan berhasil dihapuskan !!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]);
    }
}


