<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pizzas = [
            ['gusto' => 'Margherita', 'prezzo' => 6.50, 'created_at' => now(), 'updated_at' => now()],
            ['gusto' => 'Diavola', 'prezzo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['gusto' => 'Quattro Formaggi', 'prezzo' => 8.00, 'created_at' => now(), 'updated_at' => now()],
            ['gusto' => 'Prosciutto e Funghi', 'prezzo' => 7.80, 'created_at' => now(), 'updated_at' => now()],
            ['gusto' => 'Capricciosa', 'prezzo' => 8.50, 'created_at' => now(), 'updated_at' => now()],
            ['gusto' => 'Vegetariana', 'prezzo' => 7.20, 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('pizzas')->insert($pizzas);
    }
}
