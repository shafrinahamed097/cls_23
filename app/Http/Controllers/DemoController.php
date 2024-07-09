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


}
