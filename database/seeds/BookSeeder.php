<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Book1',
            'des' => 'this is test',
            'author' => 'this is author'
        ]);
        factory(App\Book::class, 2)->create();
    }
}
