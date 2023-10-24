<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\User;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create();
        Barang::factory()->count(20)->create();
    }
}

// <?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;

// class SantriSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         \App\Models\SantriModel::factory(10)->create();
//     }
// }