<?php

namespace Cricky;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = [
        'cricky_configs'
    ];

    protected $fillable = [
        'name',
        'value',
        'type',
        'description',
    ];
}
