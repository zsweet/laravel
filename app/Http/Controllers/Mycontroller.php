<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    public function young(){
      return 'I`m young!!!';
    }
}
