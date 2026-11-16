<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy',
            'The Walking Dead',
            'The Rain',
            'The Last of Us'

        ];
         
         


        //return view('listar-series', compact('series'));
        
      // return view('listar-series',[
        //    'series' => $series
        //]);
          

       
    }
}
