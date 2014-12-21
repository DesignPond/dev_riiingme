<?php namespace App\Type\Repo;

interface TypeInterface {

    public function getAll();
    public function find($id);

}