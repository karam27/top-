<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{

public function index()
{
    return view('site1.index');
}
public function about()
{
    return view('site1.about');
}
public function contact()
{
    return view('site1.contact');
}
public function contact_form()
{
    return view('sit1.contact_form');
}
public function post()
{
    return view('site1.post');
}
public function post(){
    return view('about');

}
}
