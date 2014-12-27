<?php namespace Riiingme\Api\Worker;

use Riiingme\Meta\Repo\MetaInterface;

class MetaWorker{

    protected $meta;

    public function __construct(MetaInterface $meta)
    {
        $this->meta = $meta;
    }

    public function getMeta($id){

        return $this->meta->find($id);
    }

    public function createMeta($data){

        return $this->meta->create($data);
    }

    public function updateMeta($data){

        return $this->meta->update($data);
    }

    public function deleteMeta($id){

        return $this->meta->delete($id);
    }

    public function getMetasForRiiinglink($riiinglink){

        return $this->meta->findByRiiinglink($riiinglink);
    }
}
