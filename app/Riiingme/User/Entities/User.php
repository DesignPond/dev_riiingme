<?php namespace Riiingme\User\Entities;

use Droit\Common\BaseModel as BaseModel;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends BaseModel implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait, SoftDeletingTrait;

    /**
     * Dates as carbon objects
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * Metas belongs to user
     *
     * @var query
     */
    public function metas(){

        return $this->hasMany('Riiingme\Meta\Entities\Meta');
    }

    /**
     * Link belongs to user
     *
     * @var query
     */
    public function links(){

        return $this->belongsToMany('Riiingme\Link\Entities\Riiinglink', 'users', 'host_id', 'invited_id');
    }

}
