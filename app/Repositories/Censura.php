<?php namespace App\Repositories;

use App\Repositories\Eloquent\Repository;

class Censura extends Repository {

  function model()
  {
    return 'App\Models\Censura';
  }
}