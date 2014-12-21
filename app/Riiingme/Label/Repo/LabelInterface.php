<?php namespace App\Label\Repo;

interface LabelInterface {

    public function getAll();
    public function find($id);
    public function create(array $data);
}