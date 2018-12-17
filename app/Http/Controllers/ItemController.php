<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(Request $request, $image_info){
      $saveData = [
        "image_info" => $image_info,
        "image_url" => $request->image_url,
        "project_id" => 1 
      ];
      //eloquent
      $item = Item::create($saveData);
      return back();
    }


    public function destroy($image_info){
      $item = Item::where('image_info', $image_info)->delete();
      return back();
    }
}
