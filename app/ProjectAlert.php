<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectAlert extends Model
{
    use SoftDeletes;

    protected $table = 'project_alerts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'project_id',
        'alert_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    
    /**
     * Retorna la Provincia a la que pertenece la Localidad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projects()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }

    /**
     * Retorna el Codigo Postal de la Localidad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alerts()
    {
        return $this->belongsTo('App\Alert', 'alert_id');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
