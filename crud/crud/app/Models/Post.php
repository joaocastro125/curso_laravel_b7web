<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    protected $fillable=[
        'title','content','author'
    ];
    // softDeletes ele proteje para não ser excluido todos os dados do banco 
    use softDeletes;
    use HasFactory;
   
}
