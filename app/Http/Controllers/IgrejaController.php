<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Igreja;

class IgrejaController extends Controller
{
        public function index(){

            $list = Igreja::all();

            return view('adminlte::igrejas/index',compact('list'));         
        }
}
