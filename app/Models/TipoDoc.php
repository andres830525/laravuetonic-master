<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDoc extends Model
{
    protected $table = 'tipo_docs';

    protected $fillable = [
    'nombre',

];
    use HasFactory;

    public function tipodoc()
{
    return $this->hasOne('App\Documento', 'tipodoc_id', 'id');
}
}
