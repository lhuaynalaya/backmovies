<?php namespace App\Models;

use App\Traits\Audit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelicula extends Model {
  use Audit;
  Use SoftDeletes;

  public $incrementing = false;
  public $table = 'peliculas';
  public $hidden = [
      'created_at',
      'updated_at',
      'deleted_at'
  ];
  protected $dates = ['deleted_at'];

  public $fillable = [
    'id',
    'nombre',
    'duracion_horas',
    'duracion_minutos',
    'sinopsis',
    'pais_id',
    'pais_nombre',
    'imagen character',
    'idioma_id',
    'idioma_codigo',
    'censura_id',
    'censura_nombre',
    'conpania_id',
    'conpania_nombre',
    'ranking',
    'popularidad',
    'voto'
  ];
}