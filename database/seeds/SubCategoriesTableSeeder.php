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
         * TEOLOGIA
         */

        SubCategory::create([
            'id' => 1,
            'name' => 'Teologia 1',
            'description' => 'todos los libros de teologia 1',
            'slug' => Str::slug('Teologia 1', '-'),
            'category_id' => 1,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 2,
            'name' => 'Teologia 2',
            'description' => 'todos los libros de teologia 2',
            'slug' => Str::slug('Teologia 2', '-'),
            'category_id' => 1,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 3,
            'name' => 'Teologia 3',
            'description' => 'todos los libros de teologia 3',
            'slug' => Str::slug('Teologia 3', '-'),
            'category_id' => 1,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 4,
            'name' => 'Teologia 4',
            'description' => 'todos los libros de teologia 4',
            'slug' => Str::slug('Teologia 4', '-'),
            'category_id' => 1,
            'user_id' => '1',
        ]);

        /*
         * HERMENEUTICA
         */

        SubCategory::create([
            'id' => 5,
            'name' => 'hermeneutica 1',
            'description' => 'todos los libros de hermeneutica 1',
            'slug' => Str::slug('hermeneutica 1', '-'),
            'category_id' => 2,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 6,
            'name' => 'hermeneutica 2',
            'description' => 'todos los libros de hermeneutica 2',
            'slug' => Str::slug('hermeneutica 2', '-'),
            'category_id' => 2,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 7,
            'name' => 'hermeneutica 3',
            'description' => 'todos los libros de hermeneutica 3',
            'slug' => Str::slug('hermeneutica 3', '-'),
            'category_id' => 2,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 8,
            'name' => 'hermeneutica 4',
            'description' => 'todos los libros de hermeneutica 4',
            'slug' => Str::slug('hermeneutica 4', '-'),
            'category_id' => 2,
            'user_id' => '1',
        ]);

        /*
         * BIBLIOLOGIA
         */

        SubCategory::create([
            'id' => 9,
            'name' => 'bibliologia 1',
            'description' => 'todos los libros de bibliologia 1',
            'slug' => Str::slug('bibliologia 1', '-'),
            'category_id' => 3,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 10,
            'name' => 'bibliologia 2',
            'description' => 'todos los libros de bibliologia 2',
            'slug' => Str::slug('bibliologia 2', '-'),
            'category_id' => 3,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 11,
            'name' => 'bibliologia 3',
            'description' => 'todos los libros de bibliologia 3',
            'slug' => Str::slug('bibliologia 3', '-'),
            'category_id' => 3,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 12,
            'name' => 'bibliologia 4',
            'description' => 'todos los libros de bibliologia 4',
            'slug' => Str::slug('bibliologia 4', '-'),
            'category_id' => 3,
            'user_id' => '1',
        ]);

        /*
         * BIBLIOLOGIA
         */

        SubCategory::create([
            'id' => 13,
            'name' => 'homiletica 1',
            'description' => 'todos los libros de homiletica 1',
            'slug' => Str::slug('homiletica 1', '-'),
            'category_id' => 4,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 14,
            'name' => 'homiletica 2',
            'description' => 'todos los libros de homiletica 2',
            'slug' => Str::slug('homiletica 2', '-'),
            'category_id' => 4,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 15,
            'name' => 'homiletica 3',
            'description' => 'todos los libros de homiletica 3',
            'slug' => Str::slug('homiletica 3', '-'),
            'category_id' => 4,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 16,
            'name' => 'homiletica 4',
            'description' => 'todos los libros de homiletica 4',
            'slug' => Str::slug('homiletica 4', '-'),
            'category_id' => 4,
            'user_id' => '1',
        ]);

        /*
         * LECTURA
         */

        SubCategory::create([
            'id' => 17,
            'name' => 'lectura 1',
            'description' => 'todos los libros de lectura 1',
            'slug' => Str::slug('lectura 1', '-'),
            'category_id' => 5,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 18,
            'name' => 'lectura 2',
            'description' => 'todos los libros de lectura 2',
            'slug' => Str::slug('lectura 2', '-'),
            'category_id' => 5,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 19,
            'name' => 'lectura 3',
            'description' => 'todos los libros de lectura 3',
            'slug' => Str::slug('lectura 3', '-'),
            'category_id' => 5,
            'user_id' => '1',
        ]);

        SubCategory::create([
            'id' => 20,
            'name' => 'lectura 4',
            'description' => 'todos los libros de lectura 4',
            'slug' => Str::slug('lectura 4', '-'),
            'category_id' => 5,
            'user_id' => '1',
        ]);
    }
}
