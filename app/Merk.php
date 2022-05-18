<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    //
    public  $timestamps=false;
    protected $fillable=['nama_merk','created_at','updated_at','has_merk'];
}
