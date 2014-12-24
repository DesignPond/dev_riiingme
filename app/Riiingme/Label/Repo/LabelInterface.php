<?php namespace Riiingme\Label\Repo;

interface LabelInterface {

    public function find($id);
    public function findByUser($user);
    public function create(array $data);
    public function delete($id);

}