<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vodic;

class Putovanje extends Model
{
    use HasFactory;

    public function vodic()
    {
        return $this->belongsTo(Vodic::class);
    }
}
