<?php
namespace Riiingme\Api\Transformer;

use Riiingme\Riiinglink\Entities\Riiinglink;

use Riiingme\Api\Transformer\LabelTransformer;
use League\Fractal;
use Riiingme\Api\Helpers\ApiHelper;

class RiiinglinkTransformer extends Fractal\TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'label'
    ];

    public function transform(Riiinglink $riiinglink)
    {

        return [
            'id'         => (int) $riiinglink->id,
            'invited_id' => $riiinglink->invited_id,
            'links'      => [
                [
                    'rel' => 'self',
                    'uri' => '/riiinglinks/'.$riiinglink->id,
                ]
            ],
        ];
    }

    /**
     * Include Author
     *
     * @return League\Fractal\ItemResource
     */
    public function includeLabel(Riiinglink $riiinglink)
    {
        $labels = $riiinglink->labels;

        return $this->collection($labels, new RiiinglinkLabelTransformer);
    }

}
