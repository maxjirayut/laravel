<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;



class UserController extends Controller
{

  function __construct()
  {
      # code...
  }
  public function index()
  {
      //return 'Hello From Song Controller';
      // return 'Hello';
      $his = DB::table('history')->get();
      var_dump($his);
      die();
      }
}
