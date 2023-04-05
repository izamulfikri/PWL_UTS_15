<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\kiosmul as Authenticatable;
use Illuminate\Notifications\Notifiable;

class kiosmul extends Model
{
    protected $table = "kiosmuls"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel kiosmuls
    public $timestamps = false;
    protected $primaryKey = 'kode_barang';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty',
    ];
}
