<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;



class PageController extends Controller
{
    public function index(){
      $user = Auth::user();
      return view('pages/home', compact('user'));
    }

    public function results(){
      // https://api.behance.net/v2/projects?q=motorcycle&client_id=yCQWwt3cYIsMRrkm6clXCyFywg3pkUi7


      $client = new Client(['verify' => 'C:\MAMP\bin\php\php7.2.1\cacert.pem']);
      $res = $client->request('GET','https://api.behance.net/v2/projects?q=motorcycle&client_id=yCQWwt3cYIsMRrkm6clXCyFywg3pkUi7');
      $data = $res->getBody();
      $data = json_decode($data);
      $filteredData = [];

      foreach($data->projects as $project){
        $fields = $project->fields;

        if(in_array("UI/UX", $fields) || in_array("Graphic Design", $fields)){
          array_push($filteredData, $project);
        }
      }
      // return count($filteredData);


      $user = Auth::user();
      return view('pages/results', compact('user', 'filteredData'));
    }



}
