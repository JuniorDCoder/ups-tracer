<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Tracking;
use Faker\Factory as Faker;

class TrackingSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 500; $i++) {
            Tracking::create([
                'product_number' => $faker->unique()->ean13,
                'current_location' => $faker->city,
                'status' => $faker->randomElement(['In transit', 'Delivered', 'Pending']),
            ]);
        }
    }
}
