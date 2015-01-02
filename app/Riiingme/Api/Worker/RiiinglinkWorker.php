<?php namespace Riiingme\Api\Worker;

use Riiingme\Riiinglink\Repo\RiiinglinkInterface;

class RiiinglinkWorker{

    protected $riiinglink;

    public function __construct(RiiinglinkInterface $riiinglink)
    {
        $this->riiinglink = $riiinglink;
    }

    public function getRiiinglink($id){

        return $this->riiinglink->find($id);
    }

    public function createRiiinglink($data){

        return $this->riiinglink->create($data);
    }

    public function updateRiiinglink($data){

        return $this->riiinglink->update($data);
    }

    public function deleteRiiinglink($id){

        return $this->riiinglink->delete($id);
    }

    public function getRiiinglinksForHost($host_id){

        return $this->riiinglink->findByHost($host_id);
    }

    public function getRiiinglinksInvited($host_id){

        return $this->riiinglink->findInvited($host_id);
    }

    public function getRiiinglinkWithInvited($invited_id,$host_id){

        return $this->riiinglink->findByHostAndInvited($invited_id,$host_id);
    }

    public function setMetasForRiiinglink($id,$metas){

        $riiinglink = $this->riiinglink->find($id);
        $riiinglink->labels()->sync($metas);

    }

    public function listAllMetasFromRiiinglink($riiinglink){

       $metas = [1 => [], 2 => [], 3 => []];

       if( isset($riiinglink->labels) )
       {
           foreach($riiinglink->labels as $label){
              $metas[$label->groupe_id][] = $label->id;
           }
       }

       return $metas;

    }

}
