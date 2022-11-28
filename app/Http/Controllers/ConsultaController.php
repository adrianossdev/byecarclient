<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function autenticar(Request $request){
       // return view('welcome');
       //dd($request->get('email'));
       //método para consultar a api e recuperar o token JWT de autenticação.
        $response = Http::post('localhost:8000/api/login',
    [
        'email' => $request->get('email'),
        'password' => $request->get('password')
    ]
   );
    //dd($response);
    //retornando o token para a view de consulta;
    return view('consulta', ['token' => $response]);

    }

    public function consultar(Request $request){

    $tokenconsulta = $request->get('token'); //recuperando o token do front(view do blade) por meio da Request e atribuindo a uma variável;
   // $response = Http::withHeaders([
      //  'Content-Type' => 'application/json',
      //  'Authorization' => 'Bearer '+ $tokenconsulta
   // ])->get('localhost:8000/api/cliente');

    $response = Http::withToken($tokenconsulta)->get('localhost:8000/api/cliente'); //consultando a api fake passando o JWT no cabeçalho;
   //dd($response);

   return $response->json();//retornando a resposta da consulta da api no formato JSON para a view(front);
   }
}
