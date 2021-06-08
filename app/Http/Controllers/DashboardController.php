<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
      if(Auth::user()->hasRole('user')){
          return view('user.userdash');
      }elseif(Auth::user()->hasRole('carrier')){
          return view('carrier.carrierdash');
      }elseif(Auth::user()->hasRole('admin')){
          return redirect()->route('admin.index');
      }
    }

    public function myprofile()
    {
        return view('user.myprofile');
    }

    public function order()
    {
      return view('carrier.order');
    }
}
