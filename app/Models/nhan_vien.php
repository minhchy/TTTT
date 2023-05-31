<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nhan_vien extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nhan_vien';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_nv';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_nv',
                  'id_chucvu',
                  'phone_nv',
                  'email_nv',
                  'address_nv',
                  'username_nv',
                  'password_nv'
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
