<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectRefinancing extends Model
{
    use SoftDeletes;

    protected $table = 'project_refinancings';

    protected $dates = [
        'date_birth',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    protected $fillable = [
        'project_id',
        'user_id',
        'name_last_name',
        'date_birth',
        'dni',
        'cuit',
        'legal_address',
        'phone',
        'mail',
        'civil_state_id',
        'location_id',
        'name_last_name_partner',
        'dni_partner',
        'phone_partner',
        'cuit_partner',
        'date_birth_partner',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    
    /**
     * Retorna el Proyecto del Anexo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projects()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }

    /**
     * Retorna el Usuario que cargo el Anexo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function civilStates()
    {
        return $this->belongsTo('App\CivilState', 'civil_state_id');
    }

}
