<?php
namespace Riiingme\Api\Transformer;

use Riiingme\Label\Entities\Label;
use League\Fractal;

class RiiinglinkLabelTransformer extends Fractal\TransformerAbstract
{
    public function transform(Label $label)
    {
        return [
            'id'      => (int) $label->id,
            'label'   => (isset($label->label) ? $label->label : ''),
            'type'  => [
                'id'    => (int) $label->type_id,
                'titre' => $label->type,
            ],
            'groupe'  => [
                'id'    => (int) $label->groupe_id,
                'titre' => $label->groupe,
            ],
            'links'   => [
                [
                    'rel' => 'self',
                    'uri' => '/labels/'.$label->id,
                ]
            ],
        ];
    }
}
