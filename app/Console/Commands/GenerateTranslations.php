<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenerateTranslations extends Command
{
    protected $signature = 'generate:translations {table}';
    protected $description = 'Generate JSON translations for a given table with singular keys';

    public function handle()
    {
        $table = $this->argument('table');

        // Obtener las columnas de la tabla
        $columns = DB::getSchemaBuilder()->getColumnListing($table);

        if (!$columns) {
            $this->error("No se encontraron columnas para la tabla '$table'.");
            return;
        }

        // Convertir el nombre de la tabla a singular
        $singularTable = Str::singular($table);

        // Ruta del archivo de traducción en inglés
        $filePath = lang_path('en.json');
        $translations = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

        foreach ($columns as $column) {
            $key = "{$singularTable}.{$column}";
            $value = Str::title(str_replace('_', ' ', $column));
            $translations[$key] = $value;
        }

        // Guardar en el archivo en.json
        file_put_contents($filePath, json_encode($translations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        $this->info("Traducciones generadas y guardadas en $filePath");
    }
}
