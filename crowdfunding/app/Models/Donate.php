<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Charity;
use App\Models\User;

class Donate extends Model
{
    // use HasFactory;
    public function charity()
    {
        return $this->belongsToMany(Charity::class);
    }
    public function users() { 
        return $this->belongsToMany(User::class);
    }
}
