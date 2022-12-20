<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_karyawan extends Model
{
    protected $table = 'karyawan';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

}
