<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    // Para renombrar
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'description',
        'status',
        'publish_date',
        'user_id',
        'category_id',
        'views'
    ];

    // protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);       // , 'category_id', 'id'
    }

    

}
