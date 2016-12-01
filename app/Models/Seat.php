<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model  {   

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'seats';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sector_id', 'row', 'place'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    public function sector()
    {
        return $this->belongsTo('App\Models\Sector');
    }

}