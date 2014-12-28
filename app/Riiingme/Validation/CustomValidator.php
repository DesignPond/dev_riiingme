<?php namespace Riiingme\Validation;

class CustomValidator extends \Illuminate\Validation\Validator
{

    public function validateRiiinglinkunique($attribute, $value, $parameters)
    {
        $host_id    = $this->data['host_id'];
        $invited_id = $this->data['invited_id'];

        $riiinglink = \DB::table('riiinglinks')->where('host_id','=',$host_id)->where('invited_id','=',$invited_id)->first();

        return ($riiinglink ? false : true);
    }

}