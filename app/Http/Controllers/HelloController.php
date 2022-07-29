<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //

    public function sayhello()
    {

        $name = "Ronak";
        $age = 18;
        $choice = 'blue1';
        $color = ['red','black',12,51,11,45.5,88.66];

         return view('hello',['sname'=>$name,
                               'age'=>$age,
                               'choice'=>$choice,
                               'color'=>$color,

        ]);



        //return '<h1>sayhello from Controller call</h1>';
    }
}
