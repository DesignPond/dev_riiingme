<?php namespace App\Link\Repo;

interface LinkInterface {

    public function getAll();
    public function find($id);
    public function findByHost($id);
}