<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paciente::create([
            'nombre' => 'Joel',
            'apellido_paterno' => 'Clemente',
            'apellido_materno' => 'Serrano',
            'fecha_nacimiento' => '1973-01-24',
            'sexo' => 'Masculino',
            'grupo_sanguineo' => 'AB+',
            'alergias' => 'Ninguna',
            'antecedentes_familiares' => 'Ninguno',
            'antecedentes_personales' => 'Ninguno',
            'telefono' => '2294959759',
            'nombre_contacto_emergencia' => 'esposa',
            'telefono_contacto_emergencia' => '2282686258',
            'correo' => 'joelcs73@gmail.com',
            'numero_seguro_social' => '12345678',
            'departamento_id' => 6,
        ]);
        Paciente::create([
            'nombre' => 'Lorena',
            'apellido_paterno' => 'Rivera',
            'apellido_materno' => 'Ruiz',
            'fecha_nacimiento' => '1977-08-11',
            'sexo' => 'Femenino',
            'grupo_sanguineo' => '',
            'alergias' => 'Ninguna',
            'antecedentes_familiares' => 'Ninguno',
            'antecedentes_personales' => 'Ninguno',
            'telefono' => '2233445566',
            'nombre_contacto_emergencia' => '',
            'telefono_contacto_emergencia' => '',
            'correo' => 'anerol@gmail.com',
            'numero_seguro_social' => '23456789',
            'departamento_id' => 6,
        ]);
        Paciente::create([
            'nombre' => 'Leticia',
            'apellido_paterno' => 'Sedas',
            'apellido_materno' => 'Vargas',
            'fecha_nacimiento' => '1987-08-14',
            'sexo' => 'Femenino',
            'grupo_sanguineo' => '',
            'alergias' => 'Ninguna',
            'antecedentes_familiares' => 'Ninguno',
            'antecedentes_personales' => 'Ninguno',
            'telefono' => '1122334455',
            'nombre_contacto_emergencia' => '',
            'telefono_contacto_emergencia' => '',
            'correo' => 'lsedas@gmail.com',
            'numero_seguro_social' => '23456789',
            'departamento_id' => 6,
        ]);
        Paciente::create([
            'nombre' => 'Miguel Ángel',
            'apellido_paterno' => 'Hernández',
            'apellido_materno' => 'Rodríquez',
            'fecha_nacimiento' => '1978-09-12',
            'sexo' => 'Masculino',
            'grupo_sanguineo' => '',
            'alergias' => 'Ninguna',
            'antecedentes_familiares' => 'Ninguno',
            'antecedentes_personales' => 'Ninguno',
            'telefono' => '3344556677',
            'nombre_contacto_emergencia' => '',
            'telefono_contacto_emergencia' => '',
            'correo' => 'champy788@gmail.com',
            'numero_seguro_social' => '3456789',
            'departamento_id' => 6,
        ]);
    }
}
