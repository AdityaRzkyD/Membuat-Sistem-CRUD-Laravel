<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBarang extends Model
{
    use HasFactory;

    protected $table = 'model_barangs';
    protected $primary_key = 'id';
    protected $fillable = [
        'kode',
        'nama',
        'jenis',
        'qty',
        'harga',
        'hargatotal',
        'diskon',
        'total',
    ];
}
