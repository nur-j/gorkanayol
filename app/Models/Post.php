<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $guarded = [];

    // getting date in YYYY-mm-dd format
    public function getDateAttribute()
    {
        $date = new \DateTime($this->created_at);
        return $date->format('Y-m-d');
    }
}
