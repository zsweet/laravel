<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function about(){
    	return view('about');

    }
}


/*

上面对应的基础view
<!-->
<!DOCTYPE html>
<html>
  <head>
    <title>Myweb</title>
  </head>
  <body style="margin:0;padding:0;">
      # header    
      <div style="padding:10px 50px 10px 50px;border-bottom: 1px solid #eeeeee;">
          <div style="display:inline-block;">
              <a href="{{ route('home') }}"><h2>Myweb</h2></a>
          </div>

          <div style="display:inline-block;margin-left:20px;">
              <a href="{{ route('about') }}">about</a>
          </div>
      </div> 

      <div style="text-align:center;">
          @yield('content')
      </div>


      # footer 
      <div style="padding:10px 50px 10px 50px;background-color:gray;">
          <center> 
            <p>contact me : q1783579677</p>
          </center>
      
      </div> 
  </body>
</html>

</!-->
*/