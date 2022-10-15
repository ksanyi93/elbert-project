<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded=[];

    function category(){
        return $this->belongsTo(Category::class); //deklarálom az inverz kapcsolatot,ő a gyermek
    }
}
