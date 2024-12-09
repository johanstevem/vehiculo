<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos'; // Asegúrate de que este sea el nombre correcto de tu tabla

    // Lista de campos permitidos para asignación masiva
    protected $fillable = [
        'nombre',
        'categoria',
        'descripcion_vehiculo',
    ];
}
