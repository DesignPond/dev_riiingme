<?php namespace App\Meta\Repo;

interface LinkmetaInterface {

    public function getAll();
    public function findByLink($riiinglink);
    public function find($id);
    public function getRang($riiinglink_id,$groupe_id);
}