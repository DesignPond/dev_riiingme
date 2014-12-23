<?php namespace Riiingme\Api\Worker;

use Riiingme\Api\Transformer\LabelTransformer;
use League\Fractal;
use League\Fractal\Manager;

use Riiingme\Label\Repo\LabelInterface;
use Riiingme\Type\Repo\TypeInterface;
use Riiingme\Groupe\Repo\GroupeInterface;
use Riiingme\Api\Helpers\ApiHelper;

class LabelWorker{

    protected $type;
    protected $groupe;
    protected $label;
    protected $apiHelper;
    protected $fractal;

    public function __construct( TypeInterface $type, GroupeInterface $groupe, LabelInterface $label)
    {
        $this->type       = $type;
        $this->groupe     = $groupe;
        $this->label      = $label;

        $this->apiHelper  = new ApiHelper;
        $this->fractal    = new Manager();
    }

    public function getTypes(){
        return $this->type->getAll()->lists('titre','id');
    }

    public function getGroupes(){
        return $this->groupe->getAll()->lists('titre','id');
    }

    public function getLabel($id){

        return $this->label->find($id);
    }

    public function updateLabel($data){

        return $this->label->update($data);
    }

    public function labels($user){

        $labels = $this->getLabelsForUser($user);

        return $this->prepareLabels($labels);
    }

    public function getLabelsForUser($user){

        return $this->label->findByUser($user);
    }

    public function prepareLabels($labels){

        $resource = new Fractal\Resource\Collection($labels, new LabelTransformer);

        // Turn all of that into a JSON string
        return $this->fractal->createData($resource)->toJson();

    }
}
