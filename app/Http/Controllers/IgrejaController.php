<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Igreja;

class IgrejaController extends Controller
{
    private $igreja;

    public function __construct(Igreja $igreja )
    {
        $this->igreja = $igreja;
    }
    public function index(){

        $list =  $this->igreja->all();

        return view('adminlte::igrejas/index',compact('list'));         
    }
}
