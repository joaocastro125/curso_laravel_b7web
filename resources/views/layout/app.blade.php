<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Layouts</title>
</head>
<body style="margin:0; padding:0px;">
    @section('header')
    {{-- vai mostrar em tela --}}
    @show
    <main style="padding: 20px; height:54vh ;">
      {{-- redenriza o conteudo  --}}
      @yield('content')
    </main>
    @section('footer')
    @show
</body>
</html>