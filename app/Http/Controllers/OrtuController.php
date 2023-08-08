<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ortu;
use App\Models\Perubahan;

class OrtuController extends Controller
{
    public function index()
    {
        $ortu = Ortu::all();

        return view ('content.ortu', compact('ortu'));
    }

    public function create(){
        return view('content.ortu_create');
    }

    public function store(Request $request){
        $ortu = Ortu::create([
            'nama_ortu' => $request -> nama_ortu,
            'nama_anak' => $request -> nama_anak,
            'alamat' => $request -> alamat,
            'kontak_wa' => $request -> kontak_wa,
        ]);
        return redirect('/ortu');
    }
    public function edit($id){
        $ortu = Ortu::where('id', $id)->first();
        return view ('content.ortu_edit', compact('ortu'));
    }

    public function update(Request $request){
        $ortu = Ortu::class::find($request->id)->update([
            'nama_ortu' => $request->nama_ortu,
            'nama_anak' => $request->nama_anak,
            'alamat' => $request->alamat,
            'kontak_wa' => $request->kontak_wa,
        ]);

        return redirect('/ortu');
    }

    public function delete($id){
        $ortu = Ortu::class::find($id)->delete();
        return redirect('/ortu');
    }

    public function detail($id){
        $ortu = Ortu::where('id', $id)->first();
        $perubahan = Perubahan::all();
        return view ('content.ortu_detail', compact('ortu','perubahan'));
    }

    public function create_detail($id){
        $ortu = Ortu::find($id);
        return view('content.ortu_create_detail', compact('ortu'));
    }
    
    public function store_detail(Request $request){
        $perubahan = Perubahan::create([
            'ortu_id' => $request -> ortu_id,
            'progress' => $request -> progress,
        ]);
        
        return redirect('/ortu');
    }

    public function delete_detail($id){
        $perubahan = Perubahan::class::find($id)->delete();
        return redirect()->back();
    }
}
