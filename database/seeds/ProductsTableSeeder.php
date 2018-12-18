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
        for ($i=1; $i <= 30; $i++) {
            Product::create([
                'name' => 'Cats '.$i,
                'slug' => 'Cute Cats-'.$i,
                'details' => [13,14,15][array_rand([13,14,15])] . ' small, ' . [1, 2, 3][array_rand([1, 2, 3])] .' Silky, fluffy',
                'price' => rand(149, 249),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/laptop-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(1);
        }

        // Make Laptop 1 a Desktop as well. Just to test multiple categories
        

        // Desktops
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Dogs ' . $i,
                'slug' => 'dogs-' . $i,
                'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' medium, ' . [1, 2, 3][array_rand([1, 2, 3])] . '  Obedient, Silky',
                'price' => rand(249, 449),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/desktop-'.$i.'.jpg',
                'images' => '["products\/dummy\/desktop-2.jpg","products\/dummy\/desktop-3.jpg","products\/dummy\/desktop-4.jpg"]',
            ])->categories()->attach(2);
        }

        // Phones
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'PetCo Food ' . $i,
                'slug' => 'petco food items-' . $i,
                'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'take , away.' . [7, 8, 9][array_rand([7, 8, 9])] . ' nutricious, healthy',
                'price' => rand(79, 149),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/phone-'.$i.'.jpg',
                'images' => '["products\/dummy\/phone-2.jpg","products\/dummy\/phone-3.jpg","products\/dummy\/phone-4.jpg"]',
            ])->categories()->attach(3);
        }

        // Tablets
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Spa ' . $i,
                'slug' => 'pet care-' . $i,
                'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'net worth, 5.' . [10, 11, 12][array_rand([10, 11, 12])] . ' Daily Care, 24/7',
                'price' => rand(49999, 149999),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/tablet-'.$i.'.jpg',
                'images' => '["products\/dummy\/tablet-2.jpg","products\/dummy\/tablet-3.jpg","products\/dummy\/tablet-4.jpg"]',
            ])->categories()->attach(4);
        }

        // TVs
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Clothes ' . $i,
                'slug' => 'clothes-' . $i,
                'details' => [46, 50, 60][array_rand([7, 8, 9])] . ' all types, cats, dogs',
                'price' => rand(99, 249),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/tv-'.$i.'.jpg',
                'images' => '["products\/dummy\/tv-2.jpg","products\/dummy\/tv-3.jpg","products\/dummy\/tv-4.jpg"]',
            ])->categories()->attach(5);
        }

        // Cameras
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Birds ' . $i,
                'slug' => 'birds-' . $i,
                'details' => 'Love birds, and many other.',
                'price' => rand(79, 249),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/camera-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(6);
        }

        // Appliances
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Accessories ' . $i,
                'slug' => 'Accessories-' . $i,
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(79, 149),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/appliance-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(7);
        }

        // Select random entries to be featured
        Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 73, 80])->update(['featured' => true]);
    } 
    }

