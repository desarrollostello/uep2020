<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;

    protected $table = 'province';

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
     *Una misma PROVINCIA puede estar presente varias veces en Localidad
     *por ello la relación es hasMany
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
	public function locations()
  	{
    	return $this->hasMany(App\Location::class);
  	}
}
