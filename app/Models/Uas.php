<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Uas extends Model
{
    use softDeletes;

    protected $table ='tblkomponent';
    protected $fillable = [
        'komponens',
        'fungsi',
        'jenis',
        'fGAMBAR',

    ];

    protected $hidden;
}
