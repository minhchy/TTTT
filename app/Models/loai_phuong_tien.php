<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loai_phuong_tien extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'loai_phuong_tien';
    public $timestamps = false;
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_lpt';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_lpt',
                  'ten_lpt'
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
