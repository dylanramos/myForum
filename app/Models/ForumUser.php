<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumUser extends Model
{
    use HasFactory;

    public $timestamps = false; // To disable the created_at and updated_at default columns

    public $table = "forumusers"; // otherwise Eloquent will look for 'forum_user', because of the 'U' inside ForumUser

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }
}
