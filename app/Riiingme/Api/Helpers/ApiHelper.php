<?php namespace Riiingme\Api\Helpers;

class ApiHelper{

    public function typesMap($types, $unused){

        $mapped = [];
        // loop all unused metas and get name from types
        foreach($unused as $meta)
        {
            $mapped[$meta] = $types[$meta];
        }

        return $mapped;
    }

    public function uniqueMetas($metas){

        $uniques = array();

        foreach($metas as $meta)
        {
            $uniques[$meta->groupe_id][] = $meta;
        }

        return $uniques;
    }

}

