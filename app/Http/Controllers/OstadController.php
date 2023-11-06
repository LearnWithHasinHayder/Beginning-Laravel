<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OstadController extends Controller
{

    function sayHi(){
        return "Welcome to our Laravel Course";
    }

    function hello(){
        return "Hello World";
    }

    function greet($name = "World"){
        return "Hello $name";
    }

    function samplePostRequest(Request $request){
        // return $request->all();
        return $request->input("person");
    }

    function sampleGetRequest(Request $request){
        return "<form method='POST' action='/form'>
        <input type='text' name='person' placeholder='Enter your name'>
        <input type='submit' value='Submit'>
        </form>";
    }

    function testParameters(Request $request){
        return "Param ".$request->input("person");
    }


}

