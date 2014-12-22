<?php namespace Riiingme\Api\Worker;

use Riiingme\Api\Helpers\ApiHelper;

use Riiingme\Label\Repo\LabelInterface;
use Riiingme\Type\Repo\TypeInterface;
use Riiingme\Groupe\Repo\GroupeInterface;

class LabelWorker{

    protected $type;
    protected $groupe;
    protected $label;
    protected $apiHelper;

    public function __construct( TypeInterface $type, GroupeInterface $groupe, LabelInterface $label)
    {
        $this->type       = $type;
        $this->groupe     = $groupe;
        $this->label      = $label;

        $this->apiHelper  = new ApiHelper;
    }

    public function getTypes(){
        return $this->type->getAll()->lists('titre','id');
    }

    public function getGroupes(){
        return $this->groupe->getAll()->lists('titre','id');
    }

    public function index(){
        return $this->label->getAll();
    }

    public function show($id){


    }

}
