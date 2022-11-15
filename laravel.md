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

migration - > para rodar -> php artisan migrate 
para criar php artisan make:migration nome da migration 

fresh:atualiza 
rollback: Você pode reverter a transação através do rollBackmétodo:

alter-> faz uma alteração da tabela na função anomina blueprint é uma receita 
 make:migrate alter_products_table
essa é uma boa tratica 
para adcionar um make:migrate add_column_min_table_products

para verificar o status 
php artisan make:status



