<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataDosen extends Model
{
    protected $table = 'data_dosen';
    protected $fillable = ['nama', 'jabatan', 'profile'];

}
