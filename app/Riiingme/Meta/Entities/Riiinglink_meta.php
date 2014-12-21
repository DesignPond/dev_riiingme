<?php namespace Riiingme\Meta\Entities;

use Droit\Common\BaseModel as BaseModel;

class Riiinglink_meta extends BaseModel{

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
    protected $fillable = array('riiinglink_id', 'meta_id');

}