<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Rules;
use App\Models\Peserta;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            'title'=>'PF | Dashboard',
            'users'=>User::all(),
            'events'=>Event::all(),
            'peserta'=>Peserta::where('user_id',auth()->user()->id)->get()
        ]);
    }

    public function create()
    {

        return view('dashboard.create',[
            'sekolah'=>Sekolah::all(),
            'title'=>'PF | Pendaftaran',
            'events'=>Event::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =$request->validate([
            'name'=>'required|max:255',
            'events'=>'required',
            'sekolah_id'=>'required',
            'asal_sekolah'=>'required|max:255',
            'image'=>'required|image|file|max:1024|',
            'images'=>'image|file|max:1024|',
            'no_hp'=>'required|numeric|',
            'fileEvents'=>'mimes:pdf,doc,docx,jpg,jpeg,png|file|max:5012'
        ]);



        $peserta = new Peserta();
        $peserta->user_id = auth()->user()->id;
        $peserta->name = $request->name;
        $peserta->events = $request->events;
        $peserta->sekolah_id = $request->sekolah_id;
        $peserta->no_hp = $request->no_hp;
        $peserta->asal_sekolah = $request->asal_sekolah;


        if($request->has('status')){
            $peserta->status = $request->status;
        }
        if($request->hasFile('image')){
            $image = $request->name."-".str_replace(' ','-',$request->file('image')->getClientOriginalName());
            $request->file('image')->move(public_path('img/bukti-pembayaran'),$image);
            $peserta->image = $image;
        }
        if ($request->hasFile('fileEvents')){
            $file = $request->name.'-'.str_replace(' ','-',$request->file('fileEvents')->getClientOriginalName());
            $request->file('fileEvents')->move(public_path('folder-peserta'),$file);
            $peserta->fileEvents = $file;
        }

        $peserta->save();

        return redirect('/dashboard')->with('success','Pendaftaran Berhasil!!');
    }
}
