<?php namespace Riiingme\Groupe\Entities;

use Droit\Common\BaseModel as BaseModel;

class Groupe extends BaseModel{

    /**
     * Fillable columns
     *
     * @var array
     */
    protected $fillable = array('titre', 'status');

}