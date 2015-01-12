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

    public function getGroupesTypes(){
        return $this->groupe->getAll();
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

    public function getNameAndPhoto($user_id){

        $infos = $this->getInfosLabelsForUser($user_id);

        if(!$infos->isEmpty())
        {
            foreach($infos as $info)
            {
                $invited_info[$info->type_id] = $info->label;
            }

            $invited_name  = $invited_info[1].' '.$invited_info[2];
            $invited_photo = (isset($invited_info[15]) && !empty($invited_info[15]) ? $invited_info[15] : 'avatar.jpg');

            return array($invited_name,$invited_photo);
        }
    }

    public function setInfosForRiiinglinksThumbs($riiinglinks){

        if(!empty($riiinglinks)){

            $types = $this->getTypes();

            $invited = $riiinglinks->map(function($riiinglink) use ($types)
            {
                list($invited_name, $invited_photo) =  $this->getNameAndPhoto($riiinglink->invited_id);

                $riiinglink->setAttribute('invited_name', $invited_name);
                $riiinglink->setAttribute('invited_photo', $invited_photo);

                return $riiinglink;
            });

        }

        return $invited;
    }


}
