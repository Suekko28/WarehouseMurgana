<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $company = DB::table('companies')->get();
        $tools = DB::table('items')->get();
        $user = DB::table('users')->get();
        return view('dashboard', compact('company', 'tools', 'user') );
    }
}
