<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteIndexController extends Controller
{
    /** 
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $clientes = [
            ['name' => 'Jacinto', 'idade' => 1],
            ['name' => 'Pinto', 'idade' => 2],
            ['name' => 'Paula', 'idade' => 3],
            ['name' => 'Tejando', 'idade' => 4],
            ['name' => 'Breno', 'idade' => 5],
            ['name' => 'Pedro', 'idade' => 6],
            ['name' => 'AAA', 'idade' => 7],
            ['name' => 'AAA', 'idade' => 8],
            ['name' => 'AAA', 'idade' => 9],
            ['name' => 'AAA', 'idade' => 10],
        ];
        return view('site.index', compact('clientes'));
    }
}
