<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages/dashboard', [
            'title' => 'Dashboard | Aplikasi Gabut',
            'mhs_count' => Mahasiswa::all()->count()
        ]);
    }
}
