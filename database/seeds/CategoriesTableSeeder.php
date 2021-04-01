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
            'name' => 'Teologia',
            'description' => 'todos los libros de teologia',
            'slug' => Str::slug('Teologia', '-'),
            'user_id' => '1',
        ]);

        Category::create([
            'id' => 2,
            'name' => 'hermeneutica',
            'description' => 'todos los libros de hermeneutica',
            'slug' => Str::slug('hermeneutica', '-'),
            'user_id' => '1',
        ]);

        Category::create([
            'id' => 3,
            'name' => 'bibliologia',
            'description' => 'todos los libros de bibliologia',
            'slug' => Str::slug('bibliologia', '-'),
            'user_id' => '1',
        ]);

        Category::create([
            'id' => 4,
            'name' => 'homiletica',
            'description' => 'todos los libros de homiletica',
            'slug' => Str::slug('homiletica', '-'),
            'user_id' => '1',
        ]);

        Category::create([
            'id' => 5,
            'name' => 'lectura',
            'description' => 'todos los libros de lectura',
            'slug' => Str::slug('lectura', '-'),
            'user_id' => '1',
        ]);
    }
}
