<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class don_vi extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'don_vi';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_dv';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_dv',
                  'ten_dv'
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
