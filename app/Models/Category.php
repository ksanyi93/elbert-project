<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $guarded=[];

    function articles(){
        return $this->hasMany(Article::class);  //kategória tulajdonolja a cikkeket,ő a szülő
    }
}
