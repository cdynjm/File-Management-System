<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $table = 'files';

    public $timestamps;

    protected $fillable = [
        'admin_id',
        'folder_id',
        'ordinance',
        'ord_number',
        'author',
        'co_author',
        'date_approved',
        'description',
        'filename',
        'extension'
    ];

    public function Author() {
        return $this->hasOne(Members::class, 'id', 'author');
    }
    public function CoAuthor() {
        return $this->hasOne(Members::class, 'id', 'co_author');
    }
    public function Category() {
        return $this->hasOne(Category::class, 'id', 'folder_id');
    }
}
