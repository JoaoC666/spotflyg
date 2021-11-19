<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReproductorModel extends Model
{
    use HasFactory;
    protected $table="reproductor";
    protected $primaryKey="id";
    protected $fillable=['titulo','autor','categoria','musica','estado'];
}
