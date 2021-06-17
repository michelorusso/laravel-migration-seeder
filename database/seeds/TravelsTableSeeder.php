<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for( $i = 0; $i < 5 ; $i++) {
            $new_travel = new Travel();
            $new_travel->package_name = $faker->sentence(4);
            $new_travel->city = $faker->city();
            $new_travel->description = $faker->paragraph(4, true);
            $new_travel->days_number = $faker->randomNumber(2, false);
            $new_travel->start_date = $faker->date('Y_m_d');
            $new_travel->end_date = $faker->date('Y_m_d');
            $new_travel->price = $faker->randomNumber(2, false);
            $new_travel->slug = Str::slug($new_travel->package_name, '-');
            $new_travel->save();

        }
    }
}
