<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DB extends Model
{
    use HasFactory;

    protected $connection = "mysql_external";

    protected $fillable = [
        'id', 'post_title', 'post_content', 'post_name'
    ];
}
