<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class postController extends Controller
{
    public function create(Request $request)
    {
        $new_post = [
            'title' => 'meu primeiro post',
            'content' => 'messagem qualquer',
            'author' => 'joao'
        ];
        // forma tradicional
        // $post=new Post($new_post);
        $post = new Post();
        $post->title = 'meu segundo post';
        $post->content = 'meu segundo post';
        $post->author = 'meu joão';
        $post->save();


        dd($post);
    }
    public function read(Request $request)
    {
        // verifica se exite 
        $post_read = Post::find(1);
        dd($post_read);
    }
    public function all()
    {
        // busca todas informações do banco 
        $post_read = Post::all();
        return $post_read;
    }
    public function update(Request $request)
    {
        // verificando existe se existir alterar 
        // $new_update=Post::find(1);
        //verificando se encontra faze

        $new_update = Post::where('id', '>', 0)->update([
            'author' => 'joão'
        ]);
        // $new_update->title='post atualizado';
        // $new_update::update()

        return $new_update;
    }

    public function exit(Request $request)
    {
        $delete = Post::where('id', '>', 0)->delete();
        // deleta todos os registros
        // $delete=Post::all()->delete();
        // busca todas informações do banco 
        //    $post_delete=Post::find(1);
        // verifica de exite 
        //if($post_delete){
        //return $post_delete->delete();
        //return $delete;
    }


    //       return  'post não encontrado';
    // }
}
