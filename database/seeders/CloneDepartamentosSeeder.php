<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CloneDepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rutaArchivo = database_path('seeders/departamentos.sql');

        // Verificar si el archivo existe
        if (!File::exists($rutaArchivo)) {
            $this->command->error("El archivo $rutaArchivo no existe.");
            return;
        }

        // Leer el contenido del archivo .sql
        $sql = File::get($rutaArchivo);

        // Ejecutar las consultas SQL
        DB::unprepared($sql);

        // Obtengo los registros de la tabla departamentos
        $departamentos = DB::table('catdepartamentos')->get();

                // Itero los registros y los clono en la tabla departamentos
                foreach ($departamentos as $departamento) {
                    DB::table('departamentos')->insert([
                        'nombre' => $departamento->nombreDepartamento,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
    }
}
