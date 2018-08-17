<?php namespace App\Repositories;

use App\Repositories\Eloquent\Repository;

class Compania extends Repository {

  function model()
  {
    return 'App\Models\Compania';
  }
}