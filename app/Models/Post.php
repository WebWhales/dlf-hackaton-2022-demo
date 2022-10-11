<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use WebWhales\LaravelMultilingual\Traits\Multilingual;

class Post extends Model
{
    use HasFactory;
    use Multilingual;
}
