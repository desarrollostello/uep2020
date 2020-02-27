<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LegalFigure extends Model
{
    use SoftDeletes;

    protected $table = 'legal_figures';

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

     /**
     *Una misma Figura Legal puede estar presente varias veces en Project
     *por ello la relación es hasMany
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }
}
