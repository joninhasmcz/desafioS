<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Pescado;

/**
 * Class PescadoTransformer.
 *
 * @package namespace App\Transformers;
 */
class PescadoTransformer extends TransformerAbstract
{
    /**
     * Transform the Pescado entity.
     *
     * @param \App\Entities\Pescado $model
     *
     * @return array
     */
    public function transform(Pescado $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
