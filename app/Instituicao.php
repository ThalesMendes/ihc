<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static latest()
 * @method static take(int $int)
 */
class Instituicao extends Model
{
    protected $table = 'instituicoes';

}
