<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

        //
        function index()  {
            $mahasiswa = Mahasiswa::paginate(5);
            return view('mahasiswa.index', compact('mahasiswa'));

        }

        function create(){
            $mahasiswa = new Mahasiswa;
            return view('mahasiswa.create', compact('mahasiswa'));
        }
        function store(Request $request){
            Mahasiswa::create($request->all());
            return redirect()->route('mahasiswa.index')->with('status', 'Mahasiswa berhasil dibuat');
        }

        function edit(Mahasiswa $mahasiswa){
            return view('mahasiswa.edit', compact('mahasiswa'));
        }
        function update(Request $request, Mahasiswa $mahasiswa){
            $mahasiswa->update($request->all());
            return redirect()->route('mahasiswa.index')
            ->with('status','Mahasiswa berhasil diubah');
        }

        function destroy(Mahasiswa $mahasiswa){
            $mahasiswa->delete();
            return redirect()->route('mahasiswa.index')
            ->with('status','Mahasiswa berhasil dihapus');
        }
}

