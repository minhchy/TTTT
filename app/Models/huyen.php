<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class huyen extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'huyen';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_huyen';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_huyen',
                  'id_tinh',
                  'ten_huyen'
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
