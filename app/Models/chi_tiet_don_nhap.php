<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chi_tiet_don_nhap extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chi_tiet_don_nhap';

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
                  'id_nh',
                  'soluong_ctdn',
                  'dongia_ctdn'
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
