<?php namespace Riiingme\Api\Worker;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

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

    public function index(){
        return $this->label->getAll();
    }

    public function labels($user){

        $labels = $this->getLabelsForUser($user);

        return $this->prepareLabels($labels);
    }

    public function prepareLabels($labels){

        $labels = $labels->toArray();
        // Pass this array (collection) into a resource, which will also have a "Transformer"
        // This "Transformer" can be a callback or a new instance of a Transformer object
        // We type hint for array, because each item in the $books var is an array
        $resource = new Collection($labels, function(array $labels) {
            return [
                'id'      => (int) $labels['id'],
                'label'   => $labels['label'],
                'type'  => [
                    'id'    => $labels['type']['id'],
                    'titre' => $labels['type']['titre'],
                ],
                'groupe'  => [
                    'id'    => $labels['groupe']['id'],
                    'titre' => $labels['groupe']['titre'],
                ],
                'links'   => [
                    [
                        'rel' => 'self',
                        'uri' => '/labels/'.$labels['user_id'],
                    ]
                ]
            ];
        });

        // Turn all of that into a JSON string
        return $this->fractal->createData($resource)->toJson();

    }

    public function getLabelsForUser($user){

        return $this->label->findByUser($user);
    }

}
