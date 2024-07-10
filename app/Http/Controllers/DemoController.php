<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // Response Type String

    function demo1(){
        return "Response Type String";
    }

    // Response Type Int

    function demo2(){
        return 100;
    }

    // Response Type Null
    function demo3(){
        return null;
    }

    // Response Type Boolean
    function demo4(){
        return true;
    }

    // Response Type Array

    function demo5(){
        return array('A', 'B', 'C');
    }

    // Response Type Associative Array

    function  demo6(){
        return array(['name'=>'ostad', 'age'=>20], ['name'=>'ostad1', 'age'=>30]);
    }

    // Response Type Json

    function demo7(){
        return response()->json([['name'=>'Ostad2', 'age'=> 20], ['name'=>'ostad3', 'age'=> 30]]);
    }
     
    // Response message, data, code
    function demo8(){
        return response()->json(['message'=>'Registration Success' , 'data'=>['name'=>'ostad1', 'age'=>20]], status:401);

    }

       // Response Redirect
    function demo9(){
        return redirect('/demo1');
    }

 
// Binary File Response
    function demo10(){
        $path="IMG_7959.JPG";
        return response()->file($path);
    }

    // Download File response

    function demo11(){
        $path="IMG_7959.JPG";
        return response()->download($path);

    }

    // response cookies

    function demo12(){
        return response("Say Hello")->cookie('name', 'ostad1');
    }
    
    // attaching response header

    function demo13(){
        return response ("Hello")->header("my-token",'abc11223');
    }

    // response view

    function demo14(){
        return view('index');
    }


    // -------------------------------------------------------------------------------------

    // Request URL Params

    function demo15(Request $request){
        $a=$request->num1;
        $b=$request->num2;

        return $a+$b;

    }

    // Request Body

    function demo16(Request $request){
        $wholeBody=$request->input();
        $a=$wholeBody['num1'];
        $b=$wholeBody['num2'];
        return $a+$b;
    }

    // Request Header

    function demo17(Request $request){
        $a=$request->header('my_key');
        return $a;
    }
  

    // Request IP

    function demo18(Request $request){
        return $request->ip();
    }

    // Request Cookies

    function demo19(Request $request){
        $myCookies=$request->cookie();
        return $myCookies;

    }





























}
