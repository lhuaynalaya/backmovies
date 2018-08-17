<?php
namespace App\Services;

use App\Repositories\Compania as CompaniaRepository;

class Compania {
    protected $companias;

    public function __construct(CompaniaRepository $companias) {
        $this->companias = $companias;
    }

    public function all() {
      return $this->companias->all();
    }

    public function store($data){
        return $this->companias->create($data);
    }

    public function update($data, $id){
        return $this->companias->update($data, $id);
    }

    public function delete($id){
        return $this->companias->delete($id);
    }

    public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc') {
        return $this->companias->paginate($perPage, $columns, $order_type);
    }

    public function find($id, $columns = array('*')) {
        return $this->companias->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*')) {
        return $this->companias->findBy($field, $value, $columns);
    }
}