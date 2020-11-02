<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PescadorRepository;
use App\Entities\Pescador;
use App\Validators\PescadorValidator;

/**
 * Class PescadorRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PescadorRepositoryEloquent extends BaseRepository implements PescadorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Pescador::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PescadorValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
