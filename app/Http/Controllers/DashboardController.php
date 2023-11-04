<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }

    public function dataPeserta(){
        return view('dashboard.dataPeserta', [
            'title' => 'Data Peserta'
        ]);
    }

    public function buktiPembayaran(){
        return view('dashboard.buktiPembayaran', [
            'title' => 'Bukti Pembayaran'
        ]);
    }
}
