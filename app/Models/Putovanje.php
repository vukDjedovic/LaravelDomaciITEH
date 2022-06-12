<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vodic;

class Putovanje extends Model
{
    use HasFactory;

    protected $fillable = [
        'datumPolaska',
        'gradPolazak',
        'gradDolazak',
        'brojPutnika',
        'vodic_id',
    ];

    public function vodic()
    {
        return $this->belongsTo(Vodic::class);
    }
}
