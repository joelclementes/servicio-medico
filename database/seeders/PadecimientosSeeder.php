<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PadecimientosSeeder extends Seeder
{
    
    public function run(): void
    {
        $padecimientos = [
            ['nombre' => 'Artritis', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Asma', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cardiovasculares', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Control de peso', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Dermatológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Diabetes', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Dislipidemias', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Endocrinas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Gastrointestinales', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Genitourinarias', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Geriátricas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ginecológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Hematológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Hipertensión', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Infecciosas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Inmunológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Musculoesqueléticas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Neurológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Oftalmológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Oncológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Otorrinolaringológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Pediátricas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Psicológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Reumatológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Respiratorias', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Traumatológicas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Otras', 'created_at' => now(), 'updated_at' => now()],
        ];
        // Insertar los padecimientos en la tabla
        DB::table('padecimientos')->insert($padecimientos);
    }
}
