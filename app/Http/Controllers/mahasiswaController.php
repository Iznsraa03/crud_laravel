<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kumis;

class mahasiswaController extends Controller
{
    public function index(){
        return view('mahasiswa',['title' => 'Hallo','kumis' => kumis::all()]);
    }
    public function kumis(){
        return view('nasiKumis');
    }
    public function kirim(request $request){
        $validateData = $request->validate([
            'nama' => 'required',
            'nim' =>'required',
            'jurusan' => 'required'
        ]);
        kumis::create($validateData);
        return redirect('/');
    }
    public function edit($id){
        $mahasiswa = kumis::find($id);
        return view('edit',[
            'mahasiswa' => $mahasiswa
        ]);
    }
    public function update(Request $request, $id){
        $mahasiswa = kumis :: find($id);
        $validateData = $request->validate([
            'nama' => 'required',
            'nim' =>'required',
            'jurusan' => 'required'
        ]);
        kumis::where('id',$mahasiswa->id)->update($validateData);
        return redirect('/');
    }

    public function hapus($id){
        $mahasiswa = kumis::find($id);
        kumis::destroy($mahasiswa->id);
        return redirect('/');
    }
}
