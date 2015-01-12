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

    /**
     * types belongs to groupes
     */
    public function groupe_type()
    {
        return $this->belongsToMany('\Riiingme\Type\Entities\Type', 'groupe_type', 'groupe_id', 'type_id');
    }

}