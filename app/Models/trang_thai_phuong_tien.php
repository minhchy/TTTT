<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trang_thai_phuong_tien extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trang_thai_phuong_tien';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_ttpt';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_ttpt',
                  'ten_ttpt'
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
