<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    public $timestamps = false; // To disable the created_at and updated_at default columns

    public function opinions()
    {
        return $this->belongsToMany(Opinion::class);
    }
}
