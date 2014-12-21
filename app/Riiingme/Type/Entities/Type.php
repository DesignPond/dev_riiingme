<?php namespace Riiingme\Type\Entities;

use Droit\Common\BaseModel as BaseModel;

class Type extends BaseModel{

    /**
     * No timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Fillable columns
     *
     * @var array
     */
    protected $fillable = array('titre');

}