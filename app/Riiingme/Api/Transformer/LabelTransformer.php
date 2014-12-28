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
            'label'   => (isset($label->label) ? $label->label : ''),
            'type'  => [
                'id'    => (int) $label->type->id,
                'titre' => $label->type->titre,
            ],
            'groupe'  => [
                'id'    => (int) $label->groupe->id,
                'titre' => $label->groupe->titre,
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
