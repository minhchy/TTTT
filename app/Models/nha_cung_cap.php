<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nha_cung_cap extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nha_cung_cap';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_ncc';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id_ncc',
                  'ten_ncc',
                  'phone_ncc',
                  'email_ncc',
                  'address_ncc'
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
