<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Notifications\Notifiable;

/**
 * Class Pescador.
 *
 * @package namespace App\Entities;
 */
class Pescador extends Model implements Transformable
{
    use TransformableTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;
    protected $table = 'pescadors';
    protected $fillable = ['nome', 'cpf', 'telefone', 'endereco'];
    

}
