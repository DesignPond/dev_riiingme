<?php namespace Riiingme\Groupe\Entities;

class Groupe_type extends \Eloquent {

	protected $fillable = array('groupe_id', 'type_id');

	/**
	 * No timestamps
	 *
	 * @var boolean
	 */
	public $timestamps = false;

}