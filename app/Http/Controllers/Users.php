<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index(){
        return['name'=>'joshua'];
    }
    function show($id){
        echo "you are welcome sir josh" .$id;
    }
}
