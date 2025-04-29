<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels'; // Nama tabel di database
    protected $fillable = ['title', 'content', 'image', 'created_at', 'updated_at'];
}
