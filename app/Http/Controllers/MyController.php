<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyModel;

class MyController extends Controller
{
   public function check(){
      $data = MyModel::all();
      return view("utenti", compact("data"));
   }

   public function show($id){
      $user = MyModel::find($id);
      return view("utente", compact("user"));
   }
}