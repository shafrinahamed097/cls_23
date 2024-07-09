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
    function demo10()
{

}

}
