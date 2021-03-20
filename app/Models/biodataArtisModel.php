<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodataArtisModel extends Model
{
    use HasFactory;

    protected $table = "biodata_artis";
    protected $fillable = [
        'uuid',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'foto',
        'alamat_tinggal',
        "id_kecamatan",
    ];

    public $timestamp = false;
}
