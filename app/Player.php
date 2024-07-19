<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function address(){
        return $this->belongsTo('App\Address');
    }
    protected $fillable = [
        'name',
        'address_id',
        'description',
        'retired'


    ];
}
