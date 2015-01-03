<?php namespace Riiingme\Api\Worker;

use Riiingme\Label\Repo\LabelInterface;
use Riiingme\Type\Repo\TypeInterface;
use Riiingme\Groupe\Repo\GroupeInterface;

use Riiingme\Api\Helpers\ApiHelper;

class LabelWorker{

    protected $type;
    protected $groupe;
    protected $label;

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

    public function getLabel($id){

        return $this->label->find($id);
    }

    public function createLabel($data){

        return $this->label->create($data);
    }

    public function updateLabel($data){

        return $this->label->update($data);
    }

    public function deleteLabel($id){

        return $this->label->delete($id);
    }

    public function getLabelsForUser($user){

        return $this->label->findByUser($user);
    }

    public function getInfosLabelsForUser($user){

        return $this->label->findInfosByUser($user);
    }

    public function getLabelsForUserInGroups($user){

        $labels = $this->getLabelsForUser($user);

        return $this->apiHelper->dispatchLabelsInGroups($labels);
    }


    public function setInfosForRiiinglinksThumbs($riiinglinks){

        if(!empty($riiinglinks)){

            $types = $this->getTypes();

            $invited = $riiinglinks->map(function($riiinglink) use ($types)
            {
                $invite = $this->getInfosLabelsForUser($riiinglink->invited_id);

                if(!$invite->isEmpty())
                {
                    foreach($invite as $info)
                    {
                        $invited_info[$info->type_id] = $info->label;
                    }

                    $riiinglink->setAttribute('invited_name', $invited_info[1].' '.$invited_info[2]);
                    $riiinglink->setAttribute('invited_photo', (isset($invited_info[15]) && !empty($invited_info[15]) ? $invited_info[15] : 'avatar.jpg'));

                }

                return $riiinglink;

            });

        }

        return $invited;
    }


}
