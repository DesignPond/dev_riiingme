<?php namespace Riiingme\Groupe\Entities;

use Riiingme\Common\BaseModel as BaseModel;

class Groupe extends BaseModel{

    /**
     * Fillable columns
     *
     * @var array
     */
    protected $fillable = array('titre', 'status');

    /**
     * Validation rules
     */
    protected static $rules = array(
    );

    /**
     * Validation messages
     */
    protected static $messages = array(
    );

}