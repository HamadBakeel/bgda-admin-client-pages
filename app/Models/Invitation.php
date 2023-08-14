<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Invitation extends BaseModel
{

    use Mediable;

    function font()
    {
        return $this->belongsTo(Font::class);
    }
}
