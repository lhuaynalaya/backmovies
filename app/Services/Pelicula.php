<?php
namespace App\Services;

use App\Repositories\Pelicula as PeliculaRepository;

class Pelicula {
    protected $peliculas;

    public function __construct(PeliculaRepository $peliculas) {
        $this->peliculas = $peliculas;
    }

    public function all() {
      return $this->peliculas->all();
    }

    public function store($data){
        return $this->peliculas->create($data);
    }

    public function update($data, $id){
        return $this->peliculas->update($data, $id);
    }

    public function delete($id){
        return $this->peliculas->delete($id);
    }

    public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc') {
        return $this->peliculas->paginate($perPage, $columns, $order_type);
    }

    public function find($id, $columns = array('*')) {
        return $this->peliculas->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*')) {
        return $this->peliculas->findBy($field, $value, $columns);
    }
}