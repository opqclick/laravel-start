<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $commonData=[
            'title' => 'Administrator',
            'page_title' => 'Dashboard'
        ];

        return view('administrator.dashboard')->with('commonData', $commonData);
    }
}
