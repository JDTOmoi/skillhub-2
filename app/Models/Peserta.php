<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peserta extends Model
{
    use HasFactory;

    protected $table = "peserta";

    protected $fillable = ["name", "dob", "grade", "email", "phone_number", "country_of_origin", "school", "address"];

    public function pendaftaran(): HasMany
    {
        return $this->hasMany(Pendaftaran::class, 'pesertaID');
    }
}
