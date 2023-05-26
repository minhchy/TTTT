<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chuc_vu extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chuc_vu';
    public $timestamps = false;
    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_chucvu';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_chucvu',
                  'ten_chucvu'
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
