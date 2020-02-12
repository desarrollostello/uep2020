<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CivilState extends Model
{
    use SoftDeletes;

    protected $table = 'civil_states';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function setNameAttribute($val)
    {
        $this->attributes['name'] = trim($val);
    }

    public function getNameAttribute()
    {
        return strtoupper($this->attributes['name']);
    }
}
