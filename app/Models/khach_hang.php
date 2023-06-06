<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khach_hang extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'khach_hang';
    public $timestamps = false;

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_kh';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_kh',
                  'ten_kh',
                  'phone_kh',
                  'email_kh',
                  'address_kh',
                  'password_kh'
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
