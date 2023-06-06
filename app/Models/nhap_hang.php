<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nhap_hang extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nhap_hang';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_nh';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_nh',
                  'id_tt',
                  'id_ncc',
                  'id_nv',
                  'time_nh',
                  'tongtien_nh'
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
