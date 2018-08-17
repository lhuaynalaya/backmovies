<?php
namespace App\Services;

use App\Repositories\Pais as PaisRepository;

class Pais {
    protected $paiss;

    public function __construct(PaisRepository $paiss) {
        $this->paiss = $paiss;
    }

    public function all() {
      return $this->paiss->all();
    }

    public function store($data){
        return $this->paiss->create($data);
    }

    public function update($data, $id){
        return $this->paiss->update($data, $id);
    }

    public function delete($id){
        return $this->paiss->delete($id);
    }

    public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc') {
        return $this->paiss->paginate($perPage, $columns, $order_type);
    }

    public function find($id, $columns = array('*')) {
        return $this->paiss->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*')) {
        return $this->paiss->findBy($field, $value, $columns);
    }
}