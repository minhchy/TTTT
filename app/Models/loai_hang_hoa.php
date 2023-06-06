<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loai_hang_hoa extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'loai_hang_hoa';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_lhh';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_lhh',
                  'ten_lhh'
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
