<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Página Home</title>
</head>
<body>
  {{--
   
    
    --}}
  
    <h1>Seja Bem vindo</h1>
    esse !! $variavel !! para utilizar html no blade
   <p>{!!$html!!}</p>
   condicional com o ternário
     <h1>{{$name==='joão'?'sim':'nao'}}</h1>
     utilizando a diretiva 
       o usuário é joão?
     @if($name==='')
      
      <h1>É João</h1>
     @elseif($name==='joão')
        <h2>É alessandro</h2>
      @else
        <h2>nenhum dos dois</h2>
     @endif  
     
  

   {{-- estrutura de repetição--}}

   @for($i=0; $i<count($ingredientes);$i++)
    {{$ingredientes[$i]}}
   <p>Messagem de <strong> Fulano</strong> </p>
   <p>Essa é uma Messagem qualquer</p>
   
   <hr/>
    
   @endfor
   @foreach($ingredientes as $ingrediente)
  <p>
   
    {{$ingrediente}}
    @component('components.botao')
       @slot('href')
       http://google.com.br
       @endslot
    @slot('cor')
      blue
    @endslot
    Editar
    @endcomponent
    @component('components.botao')
    @slot('href')
       http://google.com.br
       @endslot
    @slot('cor')
      red
    @endslot
    Deletar
    @endcomponent
    
    

  </p> 
   @endforeach
  
</body>
</html>

