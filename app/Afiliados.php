<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliados extends Model
{
    protected $connection = 'sistema';

    protected $table = 'afiliado';
    protected $primaryKey = 'nro_doc';
}
