<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $table = 'logo';

    public $timestamps;

    protected $fillable = [
        'admin_id',
        'logo'
    ];
}
