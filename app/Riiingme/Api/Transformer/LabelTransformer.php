<?php
namespace Riiingme\Api\Transformer;

use Riiingme\Label\Entities\Label;
use League\Fractal;

class LabelTransformer extends Fractal\TransformerAbstract
{
    public function transform(Label $label)
    {
        // For date de naissance
        // Parse to format
        $thelabel = ($label->type_id == 13 && !empty($label->label) ?  \Carbon\Carbon::parse($label->label)->formatLocalized('%d %B %Y') : $label->label);

        return [
            'id'      => (int) $label->id,
            'label'   => (isset($thelabel) ? $thelabel : ''),
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
