<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Pizza::create([
        'name' => 'Americana',
        'description' => 'Nuestra famosa combinación de pizza americana, jamón, pimientos verdes y queso mozzarella, te encantará!',
        'image' => 'src\\assets\\images\\pizza-americana.jpg',
        'price' => 30.10
       ]);
       Pizza::create([
        'name' => 'Hawaiana',
        'description' => 'Se completa con jamón, jugosa piña y queso mozzarella. Exquisita combinación de trozos de pollo, piña, tocino y salsa BBQ',
        'image' => 'src\\assets\\images\\pizza-hawaiana.jpg',
        'price' => 35.10
       ]);
       Pizza::create([
        'name' => 'Peperoni',
        'description' => 'El pepperoni es un embutido similar al salami muy sabroso y con un toque picantón. Si te gusta, no puedes perderte esta pizza',
        'image' => 'src\\assets\\images\\pizza-peperoni.jpg',
        'price' => 37.10
       ]);
    }
}
