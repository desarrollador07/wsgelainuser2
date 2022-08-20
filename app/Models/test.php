<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{

    protected $fillable = [

        'nombre',
        'apellido'];

    protected $table = 'laboratorio';
    protected $primaryKey = 'opa_id';
    public $timestamps = false;
}
