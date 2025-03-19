<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrarController extends Controller
{
    public function entrar(){
        return view('site.entrar');
    }
}

?>