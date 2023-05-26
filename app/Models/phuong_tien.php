<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phuong_tien extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'phuong_tien';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_pt';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_pt',
                  'id_ttpt',
                  'id_lpt',
                  'ten_pt'
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
