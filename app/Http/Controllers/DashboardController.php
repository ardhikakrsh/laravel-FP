<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        $totalUsers = User::count();
        $totalProducts = Barang::count();
        $totalOrders = Pembelian::count();
        $totalCustomers = Pelanggan::count();
        
        $recentUsers = $this->getRecentUsers();
        $recentOrders = $this->getRecentOrders();

        return view('Admin.dashboard', compact('totalUsers', 'totalProducts', 'totalOrders', 'totalCustomers', 'recentUsers', 'recentOrders'));
    }

    private function getRecentUsers()
    {
        return User::orderBy('created_at', 'desc')->take(5)->get();
    }

    private function getRecentOrders()
    {
        return Pembelian::orderBy('created_at', 'desc')->take(5)->get();
    }
    
}
