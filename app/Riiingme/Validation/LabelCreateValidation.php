<?php namespace Riiingme\Validation;

use Laracasts\Validation\FormValidator;

class LabelCreateValidation extends FormValidator{

    /*
     * Validation rules
    */
    protected $rules = array(
        'label'     => 'required',
        'user_id'   => 'required',
        'type_id'   => 'required',
        'groupe_id' => 'required'
    );

    /*
     * Validation messages
    */
    protected $messages = array(
        'label.required'     => 'Le label est requis',
        'user_id.required'   => 'L\'utilisateur est requis',
        'type_id.required'   => 'Le type est requis',
        'groupe_id.required' => 'Le groupe est requis'
    );

}