<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'projects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'entry_date',
        'name',
        'internal_number',
        'cfi_number',
        'location_id',
        'creditLine_id'
        'state_id',
        'sector_id',
        'applicant', // Solicitante en String
        'mount',
        'size',
        'project_address',
        'legal_address',
        'phone',
        'email',
        'web',
        'products',
        'ciuu',
        'mo',
        'inuep',
        'description',
        'total_inversion',
        'done_investment', // Inversión Realizada
        'investment_to_make_ct', // Inversión a Realizada CT
        'investment_to_make_af', // Inversión a Realizada AF
        'legalFigure_id',
        'periodicity_id',
        'destinationCredit_id',
        'refinanced',
        'grace_period',
        'amortization_period',
        'cant_disbursements', // cantidad de desembolsos
        'rate',
        'guarantie_id',
        'guarantie_description',
        'credit_subject', // Sujeto de Crédito
        'bank_branche_id',
        'date_shipping_bank', // Fecha Envio al Banco
        'bank_response_date', // Fecha Respuesta del Banco
        'bank_expiration_date', // Fecha CADUCO Banco
        'uep_approved_date', // Fecha APROBADO UEP
        'date_shipping_cfi', // Fecha Envio al CFI
        'cfi_approved_date', // Fecha APROBADO CFI
        'tramdispo_date', // Fecha TRAMDISPO
        'comunicatran_date', // Fecha COMUNICATRAN
        'disbursements_date', // Fecha Desembolso
        'effective_date', // Fecha Efectivizacion
        'desisted_date', // Fecha Desistido
        'judicial_date', // Fecha Judicial
        'cancelled_date', // Fecha Cancelado
        'archived_date', // Fecha Archivado
        'last_movement_date', // Fecha Ultimo Movimiento
        'observations',
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
     * Retorna la Localidad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id');
    }


    /**
     * Retorna la Línea de Crpedito
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
    public function creditLine()
    {
        return $this->belongsTo('App\CreditLine', 'creditLine_id');
    }



    /**
     * Retorna el ESTADO del Proyecto
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */    
    public function state()
    {
        return $this->belongsTo('App\State', 'state_id');
    }



     /**
     * Retorna el SECTOR del Proyecto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'sector_id');
    }


     /**
     * Retorna la Figura Legla del Proyecto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function legalFigure()
    {
        return $this->belongsTo('App\LegalFigure', 'legalFigure_id');
    }

    /**
     * Retorna la Periodicidad del Proyecto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function periodicity()
    {
        return $this->belongsTo('App\Periodicity', 'periodicity_id');
    }

    /**
     * Retorna el Destino de Crédito del Proyecto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destinationCredit()
    {
        return $this->belongsTo('App\DestinationCredit', 'destinationCredit_id');
    }

    /**
     * Retorna la Garantía del Proyecto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guarantie()
    {
        return $this->belongsTo('App\Guarantie', 'guarantie_id');
    }


    /**
     * Retorna la Sucursal del Proyecto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bankBranche()
    {
        return $this->belongsTo('App\BankBranche', 'bank_branche_id');
    }

    /**
     * Retorna el Usuario que cargo el Proyecto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }


    /**
     * Un mismo Proyecto puede tener varios Movimientos
     *por ello la relación es hasMany
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function movements()
    {
        return $this->hasMany(App\ProjectMovement::class);
    }


    /**
     * Un mismo Proyecto puede tener varias Alertas Proyectos
     *por ello la relación es hasMany
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function projectAlerts()
    {
        return $this->hasMany(App\ProjectAlert::class);
    }


    /**
     * Un mismo Proyecto puede tener varios Desembolsos
     *por ello la relación es hasMany
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function disbursements()
    {
        return $this->hasMany(App\Disbursement::class);
    }


    /**
     * Un mismo Proyecto puede tener varias Refinanciaciones
     *por ello la relación es hasMany
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function projectRefinancings()
    {
        return $this->hasMany(App\ProyectRefinancing::class);
    }
}
