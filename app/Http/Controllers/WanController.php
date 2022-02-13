<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WanController extends Controller
{
   public function home(){
       return view('home');
   } 

   public function react(Request $date){
       return $date->lastname;
   }
 
}


