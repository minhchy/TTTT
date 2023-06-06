<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trang_thai extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trang_thai';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_tt';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_tt',
                  'id_xh',
                  'ten_tt'
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
