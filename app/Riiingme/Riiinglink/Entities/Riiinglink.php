<?php namespace Riiingme\Riiinglink\Entities;

use Riiingme\Common\BaseModel as BaseModel;

class Riiinglink extends BaseModel{

    /**
     * Fillable columns
     *
     * @var array
     */
    protected $fillable = array('host_id', 'invited_id');

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

    public function getUserPhotoAttribute($riiinglink)
    {

        if(isset($this->labels))
        {
            $photo = $this->labels->filter(function($item) {
                return $item->type_id == 15;
            })->first();
        }

        return (!empty( $photo->label ) ?  $photo->label : 'avatar.jpg');

    }

    public function getUserNameAttribute($riiinglink)
    {
        $name = '';

        if(isset($this->labels))
        {
            $prenom = $this->labels->filter(function($item) {
                return ($item->type_id == 1 ? $item : '');
            })->first();

            $nom = $this->labels->filter(function($item) {
                return ($item->type_id == 2 ? $item : '');
            })->first();

           $name = (isset($prenom->label) ? $prenom->label : '').' '.(isset($nom->label) ? $nom->label : '');
        }

        return $name;

    }
    /**
     * Invited infos belongs to host user through link
     *
     * @var query
     */
    public function invited(){

        return $this->belongsTo('Riiingme\User\Entities\User','invited_id','id');
    }

    /**
     * Invited infos belongs to host user through link
     *
     * @var query
     */
    public function host(){

        return $this->belongsTo('Riiingme\User\Entities\User','host_id','id');
    }


    /**
     * Metas through labels belongs to user
     *
     * @var query
     */
    public function labels(){

        return $this->belongsToMany('Riiingme\Label\Entities\Label', 'metas');
    }

    /**
     * Metas for riiinglink
     *
     * @var query
     */
    public function metas(){

        return $this->belongsToMany('Riiingme\Meta\Entities\Meta');
    }

}