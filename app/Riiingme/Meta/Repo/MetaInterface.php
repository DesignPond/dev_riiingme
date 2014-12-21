<?php namespace App\Meta\Repo;

interface MetaInterface {

    public function getAll();
    public function find($id);
    public function create(array $data);
}