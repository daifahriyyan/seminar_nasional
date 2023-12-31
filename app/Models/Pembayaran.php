<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    // protected $fillable = ['nominal', 'seminar', 'metode', 'file', 'status', 'keterangan'];

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function dataPeserta(){
        return $this->belongsTo(DataPeserta::class);
    }
}
