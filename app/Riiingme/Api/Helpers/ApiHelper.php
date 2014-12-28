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

    public function uniqueMetas($labels){

        $data = array();

        foreach($labels as $label)
        {
            $data[$label->groupe_id][] = $label;
        }

        return $data;
    }

    public function transFormLabelsForRiiinglink($labels){

        $data = array();

        foreach($labels as $index => $label)
        {
            $data[$index]['id']        = $label->id;
            $data[$index]['label']     = $label->label;
            $data[$index]['type']      = $label->type;
            $data[$index]['groupe_id'] = $label->groupe_id;
        }

        return $data;
    }

}


