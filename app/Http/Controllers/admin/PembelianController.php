<?php

namespace App\Http\Controllers\admin;

use App\Models\Barang;
use App\Models\User;
use App\Models\Pembelian;
use App\Models\Pelanggan;
use App\Enums\RolesType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function index (){
        $users = User::where('role', '!=', RolesType::admin)->get();
        $barangs = Barang::all();
        $pembelians = Pembelian::all();
        return view('Admin.Pembelian.index', compact('users', 'barangs', 'pembelians'));
    }

    public function create (){
        $users = User::where('role', '!=', RolesType::admin)->get();
        $barangs = Barang::all();
        $pembelians = Pembelian::all();
        return view('Admin.Pembelian.create', compact('users', 'barangs', 'pembelians'));
    }

    
    public function store(Request $request){
        $validated = $request->validate([
            'tanggal_pembelian' => 'required|date',
            'total_harga' => 'required|numeric',
            'barang_id' => 'required|exists:barang,id',
            'users_id' => 'required|exists:users,id',
        ]);
        
        $barang = Barang::findOrFail($validated['barang_id']);

        DB::beginTransaction();
        try {
            Pembelian::create([
                'tanggal_pembelian' => $validated['tanggal_pembelian'],
                'total_harga' => $barang->harga,
                'barang_id' => $validated['barang_id'],
                'users_id' => $validated['users_id'],
            ]);
            DB::commit();
            return redirect()->route('pembelian.index')->with('success', 'Pembelian successfully added');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Failed to add pembelian');         
        }
    }

    public function show (Pembelian $pembelian){
        $users = User::where('role', '!=', RolesType::admin)->get();
        $barangs = Barang::all();
        return view('Admin.Pembelian.view', compact('pembelian', 'users', 'barangs'));
    }

    public function edit (Pembelian $pembelian){
        $users = User::where('role', '!=', RolesType::admin)->get();
        $barangs = Barang::all();
        $pembelians = Pembelian::all();
        return view('Admin.Pembelian.edit', compact('pembelian', 'users', 'barangs'));
    }

    public function update (Request $request, Pembelian $pembelian){
        $validated = $request->validate([
            'tanggal_pembelian' => 'required|date',
            'total_harga' => 'required|numeric',
            'barang_id' => 'required|exists:barang,id',
            'users_id' => 'required|exists:users,id',
        ]);

        DB::beginTransaction();
        try {
            $pembelian->update($validated);
            DB::commit();
            return redirect()->route('pembelian.index')->with('success', 'Pembelian successfully updated');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Failed to update pembelian');         
        }
    }

    public function destroy (Pembelian $pembelian){
        DB::beginTransaction();
        try {
            $pembelian->delete();
            DB::commit();
            return redirect()->route('pembelian.index')->with('success', 'Pembelian successfully deleted');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Failed to delete pembelian');         
        }
    }
}
