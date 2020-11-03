<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\pescariaRepository;
use App\Entities\Pescaria;
use App\Validators\PescariaValidator;

/**
 * Class PescariaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PescariaRepositoryEloquent extends BaseRepository implements PescariaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Pescaria::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PescariaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
