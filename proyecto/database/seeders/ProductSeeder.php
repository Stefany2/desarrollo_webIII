<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Importar el modelo Product

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Pc Gamer',
            'description' => 'Intel core I7, 12va,Monitor 27,',
            'price' => 8.8499,
            'stock' => 10,
            'image' => 'https://oechsle.vteximg.com.br/arquivos/ids/16322673-1000-1000/image-3dd13d30a3b84710b769c3de1772266c.jpg?v=638313100342730000',
        ]);
        Product::create([
            'name' => 'samsug galaxy A54 ',
            'description' => '5G,128GB,Pantalla 6.4.',
            'price' => 1.597,
            'stock' => 5,
            'image' => 'https://inversionesvaremat.com/wp-content/uploads/2023/04/Proyecto-nuevo-21.webp',
        ]);

    }
}
