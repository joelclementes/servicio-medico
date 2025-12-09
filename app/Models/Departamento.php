<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table = 'departamentos';
    protected $fillable = [
        'nombre'
    ];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
    
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
