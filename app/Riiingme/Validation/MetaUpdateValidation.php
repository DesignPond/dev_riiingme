<?php namespace Riiingme\Validation;

use Laracasts\Validation\FormValidator;

class MetaUpdateValidation extends FormValidator{

    /*
     * Validation rules
    */
    protected $rules = array(
        'id'             => 'exists:labels',
        'riiinglink_id'  => 'required',
        'label_id'       => 'required'
    );

    /*
     * Validation messages
    */
    protected $messages = array(
        'riiinglink_id.required'  => 'Le riiinglink est requis',
        'label_id.required'       => 'Le label est requis'
    );

}