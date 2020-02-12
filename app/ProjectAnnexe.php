<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectAnnexe extends Model
{
    use SoftDeletes;

    protected $table = 'project_annexes';

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'date',
        'file',
        'icon',
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

}
