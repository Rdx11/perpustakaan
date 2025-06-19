<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('books')->insert([
                'book_code'         => 'BK' . str_pad($index, 4, '0', STR_PAD_LEFT),
                'udc_number'        => $faker->numerify('###.##'),
                'reg_number'        => 'REG' . $faker->unique()->numberBetween(1000, 9999),
                'title'             => $faker->sentence(3),
                'publisher'         => $faker->company,
                'author'            => $faker->name,
                'publication_year'  => $faker->year,
                'publication_city'  => $faker->city,
                'edition'           => $faker->randomElement([null, '1st', '2nd', 'Revised']),
                'language'          => $faker->randomElement(['English', 'Indonesian', 'French']),
                'description'       => $faker->optional()->text(100),
                'isbn'              => $faker->optional()->isbn13(),
                'copies'            => $faker->numberBetween(1, 10),
                'main_subject'      => $faker->word,
                'additional_subject'=> $faker->optional()->word,
                'synopsis'          => $faker->optional()->text(200),
                'book_cover'        => asset('img/default-book-cover.png'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
