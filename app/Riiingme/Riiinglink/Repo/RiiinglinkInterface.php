<?php namespace Riiingme\Riiinglink\Repo;

interface RiiinglinkInterface {

    public function getAll();
    public function find($id);
    public function findByHost($id);
    public function findInvited($id);
    public function findByHostAndInvited($invited_id,$host_id);
    public function create(array $data);
    public function delete($id);

}