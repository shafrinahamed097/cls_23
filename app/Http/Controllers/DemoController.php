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
        return 1;
    }
}
