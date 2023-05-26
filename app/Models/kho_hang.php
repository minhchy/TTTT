<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kho_hang extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kho_hang';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_khohang';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_khohang',
                  'ten_khohang'
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
