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

    /**
     * En la Tabla Project tengo cargada la Línea de Crédito a la cual pertenece ese proyecto
     * por lo tanto tengo que hcer la relación hasMany, una Misma Línea de Crédito puede estar
     * presente en varios proyectos. Dicho de otra manera la Línea de Créditos de Alfalfa por ejemplo
     * tiene varios proyectos cargados
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }
}
