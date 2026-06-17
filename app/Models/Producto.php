<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria_id',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
