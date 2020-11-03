<?php

namespace App\Presenters;

use App\Transformers\PescariaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PescariaPresenter.
 *
 * @package namespace App\Presenters;
 */
class PescariaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PescariaTransformer();
    }
}
