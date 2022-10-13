<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('subscriber');
    }

    public function index(){
        return view('admin.dashboard.home');
    }

    public function permission(){
        return view('admin.dashboard.permission');
    }
}
