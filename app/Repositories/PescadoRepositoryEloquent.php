<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\pescadoRepository;
use App\Entities\Pescado;
use App\Validators\PescadoValidator;

/**
 * Class PescadoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PescadoRepositoryEloquent extends BaseRepository implements PescadoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Pescado::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PescadoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
