<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/login');
  }

  public function services()
  {
    return view('front.services.index');
  }

  public function contact()
  {
    return view('front.contact');
  }
}
