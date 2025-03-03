<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class namadokter extends Model
{
    use HasFactory;
    protected $fillable = ['nama_dokter'];
    // object relation mapping (ORN) / sequilize

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', "id");
    }
}
