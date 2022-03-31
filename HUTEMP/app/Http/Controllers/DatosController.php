<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatosController extends Controller
{
    public function index(){
        return view('hutemp.index');
    }
    public function documentacion(){
        return view('hutemp.documentacion');
    }

    public function listado(){
        $datos = DB::table( 'datos' ) -> get();
        return view('hutemp.listado',[
            'datos'=> $datos
        ]);
    }
    public function monitoreo(){
        $menorT = DB::table( 'datos' )->orderBy('temperatura', 'ASC')-> get();
        $mayorT = DB::table( 'datos' )->orderBy('temperatura', 'DESC')-> get();
        $menorH = DB::table( 'datos' )->orderBy('humedad', 'ASC')-> get();
        $mayorH = DB::table( 'datos' )->orderBy('humedad', 'DESC')-> get();
        $fecha = DB::table( 'datos' )->orderBy('fecha', 'ASC')-> get();
        $datos = DB::table( 'datos' ) -> get();
        return view('hutemp.monitoreo',[
            'menorT' => $menorT,
            'mayorT' => $mayorT,
            'menorH' => $menorH,
            'mayorH' => $mayorH,
            'fecha' => $fecha,
            'datos'=> $datos
        ]);
    }
}
