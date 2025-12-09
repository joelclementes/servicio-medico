<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $table = 'consultas';
    protected $fillable = [
        'paciente_id',
        'motivo_consulta',
        'diagnostico',
        'tension_arterial',
        'frecuencia_cardiaca',
        'temperatura',
        'peso',
        'talla',
        'indice_masa_corporal',
        'porcentaje_frecuencia_cardiaca_sugerida',
        'frecuencia_cardiaca_maxima',
        'glucosa',
        'tratamiento',
        'paciente_id',
        'padecimiento_id',
        'usuario_id',
        'estado',
        'observaciones',
        'created_at',
    ];
    protected $casts = [
        'peso'=> 'integer',
        'talla'=> 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
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
