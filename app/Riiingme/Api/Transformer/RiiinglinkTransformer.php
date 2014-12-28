<?php
namespace Riiingme\Api\Transformer;

use Riiingme\Riiinglink\Entities\Riiinglink;
use League\Fractal;

class RiiinglinkTransformer extends Fractal\TransformerAbstract
{
    public function transform(Riiinglink $riiinglink)
    {
        return [
            'id'         => (int) $riiinglink->id,
            'invited'    => $riiinglink->invited->email,
            'labels'     => [
                [
                    'titre' => 'self',
                    'label' => '/metas/'.$riiinglink->id,
                ]
            ],
            'links'      => [
                [
                    'rel' => 'self',
                    'uri' => '/metas/'.$riiinglink->id,
                ]
            ],
        ];
    }
}
