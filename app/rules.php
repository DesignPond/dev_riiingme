<?php

Validator::resolver(function($translator, $data, $rules, $message){
    return new \Riiingme\Validation\CustomValidator($translator, $data, $rules, $message);
});