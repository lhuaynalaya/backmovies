<?php
namespace App\Services;

use App\Repositories\Censura as CensuraRepository;

class Censura {
    protected $censuras;

    public function __construct(CensuraRepository $censuras) {
        $this->censuras = $censuras;
    }

    public function all() {
      return $this->censuras->all();
    }

    public function store($data){
        return $this->censuras->create($data);
    }

    public function update($data, $id){
        return $this->censuras->update($data, $id);
    }

    public function delete($id){
        return $this->censuras->delete($id);
    }

    public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc') {
        return $this->censuras->paginate($perPage, $columns, $order_type);
    }

    public function find($id, $columns = array('*')) {
        return $this->censuras->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*')) {
        return $this->censuras->findBy($field, $value, $columns);
    }
}