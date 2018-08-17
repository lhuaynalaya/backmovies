<?php namespace App\Repositories;

use App\Repositories\Eloquent\Repository;

class Director extends Repository {

  function model()
  {
    return 'App\Models\Director';
  }
}