<?php namespace App\User\Repo;

interface UserInterface {

    public function getAll();
    public function find($id);

}