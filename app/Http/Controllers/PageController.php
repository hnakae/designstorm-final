<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Project;


class PageController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth');
  // }
    public function index(){
      $user = Auth::user();
      return view('pages/home', compact('user'));
    }


    public function results(Request $request){
      $search = $request->search;

      // return redirect('/search/'.$search);
      return redirect('/search/'.urlencode($search));
    }

    public function search(Request $request, $keyword){
      $client = new Client(['verify' => 'C:\MAMP\bin\php\php7.2.1\cacert.pem']);

      $res = $client->request('GET', "https://api.behance.net/v2/projects", [
        "query" => [
          "q" => $keyword,
          "client_id" => env('BEHANCE_KEY'),
          "field" => "graphic design"
        ]
      ]);
      $data = $res->getBody();
      $data = json_decode($data);
      $filteredData = $data->projects;

      $itemsArray = Project::where('user_id', Auth::id())->where('active', 1)->first();
      $itemsArray = $itemsArray->items;
      $arrayInfo = [];
      foreach($itemsArray as $image){
        array_push($arrayInfo, $image->image_info);
      }


      $user = Auth::user();
      return view('pages/results', compact('user', 'filteredData', 'keyword', 'arrayInfo'));
    }
}
