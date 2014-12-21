<?php namespace Riiingme\Groupe\Repo;

interface GroupeInterface {

    public function getAll();
    public function find($id);
}