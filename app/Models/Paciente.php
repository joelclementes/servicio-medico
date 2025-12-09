<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'sexo',
        'telefono',
        'correo_electronico',
        'direccion',
        'estado_civil',
        'ocupacion',
        'departamento_id'
    ];
    protected $casts = [
        'fecha_nacimiento' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function expedientes()
    {
        return $this->hasMany(Expediente::class);
    }
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
    public function getFullName()
    {
        // return $this->nombre . ' ' . $this->apellido_paterno . ' ' . $this->apellido_materno;
        return trim("{$this->nombre} {$this->apellido_paterno} {$this->apellido_materno}");
    }
    public function getEdad()
    {
        return \Carbon\Carbon::parse($this->fecha_nacimiento)->age;
    }

    public static $rules = [
        'grupo_sanguineo' => 'nullable|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
        'sexo' => 'nullable|in:Masculino,Femenino,Otro', // Valores permitidos
    ];

    public function getFechaNacimientoFormateadaAttribute()
    {
        return $this->fecha_nacimiento
            ? $this->fecha_nacimiento->format('d-m-Y')
            : null;
    }
}
