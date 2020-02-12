<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Audit extends Model
{
    use SoftDeletes;

    protected $table = 'audits';

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'model',
        'date',
        'previus_value',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

   public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
