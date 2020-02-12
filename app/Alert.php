<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alert extends Model
{
    use SoftDeletes;

    protected $table = 'alerts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'estado',
        'codigo',
        'color',
        'sql',
        'mensaje',
        'dias',
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

    public function projectAlerts()
    {
        return $this->hasMany(App\ProjectAlert::class);
    }
}
