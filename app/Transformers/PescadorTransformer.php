<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Pescador;

/**
 * Class PescadorTransformer.
 *
 * @package namespace App\Transformers;
 */
class PescadorTransformer extends TransformerAbstract
{
    /**
     * Transform the Pescador entity.
     *
     * @param \App\Entities\Pescador $model
     *
     * @return array
     */
    public function transform(Pescador $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
