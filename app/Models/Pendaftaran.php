<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = "pendaftaran";
    
    protected $guarded = ["pesertaID", "kelasID"];

    public function peserta(): BelongsTo
    {
        return $this->belongsTo(Peserta::class, 'pesertaID');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelasID');
    }
}
