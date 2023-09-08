<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members';

    public $timestamps;

    protected $fillable = [
        'admin_id',
        'name',
        'birthdate',
        'address',
        'civil_status',
        'position',
        'gender',
        'status',
        'from_year',
        'to_year',
        'photo'
    ];
}
