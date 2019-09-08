<?php

use Illuminate\Database\Seeder;

use App\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::Truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Book::create([
                'title' => 'Book_'.$i,
                'body' => $faker->paragraph
            ]);
        }

    }
}