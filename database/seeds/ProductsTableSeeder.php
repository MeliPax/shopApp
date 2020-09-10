<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Laptops

        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop-1',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 3000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);

        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 3000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);

        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 3000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);

        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 4000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);

        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop-5',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);

        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop-6',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 6000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);

        Product::create([
            'name' => 'Laptop 7',
            'slug' => 'laptop-7',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 7000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);

        Product::create([
            'name' => 'Laptop 8',
            'slug' => 'laptop-8',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 8000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);

        Product::create([
            'name' => 'Laptop 9',
            'slug' => 'laptop-9',
            'details' => '3 inch,3 TB SSD, 32GB RAM',
            'price' => 9000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',

        ]);
    }
}
