<?php namespace App\Models;

use App\Traits\Audit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Censura extends Model {
  use Audit;
  Use SoftDeletes;

  public $incrementing = false;
  public $table = 'censuras';
  public $hidden = [
      'created_at',
      'updated_at',
      'deleted_at'
  ];
  protected $dates = ['deleted_at'];

  public $fillable = [
  ];
}