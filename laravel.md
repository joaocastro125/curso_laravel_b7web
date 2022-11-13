comentario no blade 
{----}
para incluir um componente
@include('components.components')
@include('components.components',['name'=>'components1'])

variantes 
@includeif vai verificar se exite 
@includewhen -vai testar true (apareça ) ou false(desapareça)
@includeUnless -vai ternar o contrario @includewhen
@includeFirst - vai verificar se existe o primeiro

fazendo um apelido no laravel 
<x-teste>
</x-teste>


