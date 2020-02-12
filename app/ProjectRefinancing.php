<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectRefinancing extends Model
{
    use SoftDeletes;

    protected $table = 'project_refinancings';

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    protected $fillable = [
        'project_id',
        'user_id',
        'date',
        'resolution',
        'refinancing_amount',
        'rate',
        'description',
        'grace_period',
        'amortization_period',
        'periodicity_id',
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

    public function periodicities()
    {
        return $this->belongsTo('App\Periodicity', 'periodicity_id');
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

}
