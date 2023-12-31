<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Font extends BaseModel
{
    use Mediable;
    function invitations() {
        return $this->hasMany(Invitation::class);
    }
}
