<?php

namespace App\Http\Controllers;

use App\Rules\BioLength;
use Illuminate\Http\Request;


class FormsController extends Controller
{
public function form1()
{
    return view('forms.form1');
}
public function form1_submit(Request $request)
{
// dd($request->all());


$name=  htmlspecialchars($request->name);
$age=htmlspecialchars($request->age);
return "welcome $name,your age is $age";

}
public function form2()
{
   return view('forms.form2');
}
public function form2_submit(Request $request)
{
$name=$request->name;
$cv=$request->cv;
$new_name=rand(00000000000000,99999999999999). '_'.time().'_'.rand().'_'.$request->file('cv')->getClientOriginalName();
$request->file('cv')->move(public_path('uploads'), $new_name);
}
public function form3()
{
    return  view('forms.form3');
}
public function form3_submit(Request $req)
{

  $req->validate([

'name'=>'required|min:4|max:20',
'email'=>'required|email',
'password'=>'required|confirmed',
'age'=>'required',
'bio'=>[new BioLength()]
  ]);

}
public function form4()
{
    return view('forms.form4');
}
public function form4_submit(Request $request)
{
    // return dd($request->all());
    $request->validate([
'name'=>'required',
'message'=>'required|max:30',
    ]);
    return 'Done';
}

}
