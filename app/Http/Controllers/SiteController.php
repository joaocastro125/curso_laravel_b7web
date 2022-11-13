<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function welcome(){
        


        $data=[
        'name'=>"joao",
        'html'=>"<strong style='color:red'>Negrito</strong>",
           'ingredientes'=>[
            'farinha',
            'ovo',
            'ovo2',
            'farinha2'

        ]
           
        ];
        
        
        return view('welcome',$data);
    }

    public function index(){
        // passando dados para view 
        $nome="joao";
        $idade=34;
        $data=[
          'nome'=>$nome,
          'idade'=>$idade,  
        ];
        return view('index',$data);
    }
    public function index2(){
        $pessoas = [
            [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),  
                'nome' => 'Alessandro', 
                'birth' => '29/01/90', 
                'idade' => 29],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Bonieky', 
                'birth' => '10/11/1933', 
                'idade' => 90],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Maria', 
                'birth' => '01/01/2020', 
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;
    
        return view('exercicio1', $dados);
    }
    public function index3(){
        $numero=1;
        $url='https://i.pravatar.cc/150?img'.$numero;
        $dados['url']=$url;
        return view('exercicio2',$dados);
    }
    public function include(){
        return view('include');
    }
    public function exit(){
        return 'saiu da página:';
    }
    public function users(Request $r){
        $data2=[
           'usuario'=>$r->id
        ];
        
        return view('usuarios',$data2);
    }
    public function layout(){
        return view('layout');
    }
}
