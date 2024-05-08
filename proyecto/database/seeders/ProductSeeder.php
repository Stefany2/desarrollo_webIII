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
            'price' => 800,
            'stock' => 10,
            'image' => 'https://oechsle.vteximg.com.br/arquivos/ids/16322673-1000-1000/image-3dd13d30a3b84710b769c3de1772266c.jpg?v=638313100342730000',
        ]);
        Product::create([
            'name' => 'samsug galaxy A54 ',
            'description' => '5G,128GB,Pantalla 6.4.',
            'price' => 200,
            'stock' => 5,
            'image' => 'https://inversionesvaremat.com/wp-content/uploads/2023/04/Proyecto-nuevo-21.webp',
        ]);
   
    Product::create([
        'name' => 'Polo Yansus Tricolor ',
        'description' => 'Polo casual para hombre',
        'price' =>10.00,
        'stock' => 20,
        'image' => 'https://falabella.scene7.com/is/image/FalabellaPE/gsc_120296861_2633141_1?wid=800&hei=800&qlt=70',
    ]);
    Product::create([
        'name' => 'Jogger  Camuflaje',
        'description' => 'Casual para hombre',
        'price' => 9.00,
        'stock' => 30,
        'image' => 'https://www.dhresource.com/webp/m/0x0/f2/albu/g8/M00/62/01/rBVaV11l9VKARmvUAAMmm9tTwWs106.jpg',
    ]);
    Product::create([
        'name' => 'Collar Corazon  ',
        'description' => 'Acero Inoxidable mujer',
        'price' => 4.00,
        'stock' => 25,
        'image' => 'https://img4.dhresource.com/webp/m/0x0/f3/albu/km/j/05/389191d3-00b8-4e0f-8e73-ad82f8fd3939.jpg',
    ]);
    Product::create([
        'name' => 'Colgante Cruz  ',
        'description' => 'Acero Inoxidable hombre',
        'price' =>3.00,
        'stock' => 60,
        'image' => 'https://i.ebayimg.com/images/g/Au4AAOSwMWplzDwD/s-l1600.jpg ',
    ]);
    Product::create([
        'name' => 'Polo Oversize Roman tee ',
        'description' => 'Casual para hombre',
        'price' => 8.00,
        'stock' => 35,
        'image' => 'https://falabella.scene7.com/is/image/FalabellaPE/gsc_123780006_3738135_1?wid=1500&hei=1500&qlt=70',
    ]);
    Product::create([
        'name' => 'robot aspirador cecotec ',
        'description' => 'conga 1090,6 modos limpieza',
        'price' =>99.00,
        'stock' => 20,
        'image' => 'https://i.ebayimg.com/images/g/bc8AAOSwdy1dm1YJ/s-l500.png ',
    ]);

    }
}
