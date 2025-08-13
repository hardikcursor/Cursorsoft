<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontentController extends Controller
{
       public function index()
    {
        return view('Fontent.index');
    }
}
