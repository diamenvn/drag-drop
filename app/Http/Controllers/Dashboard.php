<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function __construct(){
      date_default_timezone_set("Asia/Ho_Chi_Minh");
    }

    public function Drag(){
      return view('welcome');
    }

}
