<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class xuat_hang extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'xuat_hang';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_xh';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_xh',
                  'id_kh',
                  'id_ncc',
                  'id_nv',
                  'time_xh',
                  'tongtien_xh'
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
