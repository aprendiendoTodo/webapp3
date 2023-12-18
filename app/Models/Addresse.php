<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresse extends Model
{
    use HasFactory;

    public function user() {

        //  The second parameter is optional
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
