<?php
namespace App\Services;

use App\Repositories\Idioma as IdiomaRepository;

class Idioma {
    protected $idiomas;

    public function __construct(IdiomaRepository $idiomas) {
        $this->idiomas = $idiomas;
    }

    public function all() {
      return $this->idiomas->all();
    }

    public function store($data){
        return $this->idiomas->create($data);
    }

    public function update($data, $id){
        return $this->idiomas->update($data, $id);
    }

    public function delete($id){
        return $this->idiomas->delete($id);
    }

    public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc') {
        return $this->idiomas->paginate($perPage, $columns, $order_type);
    }

    public function find($id, $columns = array('*')) {
        return $this->idiomas->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*')) {
        return $this->idiomas->findBy($field, $value, $columns);
    }
}