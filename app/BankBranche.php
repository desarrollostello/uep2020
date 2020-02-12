<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankBranche extends Model
{
    use SoftDeletes;

    protected $table = 'bank_branches';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'contact',
        'manager',
        'location_id',
        'bank_id',
        'user_id',
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

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id');
    }

    public function bank()
    {
        return $this->belongsTo('App\Bank', 'bank_id');
    }

    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }
}
