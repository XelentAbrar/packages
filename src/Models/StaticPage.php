<?php

namespace XelentAbrar\Packages\Models;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $fillable = ['slug', 'title', 'content'];
}
