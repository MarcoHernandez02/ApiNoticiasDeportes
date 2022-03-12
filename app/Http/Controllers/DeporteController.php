<?php

namespace App\Http\Controllers;

use Database\Seeders\deportesSeeder;
use Illuminate\Http\Request;
use App\Models\Deporte;

class DeporteController extends Controller
{
    // -- Mostrar noticias 
    public function mostrarNoticias()
    {
        $Deporte = Deporte::all();
        $notiDepor = [];
        foreach($Deporte as $Deporte){
            $notiDepor[]=[
                'titulo'=>$Deporte->titulo,
                'contenido'=>$Deporte->contenido,
                'autor'=>$Deporte->autor,
                'imagen'=>$Deporte->imagen
            ];
        }
            return view('index', ['deportes'=>$notiDepor]);
    }

    public function apiDeporte1()
    {
        $Deporte = Deporte::all();  
           
        return response()->json(["estatus" => "ok", "Deporte" => $Deporte]);
    }
}
