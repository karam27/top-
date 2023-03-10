<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
public function index()
{
    $title='This is new Title';
    $desc='Graphic Artist';
    $portfolios=[
        [1,'LOG CABIN','Lorem 1','cabin.png'],
        [2,'TASTY CAKE','Lorem 2','cake.png'],
        [3,'CIRCUS TENT','Lorem 3','circus.png'],
            ];
    return view('site2.index',compact('title','desc','portfolios'));
}
public function portfolio()
{

    return view('site2.portfolio');
}
public function about()
{
    return view('site2.about');
}
public function contact()
{
    return view('site2.contact');
}
public function contact_submit()
{
    return view('site2.contact_submit');
}
}
