<?php

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => 'Certificado Básico en Teología',
            'description' => 'Trayecto 1',
            'slug' => Str::slug('Certificado Básico en Teología', '-'),
            'user_id' => '1',
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Certificado Avanzado en Teología',
            'description' => 'Trayecto 2',
            'slug' => Str::slug('Certificado Avanzado en Teología', '-'),
            'user_id' => '1',
        ]);

        Category::create([
            'id' => 3,
            'name' => 'Licenciatura en Teología',
            'description' => 'Trayecto 3',
            'slug' => Str::slug('Licenciatura en Teología', '-'),
            'user_id' => '1',
        ]);
    }
}
