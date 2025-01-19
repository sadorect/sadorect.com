<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Add your dashboard data here
        $stats = [
            'users' => User::count(),
            'portfolio_items' => Portfolio::count(),
            //'services' => Service::count()
        ];
        
        return view('admin.dashboard', compact('stats'));
    }
}
