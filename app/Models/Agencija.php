<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vodic;

class Agencija extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'brojTelefona',
        'email',
    ];

    public function vodici()
    {
        return $this->hasMany(Vodic::class);
    }
}
