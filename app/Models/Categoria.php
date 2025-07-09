<?php
// app/Models/Categoria.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // campos que podem ser preenchidos em massa
    protected $fillable = ['nome'];

    // uma categoria tem muitos produtos
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
