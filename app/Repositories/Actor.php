<?php namespace App\Repositories;

use App\Repositories\Eloquent\Repository;

class Actor extends Repository {

  function model()
  {
    return 'App\Models\Actor';
  }
}