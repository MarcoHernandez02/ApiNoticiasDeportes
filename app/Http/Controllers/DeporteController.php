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

    public function mostrarNoticias1(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('POST', 'https://mexi-news.herokuapp.com/api/view');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $news = [];
        foreach ($resultado['data'] as $new) {
            $news[] = [
                'id' => $new['id'],
                'name' => $new['name'],
                'author' => $new['autor'],
                'title' => $new['title'],
                'description' => $new['description'],
                'url' => $new['url'],
                'urlToImage' => $new['urlToImage'],
                'publishedAt' => $new['publishedAt'],
                'content' => $new['content']
            ];
        }

        return $news;
    }

    public function apiPais1()
    {
        return view('pais' , ['news'=>$this->mostrarNoticias1()]);
    }

    public function mostrarNoticias2(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://apisnews.herokuapp.com/api/ver');
        $data = json_decode($response->getBody()->getContents(), true);

        $values=[];

        foreach ($data['unidades'] as $value) {
            $values[]=[
                'id' => $value['id'],
                'name' => $value['name'],
                'author' => $value['author'],
                'title' => $value['title'],
                'description' => $value['description'],
                'url' => $value['url'],
                'urlToImage' => $value['urlToImage'],
                'publishedAt' => $value['publishedAt'],
                'content' => $value['content']
            ];
        }
        return $values;
        }
        
    public function apiMundo1()
    {
        return view('mundo' , ['values'=>$this->mostrarNoticias2()]);
    }
        

}