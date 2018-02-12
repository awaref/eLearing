<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lesson extends Model
{
    protected $fillable = [
        'title', 'content', 'path', 'path', 'media_type', 'module_id'
    ];


}
