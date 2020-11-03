<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Pescaria.
 *
 * @package namespace App\Entities;
 */
class Pescaria extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'pescarias';
    protected $fillable = ['localizacao', 'data', 'telefone', 'endereco'];

}
