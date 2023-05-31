<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class xa extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'xa';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_xa';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_xa',
                  'id_huyen'
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
