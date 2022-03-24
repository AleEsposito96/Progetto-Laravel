<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recensioni extends Model
{
    use HasFactory;

    protected $fillable = [
        'auto_id', 'comment', 'rating'
    ];

    public function auto() {
        return $this->belongsTo(Annunci::class);
    }
}
