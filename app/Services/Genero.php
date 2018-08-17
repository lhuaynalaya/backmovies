<?php
namespace App\Services;

use App\Repositories\Genero as GeneroRepository;

class Genero {
    protected $generos;

    public function __construct(GeneroRepository $generos) {
        $this->generos = $generos;
    }

    public function all() {
      return $this->generos->all();
    }

    public function store($data){
        return $this->generos->create($data);
    }

    public function update($data, $id){
        return $this->generos->update($data, $id);
    }

    public function delete($id){
        return $this->generos->delete($id);
    }

    public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc') {
        return $this->generos->paginate($perPage, $columns, $order_type);
    }

    public function find($id, $columns = array('*')) {
        return $this->generos->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*')) {
        return $this->generos->findBy($field, $value, $columns);
    }
}