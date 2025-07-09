<?php
// app/Models/Produto.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // campos que podem ser preenchidos em massa
    protected $fillable = ['nome', 'descricao', 'preco', 'categoria_id'];

    // cada produto pertence a uma categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
