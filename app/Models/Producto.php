<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    # Por defecto Laravel tomaría "cancion" así que mejor indicamos el nombre
    protected $table = "productos";
    # No queremos que ponga updated_at ni created_at
    public $timestamps = false;

    public function scopeNombre($query, $nombre)
    {
        if($nombre)
            return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeDescripcion($query, $descripcion)
    {
        if($descripcion)
            return $query->where('descripcion', 'LIKE', "%$descripcion%");
    }

    public function scopePrecio($query, $precio)
    {
        if($precio)
            return $query->where('precio', '<=', "%$precio%");
    }
}
