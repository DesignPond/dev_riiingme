<?php
namespace Riiingme\Api\Transformer;

use Riiingme\Label\Entities\Label;
use League\Fractal;

class LabelTransformer extends Fractal\TransformerAbstract
{
    public function transform(Label $label)
    {
        return [
            'id'      => (int) $label->id,
            'label'   => $label->label,
            'type'  => [
                'id'    => $label->type->id,
                'titre' => $label->type->titre,
            ],
            'groupe'  => [
                'id'    => $label->groupe->id,
                'titre' => $label->groupe->titre,
            ],
            'links'   => [
                [
                    'rel' => 'self',
                    'uri' => '/labels?user_id='.$label->user_id,
                ]
            ],
        ];
    }
}
