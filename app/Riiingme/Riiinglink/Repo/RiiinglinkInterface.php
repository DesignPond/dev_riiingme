<?php namespace App\Riiinglink\Repo;

interface RiiinglinkInterface {

    public function getAll();
    public function find($id);
    public function findByHost($id);
}