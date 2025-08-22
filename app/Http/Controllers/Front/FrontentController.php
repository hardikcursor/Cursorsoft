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

    public function service()
    {
        return view('Fontent.service');
    }

    public function project()
    {
        return view('Fontent.project');
    }

    public function contact()
    {
        return view('Fontent.contact');
    }
}
