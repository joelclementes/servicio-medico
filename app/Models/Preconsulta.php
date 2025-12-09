<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preconsulta extends Model
{
    use HasFactory;
    protected $table = 'consultas';
    protected $fillable = [
        'paciente_id',
        'motivo_consulta',
        'tension_arterial',
        'frecuencia_cardiaca',
        'temperatura',
        'glucosa',
        'peso',
        'talla',
        'indice_masa_corporal',
        'porcentaje_frecuencia_cardiaca_sugerida',
        'frecuencia_cardiaca_maxima',
        'paciente_id',
        'padecimiento_id',
        'usuario_id',
        'estado',
        'observaciones',
        'created_at',
    ];
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
    public function padecimiento()
    {
        return $this->belongsTo(Padecimiento::class);
    }
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function getFullName()
    {
        return $this->paciente->getFullName();
    }
}
