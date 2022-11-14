<?php
/**
 * resource e faz uma copia com todas as rotas 
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Post;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mostrar todos
        $post_read=Post::all();
        return $post_read;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    // vai só exibir um formulário 
    {
        $new_post=[
            'title'=>'meu primeiro post',
            'content'=>'messagem qualquer',
            'author'=>'joao'
        ];
        // forma tradicional
        // $post=new Post($new_post);
        $post=new Post();
        $post->title='meu segundo post';
        $post->content='meu segundo post';
        $post->author='meu joão';
        $post->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //receberá um novo recurso
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_read=Post::find($id);
        return $post_read;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new_update=Post::find($id)->update([
            'author'=>'joão'
        ]);
        // $new_update->title='post atualizado';
        // $new_update::update()
   
        return $new_update;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Post::find($id)->delete();
        /*
         deleta todos os registros
       $delete=Post::all()->delete();
        busca todas informações do banco 
       $post_delete=Post::find(1);
       verifica de exite 
      if($post_delete){
      return $post_delete->delete();
        return $delete;
        */
    }
}