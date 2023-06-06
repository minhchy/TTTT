<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tinh_tp extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tinh_tp';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_tinh_tp';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_tinh_tp',
                  'ten_tinh_tp'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    



}
