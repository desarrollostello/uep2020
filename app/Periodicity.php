<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodicity extends Model
{
   	use SoftDeletes;
    protected $table = 'periodicities';

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

    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }
}
