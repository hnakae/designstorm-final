<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class AccountController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $projectsTotal = Project::all()->count();

    // get project names

    // extra make route api that returns json data and use ajax to retrieve data (extra mile)

    return view('account/dashboard', compact('projectsTotal'));
  }
}
