<?php

namespace App\Presenters;

use App\Transformers\PescadorTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PescadorPresenter.
 *
 * @package namespace App\Presenters;
 */
class PescadorPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PescadorTransformer();
    }
}
