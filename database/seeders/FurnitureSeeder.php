<?php

namespace Database\Seeders;

use App\Models\Furniture;
use Illuminate\Database\Seeder;

class FurnitureSeeder extends Seeder
{
    public function run(): void
    {
        Furniture::create([
            'name' => 'Sofa Minimalis Modern 3 Seater',
            'category' => 'Ruang Tamu',
            'material' => 'Kayu Jati & Kain Velvet',
            'price' => 3500000,
            'dimensions' => '200 cm x 85 cm x 75 cm',
            'image' => 'sofa_minimalis.jpg'
        ]);

        Furniture::create([
            'name' => 'Meja Makan Kayu Solid',
            'category' => 'Ruang Makan',
            'material' => 'Kayu Mahoni',
            'price' => 2800000,
            'dimensions' => '160 cm x 90 cm x 75 cm',
            'image' => 'meja_makan.jpg'
        ]);

        Furniture::create([
            'name' => 'Lemari Pakaian 3 Pintu Sliding',
            'category' => 'Kamar Tidur',
            'material' => 'Kayu Olahan Premium',
            'price' => 4200000,
            'dimensions' => '150 cm x 60 cm x 200 cm',
            'image' => 'lemari_pakaian.jpg'
        ]);
    }
}