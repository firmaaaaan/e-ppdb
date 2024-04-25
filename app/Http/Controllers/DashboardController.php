<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
    }
    public function indexAdmin() {
        return view('admin-edashboard');
    }
    public function error(){
        return view('error');
    }
}
