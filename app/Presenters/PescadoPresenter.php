<?php

namespace App\Presenters;

use App\Transformers\PescadoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PescadoPresenter.
 *
 * @package namespace App\Presenters;
 */
class PescadoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PescadoTransformer();
    }
}
