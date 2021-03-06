<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Boisson;

class monControleur extends Controller
{
  public function home(Request $request)
  {
    $boissons = DB::table('boissons')->get();

    return view('welcome', ["boissons" => $boissons]);
  }

  public function mesIngredients(Request $request)
  {
    return view('ingredients');
  }

  public function mesRecettes(Request $request)
  {
    return view('recettes');
  }

  public function monMatos(Request $request)
  {
    return view('materiel');
  }

  public function monMonayeur(Request $request)
  {
    return view('monnayeur');
  }
}
