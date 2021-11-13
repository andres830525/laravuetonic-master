<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';
    protected $fillable = [
    'nombre',
    'descripcion',
    'area_id',
    'fecha_vijencia',
    'tipodoc_id',
    'estado',
    'version',
];
    use HasFactory;

    public function tipodoc()
{
  return $this->belongsTo('App\TipoDoc');
}
}
