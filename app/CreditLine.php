<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditLine extends Model
{
    use SoftDeletes;

    protected $table = 'credit_lines';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'maximum_amount',
        'maximum_grace',
        'maximum_amortization',
        'rate',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function setNombreAttribute($val)
    {
        $this->attributes['name'] = trim($val);
    }

    public function getNombreAttribute()
    {
        return strtoupper($this->attributes['name']);
    }

    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }
}
