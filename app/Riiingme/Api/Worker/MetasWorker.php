<?php namespace Riiingme\Api\Worker;

use Riiingme\Api\Helpers\ApiHelper;
use Riiingme\Riiinglink\Repo\RiiinglinkInterface;
use Riiingme\Meta\Repo\MetaInterface;
use Riiingme\Label\Repo\LabelInterface;
use Riiingme\Type\Repo\TypeInterface;
use Riiingme\Groupe\Repo\GroupeInterface;

class LabelWorker{

    protected $type;
    protected $groupe;
    protected $riiinglink;
    protected $meta;
    protected $label;

    protected $apiHelper;

    public function __construct( TypeInterface $type, GroupeInterface $groupe, RiiinglinkInterface $riiinglink, LabelInterface $label, MetaInterface $meta)
    {
        $this->type       = $type;
        $this->groupe     = $groupe;
        $this->riiinglink = $riiinglink;
        $this->label      = $label;
        $this->meta       = $meta;

        $this->apiHelper  = new ApiHelper;
    }

    public function dispatchGroups($link){

        $groups  = $this->getGroupes();
        $grouped = array();

        if(!$link->metas->isEmpty())
        {
            foreach($groups as $id => $group)
            {
                foreach($link->metas as $meta)
                {
                    if( $meta->pivot->groupe_id == $id)
                    {
                        $grouped[$group][] = $meta;
                    }
                }
            }
        }

        return $grouped;
    }

    public function dispatchGroupsMeta($metas){

        $groups  = $this->getGroupes();
        $grouped = array();

        if(!empty($metas))
        {
           foreach($groups as $id => $group)
           {
                foreach($metas as $meta)
                {
                    if( $meta->groupe_id == $id)
                    {
                        $grouped[$group][] = $meta;
                    }
                }
            }
        }

        return $grouped;
    }

    public function riinglink($riiinglink){

        return $this->link->find($riiinglink);

    }

    public function maxRang($riiinglink_id,$groupe_id){

        return $this->linkmetas->getRang($riiinglink_id,$groupe_id);
    }

    public function attachMeta($meta_id,$riiinglink_id,$data){

        $riiinglink = $this->link->find($riiinglink_id);

        return $riiinglink->metas()->attach($meta_id,$data);

    }

    public function usedMetas($link){

        $grouped = array();

        if(!$link->metas->isEmpty())
        {
            foreach($link->metas as $meta)
            {
               $grouped[$meta->groupe_id][] = $meta->id;
            }
        }

        return $grouped;
    }

    public function prepareLink($link){

        $linked  = array();
        $groupes = $this->dispatchGroups($link);

        // riiinglink id
        $linked['id'] = $link->id;

        // host infos
        $linked['host']['id']          = $link->host_id;
        $linked['host']['email']       = $link->host->email;
        $linked['host']['username']    = $link->host->username;

        // invited infos
        $linked['invited']['id']       = $link->invited->id;
        $linked['invited']['email']    = $link->invited->email;
        $linked['invited']['username'] = $link->invited->username;

        $i = 1;

        // metas infos
        foreach($groupes as $nom => $groupe)
        {
            foreach($groupe as $meta)
            {
                $linked['groupes'][$i]['name'] = $nom;

                $linked['groupes'][$i]['metas'][$meta->pivot->rang]['type_id'] = $meta->type_id;
                $linked['groupes'][$i]['metas'][$meta->pivot->rang]['meta']    = $meta->meta;
                $linked['groupes'][$i]['metas'][$meta->pivot->rang]['id']      = $meta->id;

                //$linked['groupes'][$i]['metas'][] = $meta;
            }

            $i++;
        }

        return $linked;
    }

    public function getTypes(){
        return $this->type->getAll()->lists('titre','id');
    }

    public function getGroupes(){
        return $this->groupe->getAll()->lists('titre','id');
    }

    public function metaUsage($link){

        $types = array_keys($this->getTypes());

        if(!$link->metas->isEmpty())
        {
            $metas = $link->metas;
            $metas = array_unique( $metas->lists('type_id'));

            $used   = array_intersect($types,$metas);
            $unused = array_diff($types,$metas);

            return array('used' => $used, 'unused' => $unused);
        }


        // unused meta
        /*
        $usage  = $this->metaUsage($link);
        $unused = ( isset($usage['unused']) ? $this->apiHelper->typesMap($types,$usage['unused']) : [] );
        $linked['unused'] = $unused;
        */

        return [];
    }

}
