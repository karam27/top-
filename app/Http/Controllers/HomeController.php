<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
 public function index()
 {
    return 'karam';
 }

 public function user($user=null)
{
    return 'User'.$user;
}

}
