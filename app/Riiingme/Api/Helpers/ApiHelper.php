<?php namespace Riiingme\Api\Helpers;

use Illuminate\Support\Collection;

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

    public function dispatchRiiinglinkInGroup($riiinklink){

        $data = array();

        if(isset($riiinklink->labels))
        {
            $labels = $riiinklink->labels;

            foreach($labels as $meta)
            {
                if($meta->type_id == 13){
                    $meta->label = $this->changeDateFormat($meta);
                }

                $data[$meta->groupe_id][] = $meta;
            }
        }

        return $data;
    }

    public function dispatchLabelsInGroups($labels){

        $data = array();

        if(!empty($labels))
        {
            foreach($labels as $meta)
            {
                if($meta->type_id == 13){
                    $meta->label = $this->changeDateFormat($meta);
                }

                $data[$meta->groupe_id][$meta->id] = $meta;
            }
        }

        return $data;
    }

    public function typesLabelsInGroups($data){

        $collection = array();

        if(!empty($data))
        {
            foreach($data as $groupe => $item)
            {
                foreach($item as $label)
                {
                    $collection[$groupe][$label->type_id] = $label;
                }
            }

            return $collection;
        }

        return [];
    }

    public function changeDateFormat($meta){

        setlocale(LC_ALL, 'fr_FR');

        return (!empty( $meta->label ) ? \Carbon\Carbon::parse($meta->label)->formatLocalized('%d %B %Y') : '');
    }

}


