<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
/*    public function home()
    {
        ddd(resolve('App\Example'), resolve('App\Example'));
    }*/

    public function home()
    {
        return View::make('welcome');
    }




}
