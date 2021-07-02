<?php

use App\Models\Apartments;
use Illuminate\Database\Seeder;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apartments::factory()->count(20)->create();
    }
}
