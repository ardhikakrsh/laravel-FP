<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index (){
        $barangs = Barang::all();
        return view('Admin.Barang.index', compact('barangs'));
    }

    public function create (){
        return view('Admin.Barang.create');
    }

    public function show (Barang $barang){
        return view('Admin.Barang.view', compact('barang'));
    }

    public function store (Request $request){
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'ukuran' => 'required|numeric',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/'), $filename);
            $validated['foto'] = $filename;
        }

        DB::beginTransaction();
        try {
            Barang::create($validated);
            DB::commit();
            return redirect()->route('barang.index')->with('success', 'Product successfully added');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Failed to add product');         
        }
    }
    
    public function edit (Barang $barang){
        return view('Admin.Barang.edit', compact('barang'));
    }

    public function update (Request $request, Barang $barang){
        $validated->$request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'ukuran' => 'required|numeric',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/'), $filename);
            $validated['foto'] = $filename;
        }

        DB::beginTransaction();
        try {
            $barang->update($validated);
            DB::commit();
            return redirect()->route('Admin.Barang.index')->with('success', 'Product successfully updated');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Product update failed');         
        }
    }
    
    public function destroy (Barang $barang){
        DB::beginTransaction();
        try {
            $barang->delete();
            DB::commit();
            return redirect()->back()->with('success', 'Product successfully deleted');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Product deletion failed');
        }
    }                                               

}
