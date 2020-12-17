<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    public $timestamps = false; // To disable the created_at and updated_at default columns

    public function topic()
    {
        return $this->belongsTo(Opinion::class);
    }
}
