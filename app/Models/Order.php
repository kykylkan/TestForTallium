<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model  {    

    CONST TYPE_CANCEL = 0;
    CONST TYPE_PAID = 1;
    CONST TYPE_BOOKING = 2;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['seat_id', 'status'];

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
    
    public function seat()
    {
        return $this->belongsTo('App\Models\Seat');
    }

}