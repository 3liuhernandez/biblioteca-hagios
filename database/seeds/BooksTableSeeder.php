<?php

use App\Book;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * SUBCATEGORI 1
         */
        Book::create([
            'name' => 'Book 1.1',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.1.pdf',
            'slug' => Str::slug('Book 1.1', '-'),
            'sub_category_id' => 1,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.1',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.1.pdf',
            'slug' => Str::slug('Book 2.1', '-'),
            'sub_category_id' => 1,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORI 2
         */

        Book::create([
            'name' => 'Book 3.2',
            'description' => 'Description Book 3',
            'author' => 'Author Book 3',
            'path' => 'book3.2.pdf',
            'slug' => Str::slug('Book 3.2', '-'),
            'sub_category_id' => 2,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 4.2',
            'description' => 'Description Book 4',
            'author' => 'Author Book 4',
            'path' => 'book4.2.pdf',
            'slug' => Str::slug('Book 4.2', '-'),
            'sub_category_id' => 2,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORI 3
         */

        Book::create([
            'name' => 'Book 1.3',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.3.pdf',
            'slug' => Str::slug('Book 1.3', '-'),
            'sub_category_id' => 3,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.3',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.3.pdf',
            'slug' => Str::slug('Book 2.3', '-'),
            'sub_category_id' => 3,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORI 4
         */

        Book::create([
            'name' => 'Book 3.4',
            'description' => 'Description Book 3',
            'author' => 'Author Book 3',
            'path' => 'book3.4.pdf',
            'slug' => Str::slug('Book 3.4', '-'),
            'sub_category_id' => 4,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 4.4',
            'description' => 'Description Book 4',
            'author' => 'Author Book 4',
            'path' => 'book4.4.pdf',
            'slug' => Str::slug('Book 4.4', '-'),
            'sub_category_id' => 4,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 5
         */

        Book::create([
            'name' => 'Book 1.5',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.5.pdf',
            'slug' => Str::slug('Book 1.5', '-'),
            'sub_category_id' => 5,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.5',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.5.pdf',
            'slug' => Str::slug('Book 2.5', '-'),
            'sub_category_id' => 5,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORI 6
         */

        Book::create([
            'name' => 'Book 3.6',
            'description' => 'Description Book 3',
            'author' => 'Author Book 3',
            'path' => 'book3.6.pdf',
            'slug' => Str::slug('Book 3.6', '-'),
            'sub_category_id' => 6,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 4.6',
            'description' => 'Description Book 4',
            'author' => 'Author Book 4',
            'path' => 'book4.6.pdf',
            'slug' => Str::slug('Book 4.6', '-'),
            'sub_category_id' => 6,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 7
         */
        Book::create([
            'name' => 'Book 1.7',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.7.pdf',
            'slug' => Str::slug('Book 1.7', '-'),
            'sub_category_id' => 7,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.7',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.7.pdf',
            'slug' => Str::slug('Book 2.7', '-'),
            'sub_category_id' => 7,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORI 8
         */

        Book::create([
            'name' => 'Book 3.8',
            'description' => 'Description Book 3',
            'author' => 'Author Book 3',
            'path' => 'book3.8.pdf',
            'slug' => Str::slug('Book 3.8', '-'),
            'sub_category_id' => 8,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 4.8',
            'description' => 'Description Book 4',
            'author' => 'Author Book 4',
            'path' => 'book4.8.pdf',
            'slug' => Str::slug('Book 4.8', '-'),
            'sub_category_id' => 8,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 9
         */
        Book::create([
            'name' => 'Book 1.9',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.9.pdf',
            'slug' => Str::slug('Book 1.9', '-'),
            'sub_category_id' => 9,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.9',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.9.pdf',
            'slug' => Str::slug('Book 2.9', '-'),
            'sub_category_id' => 9,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 10
         */
        Book::create([
            'name' => 'Book 1.10',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.10.pdf',
            'slug' => Str::slug('Book 1.10', '-'),
            'sub_category_id' => 10,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.10',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.10.pdf',
            'slug' => Str::slug('Book 2.10', '-'),
            'sub_category_id' => 10,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 11
         */
        Book::create([
            'name' => 'Book 1.11',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.11.pdf',
            'slug' => Str::slug('Book 1.11', '-'),
            'sub_category_id' => 11,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.11',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.11.pdf',
            'slug' => Str::slug('Book 2.11', '-'),
            'sub_category_id' => 11,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 12
         */
        Book::create([
            'name' => 'Book 1.12',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.12.pdf',
            'slug' => Str::slug('Book 1.12', '-'),
            'sub_category_id' => 12,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.12',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.12.pdf',
            'slug' => Str::slug('Book 2.12', '-'),
            'sub_category_id' => 12,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 13
         */
        Book::create([
            'name' => 'Book 1.13',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.13.pdf',
            'slug' => Str::slug('Book 1.13', '-'),
            'sub_category_id' => 13,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.13',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.13.pdf',
            'slug' => Str::slug('Book 2.13', '-'),
            'sub_category_id' => 13,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 14
         */
        Book::create([
            'name' => 'Book 1.14',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.14.pdf',
            'slug' => Str::slug('Book 1.14', '-'),
            'sub_category_id' => 14,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.14',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.14.pdf',
            'slug' => Str::slug('Book 2.14', '-'),
            'sub_category_id' => 14,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 15
         */
        Book::create([
            'name' => 'Book 1.15',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.15.pdf',
            'slug' => Str::slug('Book 1.15', '-'),
            'sub_category_id' => 15,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.15',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.15.pdf',
            'slug' => Str::slug('Book 2.15', '-'),
            'sub_category_id' => 15,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 16
         */
        Book::create([
            'name' => 'Book 1.16',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.16.pdf',
            'slug' => Str::slug('Book 1.16', '-'),
            'sub_category_id' => 16,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.16',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.16.pdf',
            'slug' => Str::slug('Book 2.16', '-'),
            'sub_category_id' => 16,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 17
         */
        Book::create([
            'name' => 'Book 1.17',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.17.pdf',
            'slug' => Str::slug('Book 1.17', '-'),
            'sub_category_id' => 17,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.17',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.17.pdf',
            'slug' => Str::slug('Book 2.17', '-'),
            'sub_category_id' => 17,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 18
         */
        Book::create([
            'name' => 'Book 1..18',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.18.pdf',
            'slug' => Str::slug('Book 1.18', '-'),
            'sub_category_id' => 18,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2..18',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.18.pdf',
            'slug' => Str::slug('Book 2.18', '-'),
            'sub_category_id' => 18,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 19
         */
        Book::create([
            'name' => 'Book 1.19',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.19.pdf',
            'slug' => Str::slug('Book 1', '-'),
            'sub_category_id' => 19,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.19',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.19.pdf',
            'slug' => Str::slug('Book 2.19', '-'),
            'sub_category_id' => 19,
            'user_id' => 1,
        ]);

        /*
         * SUBCATEGORIA 20
         */
        Book::create([
            'name' => 'Book 1.20',
            'description' => 'Description Book 1',
            'author' => 'Author Book 1',
            'path' => 'book1.20.pdf',
            'slug' => Str::slug('Book 1.20', '-'),
            'sub_category_id' => 20,
            'user_id' => 1,
        ]);

        Book::create([
            'name' => 'Book 2.20',
            'description' => 'Description Book 2',
            'author' => 'Author Book 2',
            'path' => 'book2.20.pdf',
            'slug' => Str::slug('Book 2.20', '-'),
            'sub_category_id' => 20,
            'user_id' => 1,
        ]);
    }
}
