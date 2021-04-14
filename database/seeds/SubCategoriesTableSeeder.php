<?php

use App\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Certificado Básico en Teología
         */

        SubCategory::create([
            'id' => 1,
            'name' => 'Trimestre 1',
            'description' => 'Introducción a la Biblia, Introducción a la Filosofía, Lenguaje y Comunicación 1, Métodos de Investigación Virtual, Inducción al Servicio Comunitario',
            'slug' => Str::slug('Trimestre 1', '-'),
            'category_id' => 1,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 2,
            'name' => 'Trimestre 2',
            'description' => 'Introducción al Antiguo Testamento, Historia del Cristianismo 1, Lenguaje y Comunicación 2, Métodos de Investigación 1, Servicio Comunitario',
            'slug' => Str::slug('Trimestre 2', '-'),
            'category_id' => 1,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 3,
            'name' => 'Trimestre 3',
            'description' => 'Introducción al Nuevo Testamento, Historia del Cristianismo 2, Nociones de la ética, Oratoria Sagrada 1, 	Servicio Comunitario',
            'slug' => Str::slug('Trimestre 3', '-'),
            'category_id' => 1,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 4,
            'name' => 'Trimestre 4',
            'description' => 'Hermenéutica Bíblica, Teología Sistemática 1, Gerencia Cristiana, Introducción a la Pedagogía, Jornada de Desarrollo Espiritual 1, Servicio Comunitario',
            'slug' => Str::slug('Trimestre 4', '-'),
            'category_id' => 1,
            'user_id' => '1',
        ]);

        /*
         * Certificado Avanzado en Teología
         */

        SubCategory::create([
            'id' => 5,
            'name' => 'Trimestre 1',
            'description' => 'Pentateuco, Filosofía de la religión, Teología sistemática 2, Gerencia eclesiástica, Elaboración de Anteproyecto de Servicio Comunitario',
            'slug' => Str::slug('Trimestre 1', '-'),
            'category_id' => 2,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 6,
            'name' => 'Trimestre 2',
            'description' => 'Libros Históricos, Teología de la Adoración, Gerencia y Ministerio, Metodología Teológica, Servicio Comunitario',
            'slug' => Str::slug('Trimestre 2', '-'),
            'category_id' => 2,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 7,
            'name' => 'Trimestre 3',
            'description' => 'Estudios de los Evangelios, Teología del Antiguo Testamento, Psicología y Ministerio, Métodos de investigación, Servicio Comunitario',
            'slug' => Str::slug('Trimestre 3', '-'),
            'category_id' => 2,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 8,
            'name' => 'Trimestre 4',
            'description' => 'Hechos de los Apóstoles, Electiva 1, Teología de las Misiones, Evangelización, Jornada de Desarrollo Espiritual 2, Servicio Comunitario',
            'slug' => Str::slug('Trimestre 4', '-'),
            'category_id' => 2,
            'user_id' => '1',
        ]);

        /*
         * Licenciatura en Teología
         */

        SubCategory::create([
            'id' => 9,
            'name' => 'Trimestre 1',
            'description' => 'Libros Sapienciales, Teología del Nuevo Testamento, Electiva 2, Derecho Aplicado, Seminario de Investigación, Ejecución del Proyecto de Servicio Comunitario',
            'slug' => Str::slug('Trimestre 1', '-'),
            'category_id' => 3,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 10,
            'name' => 'Trimestre 2',
            'description' => 'Libros Proféticos, Teologías Contemporáneas, Planificación Estratégica, Metodología Teológica, Servicio Comunitario',
            'slug' => Str::slug('Trimestre 2', '-'),
            'category_id' => 3,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 11,
            'name' => 'Trimestre 3',
            'description' => 'Epístolas, Teología de la Esperanza, Electiva 3, Servicio Comunitario',
            'slug' => Str::slug('Trimestre 3', '-'),
            'category_id' => 3,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 12,
            'name' => 'Trimestre 4',
            'description' => 'Apocalipsis, Trabajo Especial de Grado, Jornada de Desarrollo Espiritual 3, Servicio Comunitario',
            'slug' => Str::slug('Trimestre 4', '-'),
            'category_id' => 3,
            'user_id' => '1',
        ]);
    }
}
