<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hang_hoa extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hang_hoa';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_hh';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_hh',
                  'id_lhh',
                  'id_dv',
                  'ten_hh',
                  'gia_mua_hh',
                  'gia_ban_hh',
                  'soluong_hh'
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
