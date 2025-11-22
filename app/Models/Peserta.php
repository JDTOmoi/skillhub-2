<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peserta extends Model
{
    use HasFactory;

    protected $table = "peserta";

    protected $fillable = ["name", "dob", "grade"];

    public function pendaftaran(): HasMany
    {
        return $this->hasMany(Pendaftaran::class, 'pesertaID');
    }
}
