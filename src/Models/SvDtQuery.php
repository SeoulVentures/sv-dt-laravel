<?php

namespace SeoulVentures\SvDataTable\Models;

use Illuminate\Database\Eloquent\Model;

class SvDtQuery extends Model
{
    protected $fillable = [
        'query',
        'connection'
    ];
}
