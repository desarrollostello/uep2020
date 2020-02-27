<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditSuject extends Model
{
    use SoftDeletes;

    protected $table = 'credit_subjects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_shipping_bank',
        'bank_response_date',
    ];

    protected $fillable = [
        'project_id',
        'bank_branche_id',
        'date_shipping_bank',
        'bank_response_date',
        'credit_subject',
        'description',
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

    

    /**
     * Retorna el Usuario que cargo el Dato del Sujeto de Crédito
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Retorna el Proyecto al cual pertenece el Sujeto de Crédito
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function project()
    {
        return $this->belongsTo('App\Proyect', 'proyect_id');
    }

    /**
     * Retorna La Sucursal en donde se hizo el Sujeto de Crédito
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bankBranche()
    {
        return $this->belongsTo('App\BankGranche', 'bank_branche_id');
    }


}
